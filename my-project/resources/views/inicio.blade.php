@extends('index')
@section('inicio')
    <h1>{{ $programa->nombre }}</h1>
    <a href="{{ route('programa', $programa->id) }}">Ir al programa</a>
@endsection
