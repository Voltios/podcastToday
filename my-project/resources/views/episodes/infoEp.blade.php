@extends('index')
@section('episodios')
    <h1>Episodios de {{ $programa->nombre }}</h1>
    @foreach ($episodios as $ep)
        <h2>{{ $ep->nombre }}</h2>
        <p>{{ $ep->descripcion }}</p>
        <form action="{{ route('eliminarEps', $ep->id, $programa->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn borrar">Borrar</button>
        </form>
        <form action="{{ route('editarEps', $ep->id) }}">
            <button type="submit" class="btn editar">Editar</button>
        </form>
    @endforeach
 
    <a href="{{ route('anyadirEps', $programa->id) }}">Añadir episodio</a>
@endsection
