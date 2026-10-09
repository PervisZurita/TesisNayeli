<?php

declare(strict_types=1);

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Videos | Código de Ética en la Investigación Científica';

$this->registerCssFile('@web/css/videos.css');

$this->registerCssFile(
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'
);
?>

<section class="videos-page">

    <div class="videos-container">

        <!-- ENCABEZADO -->
        <header class="videos-header">

            <span class="videos-label">
                <i class="fa-solid fa-circle-play"></i>
                RECURSOS AUDIOVISUALES
            </span>

            <h1>
                Videos sobre
                <span>Ética en la Investigación Científica</span>
            </h1>

            <p>
                Explora contenidos audiovisuales que te ayudarán a comprender
                los principios, valores y buenas prácticas que orientan
                una investigación científica responsable.
            </p>

        </header>


        <!-- VIDEO PRINCIPAL -->
        <article class="featured-video">

            <div class="featured-video-player">

                <iframe
                    src="https://youtu.be/l6-s_nTCrsk"
                    title="Código de Ética en la Investigación Científica"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>

            </div>

            <div class="featured-video-info">

                <span class="video-category">
                    <i class="fa-solid fa-star"></i>
                    VIDEO DESTACADO
                </span>

                <h2>
                    Introducción al Código de Ética
                    en la Investigación Científica
                </h2>

                <p>
                    Conoce los principios fundamentales que deben orientar
                    el trabajo de investigadores y estudiantes durante
                    el desarrollo de una investigación científica.
                </p>

            </div>

        </article>


        <!-- CATEGORÍAS -->
        <div class="videos-section-title">

            <div>
                <span class="small-label">
                    APRENDE Y REFLEXIONA
                </span>

                <h2>
                    Biblioteca de videos
                </h2>
            </div>

        </div>


        <!-- GRID DE VIDEOS -->
        <div class="videos-grid">


            <!-- VIDEO 1 -->
            <article class="video-card">

                <div class="video-thumbnail">

                    <iframe
                        src="https://www.youtube.com/watch?v=U22OwyvsDBw"
                        title="Valores éticos en la investigación científica"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>

                </div>

                <div class="video-card-content">

                    <span class="video-tag">
                        Principios éticos
                    </span>

                    <h3>
                        Principios éticos de la investigación
                    </h3>

                    <p>
                        Aprende cuáles son los principales principios
                        que deben respetarse durante una investigación.
                    </p>

                </div>

            </article>


            <!-- VIDEO 2 -->
            <article class="video-card">

                <div class="video-thumbnail">

                    <iframe
                        src="https://www.youtube.com/embed/VIDEO_ID_2"
                        title="Integridad científica"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>

                </div>

                <div class="video-card-content">

                    <span class="video-tag">
                        Integridad científica
                    </span>

                    <h3>
                        Integridad y responsabilidad científica
                    </h3>

                    <p>
                        Descubre la importancia de actuar con honestidad,
                        transparencia y responsabilidad en la investigación.
                    </p>

                </div>

            </article>


            <!-- VIDEO 3 -->
            <article class="video-card">

                <div class="video-thumbnail">

                    <iframe
                        src="https://www.youtube.com/embed/VIDEO_ID_3"
                        title="Plagio académico"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>

                </div>

                <div class="video-card-content">

                    <span class="video-tag">
                        Buenas prácticas
                    </span>

                    <h3>
                        Plagio y buenas prácticas académicas
                    </h3>

                    <p>
                        Comprende qué es el plagio y cómo evitar
                        prácticas que afectan la integridad académica.
                    </p>

                </div>

            </article>


            <!-- VIDEO 4 -->
            <article class="video-card">

                <div class="video-thumbnail">

                    <iframe
                        src="https://www.youtube.com/embed/VIDEO_ID_4"
                        title="Consentimiento informado"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>

                </div>

                <div class="video-card-content">

                    <span class="video-tag">
                        Investigación responsable
                    </span>

                    <h3>
                        Consentimiento informado
                    </h3>

                    <p>
                        Conoce la importancia del consentimiento informado
                        cuando una investigación involucra participantes.
                    </p>

                </div>

            </article>


            <!-- VIDEO 5 -->
            <article class="video-card">

                <div class="video-thumbnail">

                    <iframe
                        src="https://www.youtube.com/embed/VIDEO_ID_5"
                        title="Conflictos de interés"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>

                </div>

                <div class="video-card-content">

                    <span class="video-tag">
                        Ética científica
                    </span>

                    <h3>
                        Conflictos de interés
                    </h3>

                    <p>
                        Aprende a identificar y gestionar posibles
                        conflictos de interés en una investigación.
                    </p>

                </div>

            </article>


            <!-- VIDEO 6 -->
            <article class="video-card">

                <div class="video-thumbnail">

                    <iframe
                        src="https://www.youtube.com/embed/VIDEO_ID_6"
                        title="Ética y publicación científica"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>

                </div>

                <div class="video-card-content">

                    <span class="video-tag">
                        Publicación científica
                    </span>

                    <h3>
                        Ética en la publicación científica
                    </h3>

                    <p>
                        Conoce algunas buenas prácticas relacionadas
                        con la publicación y comunicación de resultados.
                    </p>

                </div>

            </article>

        </div>


        <!-- MENSAJE FINAL -->
        <div class="videos-footer">

            <div class="footer-icon">
                <i class="fa-solid fa-book-open"></i>
            </div>

            <div>
                <h3>
                    Aprende, analiza y aplica
                </h3>

                <p>
                    La ética científica contribuye a generar investigaciones
                    confiables, responsables y respetuosas de las personas
                    y de la sociedad.
                </p>
            </div>

        </div>

    </div>

</section>