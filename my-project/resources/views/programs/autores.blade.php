@extends('index')
@section('autores')
    <h1>Descubrir autores</h1>

    <div class="authors">
        @foreach ($autores as $autor)
            <div class="author">
                {{ var_dump($autor) }}
                <a href="{{ route('profile', $autor->id) }}">{{ $autor->name }}</a>

            </div>

            <div class="author">Autorr</div>
        @endforeach

    </div>
@endsection
