@extends('forms')
@section('crearEp')
    <h1>Insertar episodio en {{ $programa->nombre }}</h1>
    <form action="{{ route('editarEp', $programa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre
            <input type="text" name="nombre">
        </label>
        <label for="descripcion">Descripción
            <input type="text" name="descripcion">
        </label>
        <button type="submit" class="btn">Enviar</button>
    </form>
@endsection
