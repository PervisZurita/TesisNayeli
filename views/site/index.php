<?php

/** @var yii\web\View $this */

use yii\helpers\Html;


$this->title = 'Código de Ética de la Investigación Científica';
$this->params['meta_description'] = 'A high-performance PHP framework best for developing web applications. Fast, secure, and professional.';
$this->params['meta_keywords'] = 'yii, yii2, php, framework, web application, high-performance';
?>
<div class="site-index">
<?php

/** @var yii\web\View $this */





$this->registerCssFile('@web/css/codigo-etica.css');

$this->registerJsFile('@web/js/codigo-etica.js', [
    'depends' => [\yii\web\YiiAsset::class]
]);

?>

<!-- ==========================================
     ENCABEZADO
========================================== -->

<section class="codigo-hero">

    <div class="codigo-hero-overlay"></div>

    <div class="codigo-hero-content">

        <div class="codigo-hero-badge">
            <span class="badge-icon">
                <i class="fa-solid fa-scale-balanced"></i>
            </span>

            <span>CODIGO ETICO + INVESTIGACION</span>
        </div>

        <div class="codigo-hero-line"></div>

        <h1>
            Ética de la
            <span>Investigación Científica</span>
        </h1>

        <p>
            Principios, valores y normas éticas que orientan la
            investigación científica y fortalecen su compromiso
            con la sociedad.
        </p>

        <div class="codigo-hero-info">

            <div class="hero-info-item">
                <i class="fa-solid fa-building-columns"></i>

                <div>
                    <strong>Universidad Técnica</strong>
                    <small>Luis Vargas Torres de Esmeraldas</small>
                </div>
            </div>

            <div class="hero-info-divider"></div>

            <div class="hero-info-item">
                <i class="fa-solid fa-book-open"></i>

                <div>
                    <strong>Documento institucional</strong>
                    <small>Investigación científica</small>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- ==========================================
     CONTENIDO PRINCIPAL
========================================== -->

<section class="codigo-section">

    <div class="codigo-container">

        <div class="codigo-intro">

            <div class="codigo-intro-header">

                <div class="codigo-intro-icon">
                    <i class="fa-solid fa-book-open-reader"></i>
                </div>

                <div>
                    <span class="section-label">
                        UNIVERSIDAD TÉCNICA “LUIS VARGAS TORRES”
                    </span>

                    <h2>
                        Código de Ética de la Investigación Científica
                    </h2>
                </div>

            </div>

            <div class="codigo-intro-line"></div>

            <p>
                Conoce los capítulos, artículos, principios y disposiciones
                que orientan la actividad científica dentro de la Universidad
                Técnica “Luis Vargas Torres” de Esmeraldas.
            </p>

            <div class="codigo-intro-features">

                <div class="intro-feature">
                    <div class="intro-feature-icon">
                        <i class="fa-solid fa-scale-balanced"></i>
                    </div>

                    <div>
                        <strong>Principios éticos</strong>
                        <span>
                            Orientaciones para una investigación responsable.
                        </span>
                    </div>
                </div>

                <div class="intro-feature">
                    <div class="intro-feature-icon">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>

                    <div>
                        <strong>Normativa</strong>
                        <span>
                            Artículos y disposiciones institucionales.
                        </span>
                    </div>
                </div>

                <div class="intro-feature">
                    <div class="intro-feature-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <div>
                        <strong>Comunidad científica</strong>
                        <span>
                            Compromiso con la sociedad y la investigación.
                        </span>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>


        <!-- =====================================
             CAPÍTULO I
        ====================================== -->

        <div class="capitulo">

            <button
                type="button"
                class="capitulo-btn"
                onclick="toggleCapitulo(this)"
            >

                <span class="capitulo-titulo">

                    <strong>
                        CAPÍTULO I
                    </strong>

                    <small>
                        OBJETIVO Y ALCANCE
                    </small>

                </span>

                <span class="flecha">
                    +
                </span>

            </button>


            <div class="capitulo-contenido">

                <!-- ARTÍCULO 1 -->

                <article class="articulo">

                    <div class="articulo-numero">
                        Art. 1
                    </div>

                    <div class="articulo-info">

                        <h3>
                            Objetivo
                        </h3>

                        <p>
                            El presente código tiene como objetivo establecer
                            los principios, valores éticos y las acciones que
                            orientan a la investigación científica en la
                            Universidad Técnica “Luis Vargas Torres” de
                            Esmeraldas.
                        </p>

                        <p>
                            Tomando en cuenta los fundamentos epistémicos,
                            como medios para hacer ciencia, desde lo axiológico
                            y del discurso científico del investigador.
                        </p>

                        <p>
                            La investigación desde la Universidad responderá
                            a las demandas y necesidades de la sociedad, al
                            sistema de planificación nacional, a los objetivos
                            de desarrollo sostenible, a la diversidad cultural
                            e igualdad de género y consideran al ser humano y
                            naturaleza como sujetos de derechos.
                        </p>

                        <p>
                            Se entiende por investigador, la persona dedicada
                            y comprometida de forma sistemática en la
                            planificación, ejecución, desarrollo y transferencia
                            de resultados derivados de la actividad científica
                            hacia la sociedad.
                        </p>

                        <p>
                            El investigador debe caracterizarse por su perfil
                            ético y responsable, desvestido de todo interés
                            material y protagónico como individuo.
                        </p>

                        <p>
                            La investigación científica se define desde la
                            búsqueda y sistematización de información sobre
                            un sujeto y objeto de estudio, mediante la
                            utilización de diferentes enfoques adaptados a una
                            realidad, obteniendo resultados verificables.
                        </p>

                    </div>

                </article>


                <!-- ARTÍCULO 2 -->

                <article class="articulo">

                    <div class="articulo-numero">
                        Art. 2
                    </div>

                    <div class="articulo-info">

                        <h3>
                            Alcance
                        </h3>

                        <p>
                            El Código de Ética en la Investigación Científica
                            se aplicará desde la Universidad Técnica
                            “Luis Vargas Torres” de Esmeraldas, en todas las
                            facultades, sedes, carreras y niveles de estudios,
                            tanto pregrado como postgrado.
                        </p>

                        <p>
                            También se aplicará en los procesos que se
                            desarrollan en la universidad y para las personas
                            que participan en los proyectos de investigación
                            como invitados y como investigadores externos en
                            convenio con la Universidad.
                        </p>

                        <h4>
                            El ser humano como sujeto de derechos
                        </h4>

                        <p>
                            El ser humano como sujeto de derechos a lo largo
                            de todo el ciclo de vida promueve la implementación
                            del Régimen del Buen Vivir, establecido en la
                            Constitución de Montecristi (2008).
                        </p>

                        <p>
                            Esto conlleva el reconocimiento de la condición
                            inalterable de cada persona como titular de
                            derechos, sin discriminación alguna.
                        </p>

                        <p>
                            Las personas son valoradas en sus condiciones
                            propias, celebrando la diversidad.
                        </p>

                        <p>
                            Así, se busca eliminar el machismo, el racismo,
                            la xenofobia y toda forma de discriminación
                            y violencia.
                        </p>

                        <h4>
                            La naturaleza como sujeto de derechos
                        </h4>

                        <p>
                            La naturaleza como sujeto de derechos implica
                            respetar integralmente su existencia, el
                            mantenimiento y regeneración de sus ciclos
                            vitales y su restauración en caso de degradación
                            o contaminación.
                        </p>

                        <p>
                            Existe una responsabilidad ética con las actuales
                            y futuras generaciones para que se mantenga,
                            precautele y se dé soporte a la vida en todas
                            sus formas.
                        </p>

                        <p>
                            También se reconoce el derecho de la población
                            a vivir en un ambiente sano y ecológicamente
                            equilibrado.
                        </p>

                        <p>
                            El ejercicio de los derechos se regirá de acuerdo
                            al Art. 11 de la Constitución de la República
                            del Ecuador (2008).
                        </p>

                    </div>

                </article>

            </div>

        </div>


        <!-- =====================================
             CAPÍTULO II
        ====================================== -->

        <div class="capitulo">

            <button
                type="button"
                class="capitulo-btn"
                onclick="toggleCapitulo(this)"
            >

                <span class="capitulo-titulo">

                    <strong>
                        CAPÍTULO II
                    </strong>

                    <small>
                        PRINCIPIOS ÉTICOS
                    </small>

                </span>

                <span class="flecha">
                    +
                </span>

            </button>


            <div class="capitulo-contenido">

                <!-- ARTÍCULO 3 -->

                <article class="articulo">

                    <div class="articulo-numero">
                        Art. 3
                    </div>

                    <div class="articulo-info">

                        <h3>
                            Ámbito
                        </h3>

                        <p>
                            Los principios éticos se definen como los
                            lineamientos contemplados y sistematizados
                            en este Código de Ética para orientar el
                            desempeño de los docentes, estudiantes,
                            investigadores, personal administrativo y
                            directivo en su dinámica científica.
                        </p>

                    </div>

                </article>


                <!-- ARTÍCULO 4 -->

                <article class="articulo">

                    <div class="articulo-numero">
                        Art. 4
                    </div>

                    <div class="articulo-info">

                        <h3>
                            Principios éticos en la investigación científica
                        </h3>

                        <p>
                            Son principios éticos la pertinencia de la
                            investigación científica, las competencias
                            didácticas del investigador, la transparencia
                            y confidencialidad de la información, la
                            vinculación con la sociedad y cooperación
                            interinstitucional y los comités de ética.
                        </p>


                        <h4>
                            Principios fundamentales
                        </h4>

                        <ul class="principios-lista">

                            <li>
                                Honestidad académica en el proceso de
                                investigación.
                            </li>

                            <li>
                                Respeto por la dignidad de la vida y
                                la biodiversidad.
                            </li>

                            <li>
                                Consentimiento informado de las personas
                                participantes en la investigación.
                            </li>

                            <li>
                                Consentimiento previo, libre e informado
                                de pueblos y nacionalidades.
                            </li>

                            <li>
                                Respeto y protección de los derechos de las
                                personas participantes en la investigación
                                y de la naturaleza.
                            </li>

                            <li>
                                Confidencialidad de los datos personales
                                obtenidos en procesos de investigación.
                            </li>

                            <li>
                                Respeto a los animales con fines de
                                experimentación.
                            </li>

                            <li>
                                Transparencia.
                            </li>

                            <li>
                                Legitimidad.
                            </li>

                            <li>
                                Solidaridad.
                            </li>

                            <li>
                                Pertinencia.
                            </li>

                        </ul>


                        <p>
                            En este código es concebido al investigador
                            como un ser humano auténtico, autónomo y
                            participativo, sus derechos están por encima
                            de la ciencia y la tecnología.
                        </p>

                        <p>
                            Las investigaciones deben estar orientadas
                            hacia el bien común.
                        </p>

                    </div>

                </article>

            </div>

        </div>


       


        <!-- CAPÍTULO III -->
        <div class="capitulo">
            <button type="button" class="capitulo-btn" onclick="toggleCapitulo(this)">
                <span class="capitulo-titulo"><strong>CAPÍTULO III</strong><small>PERTINENCIA DE LA INVESTIGACIÓN CIENTÍFICA</small></span>
                <span class="flecha">+</span>
            </button>
            <div class="capitulo-contenido">
                <article class="articulo"><div class="articulo-numero">Art. 5</div><div class="articulo-info"><h3>Ámbito</h3>
                <p>Como principio contenido en la Ley Orgánica de Educación Superior, responderá a las demandas y necesidades de la sociedad, al sistema de planificación nacional, a los Objetivos de Desarrollo Sostenible, a la diversidad cultural y a la igualdad de género.</p>
                <p>La investigación científica se fundamenta en la visión, misión, objetivos estratégicos y valores institucionales de la UTLVTE.</p></div></article>
                <article class="articulo"><div class="articulo-numero">Art. 6</div><div class="articulo-info"><h3>Acciones</h3><p>Para la consolidación de este principio es importante que los docentes, estudiantes, investigadores, personal administrativo y directivo participen mediante las siguientes formas:</p>
                <ol class="acciones-lista" type="a">
                <li>Involucramientos en las actividades de investigación y vinculación local, nacional e internacional que realice la universidad.</li>
                <li>Adopción y orientación de los lineamientos jurídicos e institucionales para la formulación, desarrollo y ejecución de los procesos y resultados de la investigación científica.</li>
                <li>Justificación y explicación en la fase de formulación del proyecto de investigación a la comunidad científica en general interesada.</li>
                </ol></div></article>
            </div>
        </div>

        <!-- CAPÍTULO IV -->
        <div class="capitulo">
            <button type="button" class="capitulo-btn" onclick="toggleCapitulo(this)"><span class="capitulo-titulo"><strong>CAPÍTULO IV</strong><small>COMPETENCIAS DIDÁCTICAS DEL INVESTIGADOR</small></span><span class="flecha">+</span></button>
            <div class="capitulo-contenido">
                <article class="articulo"><div class="articulo-numero">Art. 7</div><div class="articulo-info"><h3>Ámbito</h3><p>Como principio clave el desarrollo de competencias didácticas de los docentes, estudiantes, investigadores, personal administrativo y directivo realicen productos científicos con pertinencia social, ambiental y tecnológica que respondan a los índices de calidad definidos en la UTLVTE.</p></div></article>
                <article class="articulo"><div class="articulo-numero">Art. 8</div><div class="articulo-info"><h3>Acciones</h3><p>Las competencias didácticas en la investigación se desarrollan en las siguientes acciones:</p><ol class="acciones-lista" type="a">
                <li>Promover de manera constante procesos de formación en áreas específicas del conocimiento sobre métodos de investigación, propiedad intelectual, derechos de autor y transferencia de la comunidad científica a la sociedad.</li>
                <li>Actualizar constantemente los métodos de enseñanza y aprendizaje sobre la investigación en correspondencia con las tendencias nacionales e internacionales.</li>
                <li>Planificar los procesos de investigación bajo la referencia de las líneas de investigación de la UTLVTE y de los Objetivos de Desarrollo Sostenibles.</li>
                <li>Garantizar los procesos y resultados de la investigación con rigurosidad científica.</li>
                <li>El investigador responsable determinará si las personas adscritas al proyecto tienen el perfil de investigación correspondiente para incorporarse a las actividades de investigación.</li>
                <li>El investigador requiere haber participado en las fases de la formulación de la propuesta de investigación, así como en las etapas de desarrollo y evaluación.</li>
                <li>La participación activa de los investigadores, definen su adscripción como responsable o coautor en el proyecto o productos de investigación.</li>
                <li>Los investigadores que participen en calidad de autor principal y coautor deben conocer todas las etapas del proceso de investigación.</li>
                <li>Cuando el investigador decide no continuar en un proyecto o producto de investigación, debe solicitarlo por escrito e informar al coordinador del proyecto; responsable de investigación de la unidad académica y a la Dirección de Investigación, Innovación Científica y Tecnológica adscrita al Vicerrectorado de Investigación, Innovación y Postgrado.</li>
                <li>Los investigadores cooperarán con las auditorías que eventualmente se realicen desde los órganos de vigilancia internos de la universidad, específicamente del Comité de Ética de la UTLVTE y externos de organismos estatales.</li>
                <li>El proceso de formación implica la capacitación de los docentes, estudiantes e investigadores para generar productos científicos que cumplan con los indicadores de calidad de la UTLVTE y otras partes interesadas.</li>
                </ol></div></article>
            </div>
        </div>

        <!-- CAPÍTULO V -->
        <div class="capitulo">
            <button type="button" class="capitulo-btn" onclick="toggleCapitulo(this)"><span class="capitulo-titulo"><strong>CAPÍTULO V</strong><small>TRANSPARENCIA Y CONFIDENCIALIDAD DE LA INFORMACIÓN</small></span><span class="flecha">+</span></button>
            <div class="capitulo-contenido">
                <article class="articulo"><div class="articulo-numero">Art. 9</div><div class="articulo-info"><h3>Ámbito</h3><p>Refiere a la colocación de la información bajo la protección y resguardo que se produce desde las investigaciones de los docentes, estudiantes e investigadores y las personas participantes en los estudios. Se desarrollarán mecanismos de información desde el Comité de Ética, para monitorear los resultados de las investigaciones que tengan propósitos éticamente cuestionables y serán remitidos al Consejo Superior Universitario.</p></div></article>
                <article class="articulo"><div class="articulo-numero">Art. 10</div><div class="articulo-info"><h3>Acciones</h3><p>La presentación de los resultados de la investigación queda bajo la responsabilidad de los autores. Las bases de datos y registros de la información científica obtenida de la realidad se procesarán bajo lineamientos de responsabilidad, veracidad y legitimidad. Se debe mantener los datos y resultados sin falsificar o mal interpretar, manteniendo un manejo adecuado de datos y resultados de la investigación.</p><ol class="acciones-lista" type="a">
                <li>La Dirección de Investigación, Innovación Científica y Tecnológica diseñará normas y reglamentos sobre los procedimientos para la gestión y autorización de datos, información y protocolos de investigación internos y externos a la UTLVTE. Estas normas deberán ser aprobadas por Consejo Superior Universitario.</li>
                <li>Se asumirán todos aquellos acuerdos de Transparencia y Confidencialidad que la UTLVTE genere o le hayan solicitado por personas o instituciones participantes en los procesos de investigación previamente suscrito.</li>
                <li>Se diseñarán y organizarán bases de datos de autores y de investigaciones para disponer de información.</li>
                <li>Se establecerán acuerdos razonables para la precisión del proceso de recolección de la información empírica, para documentar el origen y la calidad de los datos.</li>
                <li>La citación de fuentes de información. Los informes parciales y finales de los reportes de las investigaciones en proceso y concluidos deben realizarse respetando el derecho de autor y principio de la propiedad intelectual. Las citas deben generarse apegadas a las normas metodológicas definidas en los medios de publicación y de difusión.</li>
                <li>Aplicar todos los medios razonables para evitar la pérdida de datos y la documentación durante su vida útil y, siendo conscientes del papel de los datos como recurso histórico institucional, actuarán como custodios temporales de su documentación y archivo.</li>
                <li>La gestión y tramitación de la propiedad intelectual o patentes será competencia de la Dirección de Investigación, Innovación Científica y Tecnológica.</li>
                </ol></div></article>
            </div>
        </div>

    </div>

</section>
<section class="foro-section"> <div class="foro-container"> <!-- CABECERA --> <div class="foro-header"> <div class="foro-header-icon"> <i class="fa-solid fa-comments"></i> </div> <div class="foro-header-content"> <span class="foro-label"> PARTICIPACIÓN DE LA COMUNIDAD </span> <h2> Foro de Debate </h2> <p> Comparte tus ideas, opiniones y reflexiones sobre la ética de la investigación científica. </p> </div> </div> <?php if (!Yii::$app->user->isGuest): ?> <!-- ACCIONES --> <div class="foro-actions"> <div class="foro-actions-text"> <span class="foro-actions-label"> <i class="fa-solid fa-users"></i> Comunidad </span> <strong> ¡Participa en el debate! </strong> <p> Crea nuevos debates y participa en conversaciones con otros usuarios de la comunidad. </p> </div> <?= Html::a( '<i class="fa-solid fa-plus"></i> Nuevo debate', ['foro/create'], [ 'class' => 'btn-nuevo-debate' ] ) ?> </div> <!-- LISTA DE DEBATES --> <div class="foro-list"> <?php if (!empty($foros)): ?> <?php foreach ($foros as $foro): ?> <article class="foro-card"> <div class="foro-card-icon"> <i class="fa-regular fa-comment-dots"></i> </div> <div class="foro-card-content"> <div class="foro-card-top"> <span class="foro-card-label"> DEBATE </span> <span class="foro-card-date"> <i class="fa-regular fa-clock"></i> <?= Yii::$app->formatter->asDatetime( $foro->fecha_creacion, 'php:d/m/Y H:i' ) ?> </span> </div> <h3> <?= Html::encode($foro->titulo) ?> </h3> <p> <?= Html::encode( \yii\helpers\StringHelper::truncate( $foro->contenido, 180 ) ) ?> </p> <div class="foro-card-footer"> <div class="foro-author"> <div class="foro-author-avatar"> <i class="fa-solid fa-user"></i> </div> <div> <small> Publicado por </small> <strong> <?= Html::encode( $foro->usuario->nombre ?? $foro->usuario->username ?? 'Usuario' ) ?> </strong> </div> </div> <?= Html::a( 'Ver debate <i class="fa-solid fa-arrow-right"></i>', [ 'foro/view', 'id' => $foro->id ], [ 'class' => 'btn-ver-debate' ] ) ?> </div> </div> </article> <?php endforeach; ?> <?php else: ?> <div class="foro-empty"> <div class="foro-empty-icon"> <i class="fa-regular fa-comments"></i> </div> <h3> Comienza una conversación </h3> <p> Sé el primero en crear un debate sobre ética e investigación científica. </p> <?= Html::a( '<i class="fa-solid fa-comments"></i> Crear primer debate', ['foro/create'], [ 'class' => 'btn-foro' ] ) ?> </div> <?php endif; ?> </div> <?php else: ?> <!-- USUARIO NO AUTENTICADO --> <div class="foro-login"> <div class="foro-login-icon"> <i class="fa-solid fa-lock"></i> </div> <div class="foro-login-content"> <span class="foro-login-label"> ACCESO PARA USUARIOS </span> <h3> Acceso restringido </h3> <p> Para participar en el foro debes iniciar sesión con una cuenta registrada. </p> <?= Html::a( '<i class="fa-solid fa-right-to-bracket"></i> Iniciar sesión', ['site/login'], [ 'class' => 'btn-foro' ] ) ?> </div> </div> <?php endif; ?> </div> </section>
    
</div>
