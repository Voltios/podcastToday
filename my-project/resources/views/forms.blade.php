<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/High-contrast-audio-input-microphone.svg/2048px-High-contrast-audio-input-microphone.svg.png"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Podcast today</title>
    <link rel="stylesheet" href="{{ asset('css/formStyles.css') }}">
</head>

<body>
    @yield('login')
    @yield('register')
    @yield('crear')
    @yield('editarPrograma')
    @yield('crearEp')
    <script src="{{ asset('js/forms.js') }}"></script>
</body>

</html>
