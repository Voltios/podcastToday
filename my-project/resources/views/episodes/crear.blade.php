@extends('forms')
@section('crearEp')
    <div class="form-container crearProg">
        @if (session('mensaje'))
            <div class="mensaje-prog">
                {{ session('mensaje') }}
            </div>
        @endif
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
            {{Form::hidden('prog_id', $programa->id)}}
            {{-- <input type="hidden" value="{{$programa->id}}" name="prog_id"> --}}
            <button type="submit" class="btn enviar">Enviar</button>
        </form>
        <a class="pa login" href="{{ route('home') }}">Volver al inicio</a>
    </div>
@endsection
