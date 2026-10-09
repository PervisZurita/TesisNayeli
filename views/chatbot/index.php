<?php

declare(strict_types=1);

/** @var yii\web\View $this */

?>

<!-- =====================================================
     CHATBOT FLOTANTE
===================================================== -->

<div
    id="ethics-chatbot"
    class="ethics-chatbot"
>


    <!-- =================================================
         VENTANA DEL CHAT
    ================================================== -->

    <div
        id="chat-window"
        class="chat-window"
    >


        <!-- =============================================
             CABECERA
        ============================================== -->

        <div class="chat-header">

            <div class="chat-header-info">

                <div class="chat-avatar">

                    <i class="fa-solid fa-scale-balanced"></i>

                </div>

                <div>

                    <strong>
                        Asistente de Ética
                    </strong>

                    <span>
                        <i class="fa-solid fa-circle"></i>
                        En línea
                    </span>

                </div>

            </div>


            <button
                type="button"
                id="chat-close"
                class="chat-close"
                aria-label="Cerrar chatbot"
            >

                <i class="fa-solid fa-xmark"></i>

            </button>

        </div>


        <!-- =============================================
             MENSAJES
        ============================================== -->

        <div
            id="chat-messages"
            class="chat-messages"
        >

            <div class="bot-message">

                <div class="bot-avatar">

                    <i class="fa-solid fa-robot"></i>

                </div>

                <div class="message-bubble">

                    <p>
                        ¡Hola! 👋
                    </p>

                    <p>
                        Soy el asistente del
                        <strong>Código de Ética de la Investigación Científica</strong>.
                    </p>

                    <p>
                        Puedes preguntarme sobre temas como
                        plagio, consentimiento informado,
                        confidencialidad, integridad científica,
                        autoría y otros principios éticos.
                    </p>

                </div>

            </div>

        </div>


        <!-- =============================================
             PREGUNTAS SUGERIDAS
        ============================================== -->

        <div class="quick-questions">

            <button
                type="button"
                data-question="¿Qué es la ética de la investigación?"
            >
                ¿Qué es la ética?
            </button>

            <button
                type="button"
                data-question="¿Qué es el plagio?"
            >
                ¿Qué es el plagio?
            </button>

            <button
                type="button"
                data-question="¿Qué es el consentimiento informado?"
            >
                Consentimiento informado
            </button>

            <button
                type="button"
                data-question="¿Qué es la confidencialidad?"
            >
                Confidencialidad
            </button>

        </div>


        <!-- =============================================
             INPUT
        ============================================== -->

        <form
            id="chat-form"
            class="chat-form"
        >

            <input
                type="text"
                id="chat-input"
                placeholder="Escribe tu pregunta..."
                autocomplete="off"
            >

            <button
                type="submit"
                aria-label="Enviar"
            >

                <i class="fa-solid fa-paper-plane"></i>

            </button>

        </form>

    </div>


    <!-- =================================================
         BOTÓN FLOTANTE
    ================================================== -->

    <button
        type="button"
        id="chat-button"
        class="chat-button"
        aria-label="Abrir asistente"
        title="Asistente de Ética"
    >

        <i class="fa-solid fa-robot"></i>

        <span class="chat-notification">
            1
        </span>

    </button>

</div>


<style>

/* =====================================================
   CONTENEDOR PRINCIPAL
===================================================== */

#ethics-chatbot {
    position: fixed;

    left: 25px;
    bottom: 25px;

    z-index: 10000;

    font-family:
        Arial,
        Helvetica,
        sans-serif;
}


/* =====================================================
   BOTÓN FLOTANTE
===================================================== */

.chat-button {

    position: relative;

    width: 62px;
    height: 62px;

    border: none;

    border-radius: 50%;

    background:
        linear-gradient(
            135deg,
            #0f172a,
            #1e3a8a
        );

    color: white;

    font-size: 23px;

    cursor: pointer;

    box-shadow:
        0 8px 25px rgba(0, 0, 0, .25);

    transition:
        transform .25s ease,
        box-shadow .25s ease;
}


.chat-button:hover {

    transform:
        translateY(-4px)
        scale(1.04);

    box-shadow:
        0 12px 30px rgba(0, 0, 0, .30);
}


/* =====================================================
   NOTIFICACIÓN
===================================================== */

.chat-notification {

    position: absolute;

    top: -3px;
    right: -3px;

    width: 21px;
    height: 21px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #dc2626;

    color: white;

    font-size: 11px;
    font-weight: bold;

    border: 2px solid white;
}


/* =====================================================
   VENTANA
===================================================== */

.chat-window {

    position: absolute;

    left: 0;
    bottom: 78px;

    width: 380px;
    max-width: calc(100vw - 30px);

    height: 540px;
    max-height: calc(100vh - 110px);

    display: flex;
    flex-direction: column;

    background: white;

    border-radius: 20px;

    overflow: hidden;

    box-shadow:
        0 20px 60px rgba(0, 0, 0, .22);

    border:
        1px solid #e2e8f0;

    opacity: 0;

    visibility: hidden;

    transform:
        translateY(15px)
        scale(.96);

    transform-origin: bottom left;

    transition:
        opacity .2s ease,
        transform .2s ease,
        visibility .2s ease;
}


/* =====================================================
   CHAT ABIERTO
===================================================== */

.chat-window.active {

    opacity: 1;

    visibility: visible;

    transform:
        translateY(0)
        scale(1);
}


/* =====================================================
   CABECERA
===================================================== */

.chat-header {

    display: flex;

    align-items: center;
    justify-content: space-between;

    padding: 17px;

    background:
        linear-gradient(
            135deg,
            #0f172a,
            #1e3a8a
        );

    color: white;
}


.chat-header-info {

    display: flex;

    align-items: center;

    gap: 11px;
}


.chat-avatar {

    width: 42px;
    height: 42px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background:
        rgba(255,255,255,.15);

    font-size: 18px;
}


.chat-header strong {

    display: block;

    font-size: 15px;
}


.chat-header span {

    display: block;

    margin-top: 3px;

    font-size: 11px;

    opacity: .85;
}


.chat-header span i {

    font-size: 7px;

    margin-right: 3px;
}


.chat-close {

    border: none;

    background: transparent;

    color: white;

    font-size: 18px;

    cursor: pointer;

    width: 35px;
    height: 35px;

    border-radius: 50%;
}


.chat-close:hover {

    background:
        rgba(255,255,255,.12);
}


/* =====================================================
   MENSAJES
===================================================== */

.chat-messages {

    flex: 1;

    overflow-y: auto;

    padding: 18px;

    background: #f8fafc;
}


.bot-message {

    display: flex;

    align-items: flex-start;

    gap: 9px;

    margin-bottom: 15px;
}


.bot-avatar {

    min-width: 31px;

    width: 31px;
    height: 31px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #e2e8f0;

    color: #1e3a8a;

    font-size: 13px;
}


.message-bubble {

    max-width: 82%;

    padding: 11px 13px;

    background: white;

    border-radius:
        4px
        14px
        14px
        14px;

    box-shadow:
        0 2px 8px rgba(0,0,0,.05);

    color: #334155;

    font-size: 13px;

    line-height: 1.5;
}


.message-bubble p {

    margin:
        0 0 7px;
}


.message-bubble p:last-child {

    margin-bottom: 0;
}


/* =====================================================
   MENSAJE USUARIO
===================================================== */

.user-message {

    display: flex;

    justify-content: flex-end;

    margin-bottom: 15px;
}


.user-bubble {

    max-width: 82%;

    padding: 10px 13px;

    border-radius:
        14px
        4px
        14px
        14px;

    background: #1e3a8a;

    color: white;

    font-size: 13px;

    line-height: 1.5;
}


/* =====================================================
   PREGUNTAS RÁPIDAS
===================================================== */

.quick-questions {

    display: flex;

    gap: 6px;

    flex-wrap: wrap;

    padding: 10px 13px;

    border-top:
        1px solid #e2e8f0;

    background: white;
}


.quick-questions button {

    border:
        1px solid #cbd5e1;

    background: white;

    color: #334155;

    border-radius: 15px;

    padding: 6px 9px;

    font-size: 11px;

    cursor: pointer;

    transition: .2s;
}


.quick-questions button:hover {

    background: #f1f5f9;

    border-color: #94a3b8;
}


/* =====================================================
   FORMULARIO
===================================================== */

.chat-form {

    display: flex;

    align-items: center;

    gap: 8px;

    padding: 11px;

    background: white;

    border-top:
        1px solid #e2e8f0;
}


.chat-form input {

    flex: 1;

    min-width: 0;

    border:
        1px solid #cbd5e1;

    border-radius: 13px;

    padding:
        10px
        13px;

    outline: none;

    font-size: 13px;
}


.chat-form input:focus {

    border-color: #1e3a8a;

    box-shadow:
        0 0 0 3px
        rgba(30,58,138,.08);
}


.chat-form button {

    width: 42px;
    height: 42px;

    border: none;

    border-radius: 12px;

    background: #1e3a8a;

    color: white;

    cursor: pointer;

    flex-shrink: 0;
}


.chat-form button:hover {

    background: #172554;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 600px) {

    #ethics-chatbot {

        left: 15px;
        bottom: 15px;
    }


    .chat-window {

        width:
            calc(100vw - 30px);

        height:
            min(540px, calc(100vh - 100px));
    }


    .chat-button {

        width: 56px;
        height: 56px;
    }

}

</style>


<script>

/* =====================================================
   ELEMENTOS
===================================================== */

const chatButton =
    document.getElementById('chat-button');

const chatWindow =
    document.getElementById('chat-window');

const chatClose =
    document.getElementById('chat-close');

const chatForm =
    document.getElementById('chat-form');

const chatInput =
    document.getElementById('chat-input');

const chatMessages =
    document.getElementById('chat-messages');

const quickQuestions =
    document.querySelectorAll(
        '.quick-questions button'
    );


/* =====================================================
   ABRIR CHAT
===================================================== */

chatButton.addEventListener(
    'click',
    function () {

        chatWindow.classList.add('active');

        chatInput.focus();

    }
);


/* =====================================================
   CERRAR CHAT
===================================================== */

chatClose.addEventListener(
    'click',
    function () {

        chatWindow.classList.remove('active');

    }
);


/* =====================================================
   CONOCIMIENTOS DEL CHATBOT
===================================================== */

const conocimientos = [

    {
        palabras: [
            'hola',
            'buenas',
            'saludos',
            'buenos dias',
            'buenas tardes',
            'buenas noches'
        ],

        respuesta:
            '¡Hola! 👋 Soy el asistente del Código de Ética de la Investigación Científica. ¿Qué tema deseas consultar?'
    },


    {
        palabras: [
            'que es la etica',
            'que es etica',
            'etica investigacion',
            'etica de investigacion',
            'ética investigación'
        ],

        respuesta:
            'La ética de la investigación científica comprende los principios y normas que orientan la realización responsable de una investigación, procurando proteger a las personas participantes, garantizar la integridad científica y promover buenas prácticas.'
    },


    {
        palabras: [
            'principios',
            'principios eticos',
            'principios de la investigacion',
            'principios eticos investigacion'
        ],

        respuesta:
            'Entre los principios fundamentales de la investigación ética se encuentran el respeto por las personas, la beneficencia, la no maleficencia, la justicia, la integridad científica, la transparencia y la responsabilidad.'
    },


    {
        palabras: [
            'plagio',
            'que es el plagio',
            'que significa plagio',
            'plagiar',
            'copiar'
        ],

        respuesta:
            'El plagio consiste en presentar como propias las ideas, palabras, datos, resultados o trabajos de otra persona sin reconocer adecuadamente su autoría. Es una conducta contraria a la integridad científica.'
    },


    {
        palabras: [
            'consentimiento',
            'consentimiento informado',
            'que es consentimiento',
            'participar investigacion'
        ],

        respuesta:
            'El consentimiento informado es el proceso mediante el cual una persona recibe información clara y suficiente sobre una investigación, sus objetivos, procedimientos, posibles riesgos y beneficios, y decide participar voluntariamente.'
    },


    {
        palabras: [
            'confidencialidad',
            'privacidad',
            'datos personales',
            'informacion participante'
        ],

        respuesta:
            'La confidencialidad implica proteger la información proporcionada por los participantes de una investigación y evitar que sea divulgada o utilizada de manera no autorizada.'
    },


    {
        palabras: [
            'integridad cientifica',
            'integridad',
            'buena practica',
            'buenas practicas'
        ],

        respuesta:
            'La integridad científica implica actuar con honestidad, transparencia, responsabilidad y rigor durante todas las etapas de una investigación, desde su planificación hasta la publicación de sus resultados.'
    },


    {
        palabras: [
            'fabricacion de datos',
            'fabricar datos',
            'datos falsos',
            'inventar datos'
        ],

        respuesta:
            'La fabricación de datos consiste en inventar resultados, observaciones o información que nunca fueron obtenidos durante una investigación. Esta práctica vulnera la integridad científica.'
    },


    {
        palabras: [
            'falsificacion',
            'falsificar datos',
            'alterar datos',
            'manipular datos'
        ],

        respuesta:
            'La falsificación consiste en modificar, manipular u omitir datos o resultados de manera que la investigación presente una información que no corresponde con lo realmente obtenido.'
    },


    {
        palabras: [
            'autor',
            'autoria',
            'autoria cientifica',
            'autores'
        ],

        respuesta:
            'La autoría científica debe corresponder a las personas que realizaron contribuciones sustanciales a la investigación. Las contribuciones y responsabilidades de cada autor deben reconocerse de manera transparente.'
    },


    {
        palabras: [
            'conflicto de interes',
            'conflictos de interes',
            'interes personal'
        ],

        respuesta:
            'Un conflicto de interés puede presentarse cuando intereses personales, económicos, profesionales o institucionales pueden influir, o parecer influir, en las decisiones relacionadas con una investigación. Estos conflictos deben identificarse y gestionarse de manera transparente.'
    },


    {
        palabras: [
            'comite de etica',
            'comite etica',
            'comite de ética',
            'revision etica'
        ],

        respuesta:
            'Un comité de ética de investigación es un organismo encargado de revisar aspectos éticos de determinados proyectos de investigación, especialmente aquellos que involucran participantes humanos, para contribuir a su protección y bienestar.'
    },


    {
        palabras: [
            'riesgos',
            'riesgo investigacion',
            'riesgos investigacion'
        ],

        respuesta:
            'Los investigadores deben identificar y evaluar los posibles riesgos de un estudio y adoptar medidas para reducirlos. La protección y seguridad de los participantes debe ser una consideración fundamental.'
    },


    {
        palabras: [
            'beneficios',
            'beneficio investigacion',
            'beneficencia'
        ],

        respuesta:
            'La investigación debe procurar generar beneficios y, cuando existan posibles riesgos, estos deben evaluarse y minimizarse. El principio de beneficencia busca promover el bienestar y evitar daños innecesarios.'
    },


    {
        palabras: [
            'justicia',
            'principio de justicia',
            'igualdad participantes'
        ],

        respuesta:
            'El principio de justicia busca que los beneficios y las cargas de la investigación se distribuyan de manera equitativa y que la selección de participantes sea justa.'
    },


    {
        palabras: [
            'publicacion',
            'publicar resultados',
            'resultados investigacion'
        ],

        respuesta:
            'Los resultados de una investigación deben comunicarse de manera honesta, clara y transparente. No deben manipularse los resultados ni ocultarse información relevante de manera que pueda inducir a conclusiones engañosas.'
    },


    {
        palabras: [
            'citacion',
            'citar',
            'referencias',
            'fuentes'
        ],

        respuesta:
            'Las fuentes utilizadas en una investigación deben reconocerse mediante citas y referencias apropiadas. Esto permite reconocer el trabajo de otros autores y evitar el plagio.'
    },


    {
        palabras: [
            'ayuda',
            'que puedes hacer',
            'que puedes responder',
            'temas'
        ],

        respuesta:
            'Puedo responder preguntas relacionadas con ética de la investigación científica, plagio, consentimiento informado, confidencialidad, integridad científica, autoría, conflictos de interés, comités de ética, riesgos, justicia y buenas prácticas.'
    }

];


/* =====================================================
   NORMALIZAR TEXTO
===================================================== */

function normalizarTexto(texto) {

    return texto
        .toLowerCase()
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '')
        .replace(/[¿?¡!.,;:]/g, '')
        .trim();

}


/* =====================================================
   BUSCAR RESPUESTA
===================================================== */

function buscarRespuesta(pregunta) {

    const texto =
        normalizarTexto(pregunta);

    let mejorRespuesta = null;

    let mejorPuntaje = 0;


    conocimientos.forEach(
        function (item) {

            let puntaje = 0;


            item.palabras.forEach(
                function (palabra) {

                    const palabraNormalizada =
                        normalizarTexto(palabra);


                    if (
                        texto.includes(
                            palabraNormalizada
                        )
                    ) {

                        /*
                         * Las frases más largas
                         * tienen mayor peso.
                         */
                        puntaje +=
                            palabraNormalizada.length;

                    }

                }
            );


            if (puntaje > mejorPuntaje) {

                mejorPuntaje = puntaje;

                mejorRespuesta =
                    item.respuesta;

            }

        }
    );


    /*
     * Si no encontró coincidencia.
     */

    if (
        mejorRespuesta === null ||
        mejorPuntaje < 3
    ) {

        return `
            No encontré una respuesta relacionada
            con tu pregunta. 🤔
            <br><br>
            Puedes preguntarme sobre:
            <br>
            • Ética de la investigación
            <br>
            • Plagio
            <br>
            • Consentimiento informado
            <br>
            • Confidencialidad
            <br>
            • Integridad científica
            <br>
            • Autoría científica
            <br>
            • Conflictos de interés
        `;

    }


    return mejorRespuesta;

}


/* =====================================================
   ESCAPAR HTML
===================================================== */

function escaparHTML(texto) {

    const div =
        document.createElement('div');

    div.textContent = texto;

    return div.innerHTML;

}


/* =====================================================
   AGREGAR MENSAJE DEL USUARIO
===================================================== */

function agregarUsuario(pregunta) {

    const elemento =
        document.createElement('div');

    elemento.className =
        'user-message';


    elemento.innerHTML = `

        <div class="user-bubble">

            ${escaparHTML(pregunta)}

        </div>

    `;


    chatMessages.appendChild(elemento);

    chatMessages.scrollTop =
        chatMessages.scrollHeight;

}


/* =====================================================
   AGREGAR MENSAJE DEL BOT
===================================================== */

function agregarBot(respuesta) {

    const elemento =
        document.createElement('div');

    elemento.className =
        'bot-message';


    elemento.innerHTML = `

        <div class="bot-avatar">

            <i class="fa-solid fa-robot"></i>

        </div>

        <div class="message-bubble">

            ${respuesta}

        </div>

    `;


    chatMessages.appendChild(elemento);

    chatMessages.scrollTop =
        chatMessages.scrollHeight;

}


/* =====================================================
   PROCESAR PREGUNTA
===================================================== */

function procesarPregunta(pregunta) {

    pregunta = pregunta.trim();


    if (!pregunta) {

        return;

    }


    /*
     * Mostrar pregunta.
     */

    agregarUsuario(pregunta);


    /*
     * Limpiar input.
     */

    chatInput.value = '';


    /*
     * Pequeño retraso para
     * simular respuesta.
     */

    setTimeout(
        function () {

            const respuesta =
                buscarRespuesta(pregunta);

            agregarBot(respuesta);

        },
        400
    );

}


/* =====================================================
   FORMULARIO
===================================================== */

chatForm.addEventListener(
    'submit',
    function (event) {

        event.preventDefault();

        procesarPregunta(
            chatInput.value
        );

    }
);


/* =====================================================
   PREGUNTAS RÁPIDAS
===================================================== */

quickQuestions.forEach(
    function (button) {

        button.addEventListener(
            'click',
            function () {

                const pregunta =
                    button.dataset.question;

                procesarPregunta(
                    pregunta
                );

            }
        );

    }
);

</script>
