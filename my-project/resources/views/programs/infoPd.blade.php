@extends('index')
@section('programa')
    <h1 class="title">{{ $programa->nombre }}</h1>
    <img width="200" height="200" src={{ asset('storage/cover_' . $programa->id . '.jpg') }}
        alt="{{ __('cover ' . $programa->nombre) }}">
    <div class="main">
        @foreach ($episodios as $ep)
            <p>{{ $ep->nombre }} + {{ $ep->id }}</p>
        @endforeach

    </div>
    {{-- @if (Auth::user() && $programa->user_id == Auth::user()->id) --}}
    <form action="{{ route('editarPrograma', $programa->id) }}">
        @csrf
        <button type="submit" class="btn"> Editar</button>
    </form>

    b
@endsection
