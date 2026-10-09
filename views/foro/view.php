<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = $foro->titulo;

$this->registerCss(<<<'CSS'

/* =========================================
   PÁGINA DEL DEBATE
========================================= */

.debate-page {
    width: 100%;
    min-height: 100vh;
    padding: 50px 25px 90px;
    background:
        radial-gradient(
            circle at top right,
            rgba(37, 99, 235, .08),
            transparent 35%
        ),
        #f8fafc;
}

.debate-container {
    width: 100%;
    max-width: 1100px;
    margin: 0 auto;
}


/* =========================================
   VOLVER
========================================= */

.btn-volver {
    display: inline-flex;
    align-items: center;
    gap: 9px;

    margin-bottom: 22px;

    color: #2563eb !important;
    text-decoration: none;

    font-size: 14px;
    font-weight: 700;

    transition: all .2s ease;
}

.btn-volver:hover {
    gap: 13px;
}


/* =========================================
   CABECERA DEL DEBATE
========================================= */

.debate-header {
    position: relative;

    overflow: hidden;

    padding: 42px;

    margin-bottom: 22px;

    border-radius: 22px;

    background:
        linear-gradient(
            135deg,
            #0f172a 0%,
            #1e3a8a 55%,
            #2563eb 100%
        );

    color: white;

    box-shadow:
        0 20px 45px rgba(15, 23, 42, .18);
}

.debate-header::after {
    content: "";

    position: absolute;

    width: 250px;
    height: 250px;

    right: -80px;
    top: -100px;

    border-radius: 50%;

    background: rgba(255,255,255,.06);
}

.debate-label {
    position: relative;
    z-index: 2;

    display: inline-flex;
    align-items: center;

    padding: 6px 11px;

    margin-bottom: 12px;

    border-radius: 20px;

    background: rgba(255,255,255,.10);

    color: #bfdbfe;

    font-size: 11px;
    font-weight: 800;

    letter-spacing: 1.5px;
}

.debate-header h1 {
    position: relative;
    z-index: 2;

    margin: 0 0 20px;

    max-width: 850px;

    color: white;

    font-size: 34px;
    line-height: 1.25;

    font-weight: 800;
}

.debate-meta {
    position: relative;
    z-index: 2;

    display: flex;
    flex-wrap: wrap;

    gap: 12px 25px;
}

.debate-meta span {
    display: inline-flex;
    align-items: center;

    gap: 8px;

    color: #dbeafe;

    font-size: 14px;
}

.debate-meta i {
    color: #93c5fd;
}


/* =========================================
   CONTENIDO DEL DEBATE
========================================= */

.debate-content {
    padding: 32px;

    margin-bottom: 38px;

    background: white;

    border: 1px solid #e2e8f0;

    border-radius: 17px;

    box-shadow:
        0 8px 25px rgba(15,23,42,.05);
}

.debate-content-label {
    display: flex;
    align-items: center;

    gap: 8px;

    margin-bottom: 15px;

    color: #2563eb;

    font-size: 12px;
    font-weight: 800;

    letter-spacing: 1px;
}

.debate-content p {
    margin: 0;

    color: #475569;

    font-size: 16px;

    line-height: 1.85;

    white-space: pre-line;
}


/* =========================================
   TÍTULO RESPUESTAS
========================================= */

.respuestas-title {
    display: flex;
    align-items: center;
    justify-content: space-between;

    margin-bottom: 18px;
}

.respuestas-title h2 {
    display: flex;
    align-items: center;

    gap: 10px;

    margin: 0;

    color: #0f172a;

    font-size: 24px;
    font-weight: 800;
}

.respuestas-title h2 i {
    color: #2563eb;
}

.respuestas-count {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    min-width: 32px;
    height: 28px;

    padding: 0 9px;

    border-radius: 20px;

    background: #eff6ff;

    color: #2563eb;

    font-size: 12px;
    font-weight: 800;
}


/* =========================================
   TARJETA RESPUESTA
========================================= */

.respuesta-card {
    position: relative;

    padding: 25px;

    margin-bottom: 14px;

    background: white;

    border: 1px solid #e2e8f0;

    border-radius: 16px;

    box-shadow:
        0 6px 20px rgba(15,23,42,.04);

    transition:
        transform .2s ease,
        box-shadow .2s ease;
}

.respuesta-card:hover {
    transform: translateY(-2px);

    box-shadow:
        0 12px 28px rgba(15,23,42,.07);
}

.respuesta-top {
    display: flex;
    justify-content: space-between;

    gap: 15px;
}

.usuario-info {
    display: flex;
    align-items: center;

    gap: 12px;
}

.usuario-avatar {
    width: 46px;
    height: 46px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: linear-gradient(
        135deg,
        #dbeafe,
        #eff6ff
    );

    color: #2563eb;

    font-size: 17px;
}

.usuario-nombre {
    color: #0f172a;

    font-size: 14px;
    font-weight: 800;
}

.usuario-fecha {
    margin-top: 3px;

    color: #94a3b8;

    font-size: 12px;
}

.respuesta-contenido {
    margin-top: 19px;
    padding-top: 18px;

    border-top: 1px solid #f1f5f9;

    color: #475569;

    font-size: 15px;

    line-height: 1.8;

    white-space: pre-line;
}


/* =========================================
   ACCIONES RESPUESTA
========================================= */

.respuesta-acciones {
    display: flex;
    align-items: center;

    gap: 15px;

    margin-top: 18px;
    padding-top: 15px;

    border-top: 1px solid #f1f5f9;
}

.btn-editar,
.btn-eliminar {
    display: inline-flex;
    align-items: center;

    gap: 6px;

    text-decoration: none;

    font-size: 13px;
    font-weight: 700;

    transition: all .2s ease;
}

.btn-editar {
    color: #2563eb !important;
}

.btn-editar:hover {
    color: #1d4ed8 !important;
}

.btn-eliminar {
    color: #dc2626 !important;
}

.btn-eliminar:hover {
    color: #b91c1c !important;
}


/* =========================================
   SIN RESPUESTAS
========================================= */

.sin-respuestas {
    padding: 45px 25px;

    margin-bottom: 20px;

    text-align: center;

    background: white;

    border: 1px dashed #cbd5e1;

    border-radius: 17px;
}

.sin-respuestas-icon {
    width: 62px;
    height: 62px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin: 0 auto 15px;

    border-radius: 50%;

    background: #eff6ff;

    color: #2563eb;

    font-size: 25px;
}

.sin-respuestas h3 {
    margin: 0 0 7px;

    color: #0f172a;

    font-size: 19px;
}

.sin-respuestas p {
    margin: 0;

    color: #64748b;

    font-size: 14px;
}


/* =========================================
   FORMULARIO RESPONDER
========================================= */

.responder-card {
    position: relative;

    padding: 30px;

    margin-top: 30px;

    background: white;

    border: 1px solid #dbeafe;

    border-radius: 18px;

    box-shadow:
        0 12px 30px rgba(37,99,235,.07);
}

.responder-header {
    display: flex;
    align-items: center;

    gap: 14px;

    margin-bottom: 20px;
}

.responder-icon {
    width: 48px;
    height: 48px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 13px;

    background: #eff6ff;

    color: #2563eb;

    font-size: 20px;
}

.responder-header h2 {
    margin: 0;

    color: #0f172a;

    font-size: 21px;
    font-weight: 800;
}

.responder-header p {
    margin: 4px 0 0;

    color: #64748b;

    font-size: 13px;
}

.responder-card .form-group {
    margin-bottom: 15px;
}

.responder-card .form-control {
    width: 100%;

    min-height: 145px;

    padding: 15px 16px;

    resize: vertical;

    border: 1px solid #cbd5e1;

    border-radius: 11px;

    color: #334155;

    font-size: 15px;

    line-height: 1.6;

    box-shadow: none;

    transition: all .2s ease;
}

.responder-card .form-control::placeholder {
    color: #94a3b8;
}

.responder-card .form-control:focus {
    border-color: #2563eb;

    box-shadow:
        0 0 0 4px rgba(37,99,235,.10);
}

.btn-responder {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 8px;

    padding: 13px 22px;

    border: none;

    border-radius: 10px;

    background: #2563eb;

    color: white;

    font-size: 14px;
    font-weight: 700;

    cursor: pointer;

    transition: all .25s ease;

    box-shadow:
        0 8px 18px rgba(37,99,235,.20);
}

.btn-responder:hover {
    background: #1d4ed8;

    transform: translateY(-2px);

    box-shadow:
        0 12px 25px rgba(37,99,235,.28);
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 768px) {

    .debate-page {
        padding: 30px 15px 60px;
    }

    .debate-header {
        padding: 30px 24px;
    }

    .debate-header h1 {
        font-size: 26px;
    }

    .debate-content {
        padding: 25px;
    }

    .respuesta-card {
        padding: 20px;
    }

    .responder-card {
        padding: 23px;
    }

    .respuestas-title {
        align-items: flex-start;
    }

    .foro-card-footer {
        flex-direction: column;
    }

}

CSS);
?>

<div class="debate-page">

    <div class="debate-container">

        <!-- VOLVER -->

        <?= Html::a(
            '<i class="fa-solid fa-arrow-left"></i> Volver al foro',
            ['index'],
            [
                'class' => 'btn-volver'
            ]
        ) ?>


        <!-- =====================================
             CABECERA
        ====================================== -->

        <div class="debate-header">

            <span class="debate-label">
                <i class="fa-solid fa-comments"></i>
                DEBATE
            </span>

            <h1>
                <?= Html::encode($foro->titulo) ?>
            </h1>

            <div class="debate-meta">

                <span>
                    <i class="fa-solid fa-user"></i>

                    <?= Html::encode(
                        $foro->usuario->nombre
                        ?? $foro->usuario->username
                        ?? 'Usuario'
                    ) ?>
                </span>

                <span>
                    <i class="fa-regular fa-calendar"></i>

                    <?= Yii::$app->formatter->asDatetime(
                        $foro->fecha_creacion,
                        'php:d/m/Y H:i'
                    ) ?>
                </span>

            </div>

        </div>


        <!-- =====================================
             CONTENIDO DEL DEBATE
        ====================================== -->

        <div class="debate-content">

            <div class="debate-content-label">
                <i class="fa-solid fa-align-left"></i>
                CONTENIDO DEL DEBATE
            </div>

            <p>
                <?= Html::encode($foro->contenido) ?>
            </p>

        </div>


        <!-- =====================================
             RESPUESTAS
        ====================================== -->

        <div class="respuestas-title">

            <h2>
                <i class="fa-solid fa-comments"></i>
                Respuestas

                <span class="respuestas-count">
                    <?= count($respuestas) ?>
                </span>
            </h2>

        </div>


        <?php if (!empty($respuestas)): ?>

            <?php foreach ($respuestas as $respuesta): ?>

                <div class="respuesta-card">

                    <div class="respuesta-top">

                        <div class="usuario-info">

                            <div class="usuario-avatar">
                                <i class="fa-solid fa-user"></i>
                            </div>

                            <div>

                                <div class="usuario-nombre">

                                    <?= Html::encode(
                                        $respuesta->usuario->nombre
                                        ?? $respuesta->usuario->username
                                        ?? 'Usuario'
                                    ) ?>

                                </div>

                                <div class="usuario-fecha">

                                    <i class="fa-regular fa-clock"></i>

                                    <?= Yii::$app->formatter->asDatetime(
                                        $respuesta->fecha_creacion,
                                        'php:d/m/Y H:i'
                                    ) ?>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="respuesta-contenido">

                        <?= Html::encode(
                            $respuesta->contenido
                        ) ?>

                    </div>


                    <?php if (
                        $respuesta->usuario_id == Yii::$app->user->id
                    ): ?>

                        <div class="respuesta-acciones">

                            <?= Html::a(
                                '<i class="fa-solid fa-pen"></i> Editar',
                                [
                                    '/foro-respuesta/update',
                                    'id' => $respuesta->id
                                ],
                                [
                                    'class' => 'btn-editar'
                                ]
                            ) ?>

                            <?= Html::a(
                                '<i class="fa-solid fa-trash"></i> Eliminar',
                                [
                                    '/foro-respuesta/delete',
                                    'id' => $respuesta->id
                                ],
                                [
                                    'class' => 'btn-eliminar',
                                    'data' => [
                                        'method' => 'post',
                                        'confirm' => '¿Deseas eliminar esta respuesta?'
                                    ]
                                ]
                            ) ?>

                        </div>

                    <?php endif; ?>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <div class="sin-respuestas">

                <div class="sin-respuestas-icon">
                    <i class="fa-regular fa-comments"></i>
                </div>

                <h3>
                    Todavía no hay respuestas
                </h3>

                <p>
                    Sé el primero en participar en esta conversación.
                </p>

            </div>

        <?php endif; ?>


        <!-- =====================================
             FORMULARIO DE RESPUESTA
        ====================================== -->

        <div class="responder-card">

            <div class="responder-header">

                <div class="responder-icon">
                    <i class="fa-solid fa-reply"></i>
                </div>

                <div>

                    <h2>
                        Escribe una respuesta
                    </h2>

                    <p>
                        Comparte tu opinión y participa en el debate.
                    </p>

                </div>

            </div>


            <?php $form = ActiveForm::begin([
                'action' => [
                    '/foro-respuesta/create',
                    'foro_id' => $foro->id
                ],
                'method' => 'post',
            ]); ?>


            <?= $form->field(
                $respuesta,
                'contenido'
            )->textarea([
                'placeholder' =>
                    'Escribe tu opinión o respuesta...'
            ])->label(false) ?>


            <?= Html::submitButton(
                '<i class="fa-solid fa-paper-plane"></i> Publicar respuesta',
                [
                    'class' => 'btn-responder'
                ]
            ) ?>


            <?php ActiveForm::end(); ?>

        </div>

    </div>

</div>
