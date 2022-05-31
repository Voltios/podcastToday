@extends('forms')
@section('editarPrograma')
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
        <label for="nombre">Nombre del programa

            <input type="text" name="nombre" class="" value="{{ $programa->nombre }}"
                placeholder="Nombre del programa..." autofocus>
        </label>
        <label for="descripcion">Descripción del programa
            <textarea name="descripcion" cols="30" rows="10">{{ $programa->descripcion }}</textarea>
        </label>
        <label for="enviar">

            <button class="btn editar " type="submit"> <i class="fas fa-check"></i> Enviar</button>
        </label>
    </form>
@endsection
