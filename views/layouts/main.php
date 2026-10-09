<?php

declare(strict_types=1);

/** @var yii\web\View $this */
/** @var string $content */

use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;


/*
 * =========================================================
 * CSS PRINCIPAL
 * =========================================================
 */
$this->registerCssFile('@web/css/abaut.css');


/*
 * =========================================================
 * FONT AWESOME
 * Se carga una sola vez
 * =========================================================
 */
$this->registerCssFile(
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'
);

?>

<?php $this->beginPage() ?>

<!DOCTYPE html>

<html
    lang="<?= Yii::$app->language ?>"
    class="h-100"
    data-bs-theme="light"
>

<head>

    <meta charset="<?= Yii::$app->charset ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <?php $this->head() ?>

    <title>
        <?= Html::encode(
            $this->title ?: 'Código de Ética'
        ) ?>
    </title>

</head>


<body class="d-flex flex-column h-100">


<?php $this->beginBody() ?>


<!-- =====================================================
     NAVBAR
===================================================== -->

<?php if (!Yii::$app->user->isGuest): ?>

    <?= $this->render('_header') ?>

<?php endif; ?>


<!-- =====================================================
     CONTENIDO PRINCIPAL
===================================================== -->

<main
    id="main"
    class="flex-grow-1"
    role="main"
>

    <div class="content-full">

        <?php if (!empty($this->params['breadcrumbs'])): ?>

            <?= Breadcrumbs::widget([
                'links' => $this->params['breadcrumbs'],
            ]) ?>

        <?php endif; ?>


        <?= Alert::widget() ?>


        <?= $content ?>

    </div>

</main>


<!-- =====================================================
     CHATBOT
     SOLO PARA USUARIOS AUTENTICADOS
===================================================== -->

<?php if (!Yii::$app->user->isGuest): ?>

    <?= $this->render('../chatbot/index') ?>

<?php endif; ?>


<!-- =====================================================
     FOOTER
===================================================== -->

<?php if (!Yii::$app->user->isGuest): ?>

    <?= $this->render('_footer') ?>

<?php endif; ?>


<?php $this->endBody() ?>

</body>

</html>

<?php $this->endPage() ?>
