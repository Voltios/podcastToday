@extends('index')
@section('programa')
    <h1 class="title">{{ $programa->nombre }}</h1>
    <img class="imgCover" 
     src={{ asset('storage/cover_' . $programa->id . '.jpg') }}
        alt="{{ __('cover ' . $programa->nombre) }}">
        <div class="podcast-description">
            <p>{{ $programa->descripcion }}</p>
        </div>
    <div class="infoEp">
        <h2>Episodios:</h2>
        @foreach ($episodios as $ep)
            <div class="episodio">
                <a href="{{ $ep->url }}">
                    <p class="ep_nombre">{{ $ep->nombre }}</p>
                </a>
                <p class="ep_descripcion">{{ $ep->descripcion }}</p>
            </div>
        @endforeach

        <p>Puntuación mensual: <span class="puntuacion">{{ $programa->puntuacion }}</span></p>

        <form action="{{ route('votar', $programa->id) }}" method="POST">
            @csrf
            <button class="botton" type="submit">Votar +1</button>
        </form>
    </div>
    @if (Auth::user() && $programa->user_id == Auth::user()->id)
        <div class="acciones">
            <form action="{{ route('editarPrograma', $programa->id) }}">
                <button type="submit" class="btn botton">Editar</button>
            </form>

            <form action="{{ route('modificarEpisodios', $programa->id) }}">
                <button type="submit" class="btn botton">Modificar episodios</button>
            </form>
        </div>
    @endif
@endsection
