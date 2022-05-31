@extends('forms')
@section('crear')
    <div class="edit-page">
        <h2 class="title">Añadir un programa</h2>
        @if (session('mensaje'))
            <div class="mensaje-prog">
                {{ session('mensaje') }}
            </div>
        @endif
        <form action="{{ route('crear') }}" method="POST">
            @csrf
            <label for="fnom">Nombre del programa

                <input type="text" name="fnom" placeholder="" class="form-input-text" autofocus>
            </label>
            <label for="fdesc">Descripción del programa

                <textarea name="fdesc" cols="30" rows="10" placeholder="Descripción del programa" class="form-input-textarea"></textarea>
            </label>

            <label for="furl">Enlace al programa
                <input type="url" name="furl" placeholder="https://www.ejemplo.com">
            </label>

            @foreach ($cat as $c)
                <input name="categorias[]" type="checkbox" value="{{ $c->id }}">

                <label for="fcat">{{ $c->nombre }}</label>
            @endforeach
            <p>¿No hay un tema que se adapte al contenido de tu programa?</p>
            <a href="mailto:ales.volivares@gmail.com?subject=Falta%20categoría">Escríbenos!</a>
            <label for="fimage">Imagen de portada
                <input type="image" name="fimage" id="fimage">

            </label>
            <input class="btn editar" type="submit" value="Enviar!">
        </form>
        <a href="{{ route('home') }}">Volver al inicio</a>
    </div>
@endsection
