@extends('index')
@section('autores')
    <h1>Descubrir autores</h1>

    <div class="authors">

        @foreach ($autores as $autor)
            <div class="author">
                <div class="author-image">{{ $autor }}</div>
                {{$autor->name}}
            </div>

            <div class="author">Autorr</div>
        @endforeach

    </div>
@endsection
