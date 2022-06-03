@extends('forms')
@section('crearEp')
    <h1>Insertar episodio en {{ $programa->nombre }}</h1>
    <form action="{{ route('anyadirEp') }}" method="POST">
        @csrf
        <label for="nombre">Nombre
            <input type="text" name="nombre">
        </label>
        <label for="descripcion">Descripción
            <input type="text" name="descripcion">
        </label>
        <label for="url">Url al episodio
            <input type="text" name="url">
        </label>
        <button type="submit" class="btn">Enviar</button>
    </form>
@endsection
