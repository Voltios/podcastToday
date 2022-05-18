@extends("forms")
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

    <label for="fnombre">Nombre del programa

        <input type="text" name="fnombre" class="" value="{{ $programa->nombre }}"
            placeholder="Nombre del programa..." autofocus>
    </label>
    <label for="fdesc">Descripción del programa
        <textarea name="fdesc" cols="30" rows="10">{{ $programa->descripcion }}</textarea>
    </label>
@endsection
