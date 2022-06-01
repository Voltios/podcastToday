@extends('index')
@section('progTema')
    ola

    @foreach ($categorias as $cat)
        @foreach ($cat->programas as $p)
            {{ $p->nombre }}
            {{-- <p>{{ $p->categorias->nombre }}</p> --}}
        @endforeach
    @endforeach
@endsection
