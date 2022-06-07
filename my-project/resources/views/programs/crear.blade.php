@extends('forms')
@section('crear')
    <div class="form-container crearProg">
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
            <br>
            <label for="fdesc">Descripción del programa

                <textarea id='textarea' name="fdesc" cols="35" rows="10" placeholder="Cuéntale al mundo de qué va tu programa"
                    class="form-input-textarea"></textarea>
                <br>
                <span id="maxChar">500</span>
                <br>
            </label>

            <label for="furl">Enlace al programa
                <input type="url" name="furl" placeholder="https://www.ejemplo.com">
            </label>
            
            <div class="cat_container">
                <label for="">Categorias</label>
                <br>
                <div class="categoriasCheck">
                    @foreach ($cat as $c)
                        <div class="categoria">

                            <input name="categorias[]" class="checkbox" type="checkbox" value="{{ $c->id }}">
                            <label for="fcat" class="">{{ $c->nombre }} </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="info">
                <p class="">¿No hay un tema que se adapte al contenido de tu programa?</p>
                <a href="mailto:ales.volivares@gmail.com?subject=Falta%20categoría">Escríbenos!</a>
            </div>
            {{-- <label for="fimage">Imagen de portada
                <input type="image" name="fimage" id="fimage">

            </label> --}}
            <div class="cc">
                <input class="btn enviar" type="submit" value="Enviar!">
            </div>
        </form>
        <a class="pa login" href="{{ route('home') }}">Volver al inicio</a>
    </div>
@endsection
