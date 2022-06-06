<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1.0, user-scalable=0">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/High-contrast-audio-input-microphone.svg/2048px-High-contrast-audio-input-microphone.svg.png"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">


    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>PodcastToday</title>
</head>

<div class="cursor" id="biCur"></div>

<body class="light">

    <nav class="light" id="navbar">
        <ul class="actions nav-list-65 list">
            <li>
                <a class="light" href="{{ route('home') }}"><span><i
                            class="fa-solid fa-microphone"></i></span>Descubrir</a>
            </li>
            <li>
                <a href="{{ route('autores') }}"><span><i class="fa-solid fa-at"></i></span>Autores</a>
            </li>
            <li>
                <a href="{{ route('temas') }}"><span><i class="fa-solid fa-message"></i></span>Temas</a>
            </li>
            <!--
            <li>
                <select name="lang" id="">
                    <option value="ES">Español</option>
                    <option value="EN">English</option>
                    <option value="CA">Catalán / Valenciano</option>
                </select>
            </li> -->
            {{-- <li>
                <a id="themeChanger"><span><i class="fa-solid fa-moon"></i></span></a>
                <!-- <img src="Grupo 30.svg" alt="lunica" height="20"> -->
            </li> --}}
        </ul>
        @guest
            @if (Route::has('login'))
                <ul class="nav-list-35 list">
                    <li class="">
                        <a href="{{ route('login') }}"><span><i class="  fa-solid fa-user"></i></span>Iniciar sesión</a>
                    </li>
                    <li class="register">
                        <a href="{{ route('register') }}"><span><i class="fa-solid fa-plus"></i></span>Registrarse</a>
                    </li>

                </ul>
            @endif
        @else
            <ul class="nav-list-35 list">
                <li class="">
                    <a class="nombreUsuario" href="{{ route('profile', Auth::id()) }}"><span><i
                                class="fa-solid fa-user"></i>{{ Auth::user()->username }}</span></a>
                </li>
                <li>
                    <a class="logout" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        href="logg"><span> <i class="fa fa-power-off" aria-hidden="true"></i>Salir</span></a>
                    <form action="{{ route('logout') }}" method="POST" id="logout-form">
                        @csrf
                    </form>
                </li>
            </ul>
        @endguest

    </nav>
    <main>

        <div class="caja">
            @if (isset($programa))
                <img id="img" src="{{ asset('storage/cover_' . $programa->id . '.jpg') }}" height="200" alt="algo">
            @endif
        </div>


        @yield('inicio')
        @yield('temas')
        @yield('autores')
        @yield('perfil')
        @yield('login')
        @yield('programa')
        @yield('progTema')
        @yield('episodios')
    </main>
    <footer>

        <div class="colores">
            <div id="c1"></div>
            <div id="c2"></div>
            <div id="c3"></div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
    <script src="{{ asset('js/thief.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/cursor.js') }}"></script>

</body>

</html>
