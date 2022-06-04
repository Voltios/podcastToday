@extends('index')
@section('episodios')
    <h1>Episodios de {{ $programa->nombre }}</h1>
    @foreach ($episodios as $ep)
        <div class="infoEp">

            <div class="episodio">
                <a href="{{ $ep->url }}"> <p class="ep_nombre">{{ $ep->nombre }}</p></a>
                <p class="ep_descripcion">{{ $ep->descripcion }}</p>
            </div>
            <div class="btn-cont">
                <form action="{{ route('eliminarEps', $ep->id, $programa->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="addProgram borrar">Borrar</button>
                </form>
                <form action="{{ route('editarEps', $ep->id) }}">
                    <button type="submit" class="addProgram editar">Editar</button>
                </form>
            </div>
    @endforeach
    </div>
    <a class="anyadirr" href="{{ route('anyadirEps', $programa->id) }}">Añadir episodio</a>
@endsection
