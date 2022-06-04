@extends('forms')
@section('crearEp')
    @if (session('mensaje'))
        <div class="mensaje-prog">
            {{ session('mensaje') }}
        </div>
    @endif
    <div class="form-container crearProg">
        <h1>Insertar episodio en {{ $programa->nombre }}</h1>
        <form action="{{ route('anyadirEp') }}" method="POST">
            @csrf
            <label class="nombreInput" for="nombre">Nombre</label><br>
            <input type="text" name="nombre">
            <br>
            <label for="descripcion">Descripción</label><br>
            <textarea cols="30" rows="10" type="text" name="descripcion"
                placeholder="Describe un poco el contenido del episodio"></textarea>
            <br>
            <label for="url">Url al episodio</label><br>
            <input type="text" name="url">
            <br>
            <button type="submit" class="btn enviar">Enviar</button>
        </form>
    </div>
@endsection
