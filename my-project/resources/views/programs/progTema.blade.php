@extends('index')
@section('progTema')
    @foreach ($categorias as $cat)
        <h1 class="title">{{$cat->nombre}}</h1>
        <div class="lista_container">
            @foreach ($cat->programas as $p)
            <div class="lista_programa">
                <a href="{{route('programa', $p->id)}}">
                    <img src="{{asset('storage/cover_'.$p->id.'.jpg')}}" alt="cover {{$p->nombre}}">
                    <p>{{ $p->nombre }}</p>
                </a>
            </div>
            @endforeach
        </div>
    @endforeach
@endsection
