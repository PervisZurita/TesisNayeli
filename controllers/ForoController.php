<?php

namespace app\controllers;

use Yii;
use app\models\Foro;
use app\models\ForoRespuesta;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ForoController extends Controller
{
    
public function behaviors()
{
    return [
        'access' => [
            'class' => AccessControl::class,

            'rules' => [

                // CUALQUIER PERSONA PUEDE VER EL FORO
                [
                    'allow' => true,
                    'actions' => [
                        'index',
                        'view',
                    ],
                    'roles' => ['?', '@'],
                ],

                // SOLO USUARIOS CON CUENTA PUEDEN CREAR
                // DEBATES Y RESPUESTAS
                [
                    'allow' => true,
                    'actions' => [
                        'create',
                        'reply',
                    ],
                    'roles' => ['@'],
                ],

                // SOLO EL USUARIO AUTENTICADO PUEDE
                // ACCEDER A ESTAS ACCIONES
                [
                    'allow' => true,
                    'actions' => [
                        'delete',
                        'delete-reply',
                    ],
                    'roles' => ['@'],
                ],
            ],
        ],
    ];
}


    /**
     * Lista todos los debates.
     */
    public function actionIndex()
    {
        $foros = Foro::find()
            ->with('usuario')
            ->orderBy(['fecha_creacion' => SORT_DESC])
            ->all();

        return $this->render('index', [
            'foros' => $foros,
        ]);
    }

    /**
     * Muestra un debate y sus respuestas.
     */
    public function actionView($id)
    {
        $foro = $this->findModel($id);

        $respuestas = ForoRespuesta::find()
            ->with('usuario')
            ->where(['foro_id' => $foro->id])
            ->orderBy(['fecha_creacion' => SORT_ASC])
            ->all();

        $respuesta = new ForoRespuesta();
        $respuesta->foro_id = $foro->id;

        if ($respuesta->load(Yii::$app->request->post())) {

            $respuesta->usuario_id = Yii::$app->user->id;
            $respuesta->foro_id = $foro->id;

            if ($respuesta->save()) {

                Yii::$app->session->setFlash(
                    'success',
                    'Tu respuesta fue publicada correctamente.'
                );

                return $this->refresh();
            }
        }

        return $this->render('view', [
            'foro' => $foro,
            'respuestas' => $respuestas,
            'respuesta' => $respuesta,
        ]);
    }

    /**
     * Crear un nuevo debate.
     */
    public function actionCreate()
    {
        $foro = new Foro();

        if ($foro->load(Yii::$app->request->post())) {

            $foro->usuario_id = Yii::$app->user->id;

            if ($foro->save()) {

                Yii::$app->session->setFlash(
                    'success',
                    'El debate fue creado correctamente.'
                );

                return $this->redirect([
                    'view',
                    'id' => $foro->id
                ]);
            }
        }

        return $this->render('create', [
            'foro' => $foro,
        ]);
    }

    /**
     * Crear una respuesta desde una acción independiente.
     */
    public function actionReply($foro_id)
    {
        $foro = $this->findModel($foro_id);

        $respuesta = new ForoRespuesta();

        $respuesta->foro_id = $foro->id;
        $respuesta->usuario_id = Yii::$app->user->id;

        if ($respuesta->load(Yii::$app->request->post())) {

            $respuesta->foro_id = $foro->id;
            $respuesta->usuario_id = Yii::$app->user->id;

            if ($respuesta->save()) {

                Yii::$app->session->setFlash(
                    'success',
                    'Respuesta publicada correctamente.'
                );
            }
        }

        return $this->redirect([
            'view',
            'id' => $foro->id
        ]);
    }

    /**
     * Eliminar un debate.
     */
    public function actionDelete($id)
    {
        $foro = $this->findModel($id);

        if ($foro->usuario_id != Yii::$app->user->id) {
            throw new \yii\web\ForbiddenHttpException(
                'No tienes permiso para eliminar este debate.'
            );
        }

        $foro->delete();

        Yii::$app->session->setFlash(
            'success',
            'El debate fue eliminado correctamente.'
        );

        return $this->redirect(['index']);
    }

    /**
     * Eliminar una respuesta.
     */
    public function actionDeleteReply($id)
    {
        $respuesta = ForoRespuesta::findOne($id);

        if ($respuesta === null) {
            throw new NotFoundHttpException(
                'La respuesta no existe.'
            );
        }

        if ($respuesta->usuario_id != Yii::$app->user->id) {
            throw new \yii\web\ForbiddenHttpException(
                'No tienes permiso para eliminar esta respuesta.'
            );
        }

        $foroId = $respuesta->foro_id;

        $respuesta->delete();

        Yii::$app->session->setFlash(
            'success',
            'La respuesta fue eliminada correctamente.'
        );

        return $this->redirect([
            'view',
            'id' => $foroId
        ]);
    }

    /**
     * Busca un debate por su ID.
     */
    protected function findModel($id)
    {
        if (($model = Foro::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(
            'El debate solicitado no existe.'
        );
    }
}
