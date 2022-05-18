@extends('index')
@section('crear')
    <div class="edit-page">
        <h2 class="title">Añadir un programa</h2>
        @if (session('mensaje'))
            <div class="mensaje-chollo">
                {{ session('mensaje') }}
            </div>
        @endif
        <form action="{{ route('crearChollo') }}" method="POST">
            @csrf
            <label for="fnom">Nombre del programa

                <input type="text" name="ftit" placeholder="" class="form-input-text" autofocus>
            </label>
            <label for="fdesc">Descripción del programa

                <textarea name="fdesc" cols="30" rows="10" placeholder="Describe tu chollo" class="form-input-textarea"></textarea>
            </label>

            <label for="furl">Enlace al programa
                <input type="url" name="furl" placeholder="www.ejemplo.com">
            </label>

            @foreach ($cat as $c)
                <input name="categorias[]" type="checkbox" value="{{ $c->id }}">

                <label for="fcat">{{ $c->nombre }}</label>
            @endforeach
            <label for="fimage">Imagen de portada
                <input type="image" name="fimage" id="fimage">
                
            </label>
            <input class="btn editar" type="submit" value="Enviar!">
        </form>

    </div>
@endsection
