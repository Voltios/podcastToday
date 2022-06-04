@extends('forms')
@section('crearEp')
    <div class="form-container crearProg">
        <h1>Editar episodio {{ $ep->nombre }}</h1>
        <form action="{{ route('editarEp', $ep->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="nombre">Nombre</label><br>
            <input type="text" class="nombreInput" name="nombre" value="{{ $ep->nombre }}"><br>
            <label for="descripcion">Descripción</label><br>
            <textarea name="descripcion" id="" cols="30" rows="10">{{ $ep->descripcion }}</textarea>
            <br>
            <button type="submit" class="btn enviar">Enviar</button>
        </form>
    </div>
@endsection
