@extends('index')

@section('perfil')
    <div class="main-perfil">
        <h1 class="h1 title">{{ $user->name }}</h1>




        @if (Auth::id() == $user->id)
            <a href="{{ route('crearProg') }}">Añadir un programa</a>


            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Cerrar sesión
            </a>
            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
            </form>
        @endif
        @foreach ($programas as $p)
            <a href="{{ route('programa', $p->id) }}"> {{ $p->nombre }}</a>
        @endforeach
    </div>
@endsection
