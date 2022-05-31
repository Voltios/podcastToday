@extends('index')
@section('temas')
    <h1>Descubrir temas</h1>

    <div class="topics">

        @foreach ($categorias as $cat)
            <div class="topic">{{ $cat->nombre }}
                <a href="{{ route('progTema', $cat->nombre) }}"></a>
            </div>
        @endforeach
    </div>
@endsection
