@extends('index')
@section('temas')
    <h1>Descubrir temas</h1>

    <div class="topics">
        @foreach ($categorias as $cat)
            <a class="topicRef" href="{{ route('progTema', $cat->nombre) }}">
                <div class="topic {{ $cat->nombre }}">
                    <span>{{ $cat->nombre }}</span>
                </div>
            </a>
        @endforeach
    </div>

    <div class="temas_programas">
        <h2>También te puede gustar...</h2>
        <div class="temas_programas_container">

            @foreach ($todosProgramas as $prog)
                <a href="{{ route('programa', $prog->id) }}">
                    <div class="tema_prog">
                        <h3>{{ $prog->nombre }}</h3>
                        <span>{{ $prog->puntuacion }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
