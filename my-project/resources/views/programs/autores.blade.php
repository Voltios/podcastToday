@extends('index')
@section('autores')
    <h1>Descubrir autores</h1>
    <p>Pulsa en el nombre para acceder al perfil</p>
    <div class="authors">
        @foreach ($autores as $autor)
            <div class="author">
                
                <a class="author_name" href="{{ route('profile', $autor->id) }}"><span>{{ $autor->name }}</span></a>
                <span class="author_desc">{{ $autor->descripcion }}</span>
            </div>
        @endforeach

    </div>
@endsection
