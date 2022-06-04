@extends('forms')
@section('editarPrograma')
    <div class="form-container crearProg">
        <h2 class="title">Editar programa</h2>
        @if (session('mensaje'))
            <div class="mensaje">
                <p>{{ session('mensaje') }}</p>
            </div>
        @endif
        <form action="{{ route('actualizarPrograma', $programa->id) }}" method="POST"></form>
        @method('PUT')
        @csrf

        @error('nombre')
            <div class="error">
                El nombre es obligatorio
            </div>
        @enderror

        @error('descripcion')
            La descripción es obligatoria
        @enderror
        <form action="{{ route('actualizarPrograma', $programa->id) }}" method="POST">
            @method('PUT')
            @csrf
            <label for="nombre">Nombre del programa</label>
            <input type="text" name="nombre" class="" value="{{ $programa->nombre }}"
                placeholder="Nombre del programa..." autofocus>
            <br>
            <label for="descripcion">Descripción del programa</label><br>
            <textarea name="descripcion" cols="30" rows="10">{{ $programa->descripcion }}</textarea>

            <br>
            <label for="enviar">
                <button class="btn enviar" type="submit"> <i class="fas fa-check"></i> Enviar</button>
            </label>
        </form>
    </div>
@endsection
