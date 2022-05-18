@extends('index')

@section('perfil')
    <div class="main-perfil">
        <h1 class="h1 title">{{ Auth::user()->name }}</h1>

        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>


        <form action="{{ route('logout') }}" method="POST" id="logout-form">
            @csrf
        </form>
    </div>
@endsection
