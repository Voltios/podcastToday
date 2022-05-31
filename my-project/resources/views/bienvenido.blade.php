<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/High-contrast-audio-input-microphone.svg/2048px-High-contrast-audio-input-microphone.svg.png"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">



    <link rel="stylesheet" href="{{ asset('css/welcomeStyles.css') }}">

    <title>Podcast Today</title>
</head>

<body class="welcome-body">
    <div class="cursor" id="biCur"></div>


    <div class="container">
        <section id="one" class="one">

            <h1>Podcast today</h1>
            <h2>Descubre <span class="violeta">podcasts</span> y promociona los tuyos</h2>
            <div class="button-container">
                <a class="button" href="{{ route('home') }}">Entrar</a>
                <a class="button" href="#two">Saber más</a>
            </div>
        </section>
        <section id="two" class="two">
            <h1>¿Qué es Podcast Today?</h1>
            <div class="text-container">
                <p class="text">
                    <span class="morao">Podcast Today</span> es una nueva plataforma donde podrás descubrir
                    programas de radio de la mano de los
                    autores. Tendrás acceso a una gran cantidad de programas organizados por tema y autor, para que
                    puedas hacer tus búsquedas más precisas.
                </p>
                <p class="text">
                    Como <span class="morao">creador</span>, podrás subir información sobre tus programas para
                    que el resto de usuarios te conozcan
                    y así conseguir más oyentes.
                </p>
                <p class="text">
                    Como usuario regular, verás cada semana un nuevo programa <span
                        class="morao">destacado</span>, además de buscar entre la gran
                    variedad de programas diferentes que hay.
                </p>
            </div>
        </section>
        <section id="three" class="three">
            <h1>¿Cómo funciona?</h1>
            <div class="text-container">
                <p class="text">
                    Es tan sencillo como <span class="azul">entrar</span> en la aplicación y empezar a
                    descubrir los nuevos programas que te están esperando.
                </p>
                <p class="text">
                    Podrás crear una cuenta si así lo prefieres, y así tener más <span
                        class="azul">organizados </span>tus programas.
                </p>

            </div>
        </section>
        <section id="four" class="four">
            <h1>¿Te apuntas?</h1>
            <div class="text-container">
                <p class="text">
                    Es tan sencillo como <span class="inv-four">entrar</span> en la aplicación y empezar a
                    descubrir los nuevos programas que te están esperando.
                </p>

        </section>
        <section id="five" class="five">
            <footer>
                <div class="logo-container">
                    <div class="logo"></div>
                </div>
                <p>App creada <span class="amarillo">y</span> diseñada por <span class="amarillo">Ales
                        Volta</span></p>
                <div class="networks">
                    <div class="network instagram">
                        <a href="https://www.instagram.com/alesvolta_" target="_blank"><img
                                src="{{ asset('storage/logos/instagram.svg') }}" alt="instagram" height="45"></a>
                    </div>
                    <div class="network twitter">
                        <a href="https://www.twitter.com/alesvolta_" target="_blank"><img
                                src="{{ asset('storage/logos/twitter.svg') }}" alt="twitter" height="45"></a>
                    </div>
                    <div class="network github">
                        <a href="https://www.github.com/alesvt" target="_blank"><img
                                src="{{ asset('storage/logos/github.svg') }}" alt="github" height="45"></a>
                    </div>
                    <div class="network dribble">
                        <a href="https://dribbble.com/alesv" target="_blank"><img
                                src="{{ asset('storage/logos/dribbble.svg') }}" alt="dribbble" height="45"></a>
                    </div>
                </div>
                <p><i class="fa fa-copyright amarillo" aria-hidden="true"></i> Todos los <a href="http://creativecommons.org/licenses/by-nc/4.0/" class="amarillo">derechos</a> reservados</p>

            </footer>
        </section>
    </div>

    <div class="navv">
        <ul>
            <a href="#one">
                <li class="one first"></li>
            </a>
            <a href="#two">
                <li class="two"></li>
            </a>
            <a href="#three">
                <li class="three"></li>
            </a>
            <a href="#four">
                <li class="four"></li>
            </a>
            <a href="#five">
                <li class="five"></li>
            </a>
        </ul>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/cursor.js') }}"></script>
    <script src="{{ asset('js/progressBar.js') }}"></script>

</body>

</html>
