@extends('index')
@section('inicio')
    <h1>{{ $programa->nombre }}</h1>
    <h2>Programa destacado</h2>

    <div class="podcast-content">
        <div class="info-content">

            <img class="imgCover" src="{{ asset('storage/cover_' . $programa->id . '.jpg') }}"
                alt="cover {{ $programa->nombre }}" height="200px">
            <p class="podcast-description">
                {{ $programa->descripcion }}
            </p>

            <h3>Valoración semanal <span class="puntuacion">{{ $programa->puntuacion }}</span></h3>

        </div>
        <div class="action-btns" id="progRef">
            <a id="." href="{{ route('programa', $programa->id) }}">Ir al programa</a>
        </div>
        <div class="action-btns" id="externalLink">
            <a class="action-btn" id="externalLink" href="{{ $programa->url }}">Escuchar ahora!</a>
        </div>

    </div>
@endsection
