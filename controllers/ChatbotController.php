<?php

declare(strict_types=1);

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\PreguntasFrecuentes;

class ChatbotController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPreguntar(): array
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $pregunta = trim(
            (string) Yii::$app->request->post('pregunta', '')
        );

        if ($pregunta === '') {
            return [
                'success' => false,
                'respuesta' => 'Escribe una pregunta.'
            ];
        }

        $preguntaNormalizada = mb_strtolower(
            $pregunta,
            'UTF-8'
        );

        $registros = PreguntasFrecuentes::find()
            ->asArray()
            ->all();

        $mejorRespuesta = null;
        $mejorPuntaje = 0;

        foreach ($registros as $registro) {

            $texto = mb_strtolower(
                $registro['pregunta'],
                'UTF-8'
            );

            $palabras = preg_split(
                '/\s+/u',
                $preguntaNormalizada
            );

            $puntaje = 0;

            foreach ($palabras as $palabra) {

                $palabra = trim(
                    $palabra,
                    " \t\n\r\0\x0B¿?¡!.,;:"
                );

                if (mb_strlen($palabra, 'UTF-8') < 3) {
                    continue;
                }

                if (mb_strpos($texto, $palabra) !== false) {
                    $puntaje++;
                }
            }

            if ($puntaje > $mejorPuntaje) {

                $mejorPuntaje = $puntaje;

                $mejorRespuesta = $registro['respuesta'];
            }
        }

        if ($mejorRespuesta !== null && $mejorPuntaje >= 1) {

            return [
                'success' => true,
                'respuesta' => $mejorRespuesta
            ];
        }

        return [
            'success' => true,
            'respuesta' =>
                'No encontré una respuesta relacionada con tu pregunta. '
                . 'Puedes intentar escribirla de otra manera o consultar '
                . 'la sección de Preguntas Frecuentes.'
        ];
    }
}