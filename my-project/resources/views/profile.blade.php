@extends('index')

@section('perfil')
    <div class="main-perfil">
        <h1 class="h1 title">{{ $user->name }}</h1>
        @if (Auth::id() == $user->id)
            <a class="addProgram" href="{{ route('crearProg') }}">Añadir un programa</a>
        @endif
        <h2>Programas en los que aparece: </h2>
        @foreach ($programas as $p)
            <div class="programa_creador">
                <div class="nombre_programa_creador">
                    <a href="{{ route('programa', $p->id) }}">
                        <span>{{ $p->nombre }}</span>
                    </a>
                </div>
                <div class="descripcion_programa_creador">
                    <p>{{ $p->descripcion }}</p>
                </div>
            </div>
        @endforeach

        <div class="temas_programas">
            <h2>También te puede gustar...</h2>
            <div class="temas_programas_container">

                @foreach ($todosProgramas as $prog)
                    <a href="{{ route('programa', $prog->id) }}">
                        <div class="tema_prog">
                            <h3>{{ $prog->nombre }}</h3>
                            <span class="puntuacion">{{ $prog->puntuacion }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
