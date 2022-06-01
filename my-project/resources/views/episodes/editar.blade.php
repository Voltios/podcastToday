@extends('forms')
@section('crearEp')
    <h1>Editar episodio {{ $ep->nombre }}</h1>
    <form action="{{ route('editarEp', $ep->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre
            <input type="text" name="nombre" value="{{ $ep->nombre }}">
        </label>
        <label for="descripcion">Descripción
            <input type="text" name="descripcion" value="{{ $ep->descripcion }}">
        </label>
        <button type="submit" class="btn">Enviar</button>
    </form>
@endsection
