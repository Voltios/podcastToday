@extends('index')
@section('listaPrgs')
    <h1 class="title">Lista de programas</h1>
    <div class="lista_container">

        @foreach ($progs as $prog)
            <div class="lista_programa">
                <a href="{{ route('programa', $prog->id) }}">
                    <img src="{{ asset('storage/cover_' . $prog->id . '.jpg') }}" height="150" width="150"
                        alt="cover {{ $prog->nombre }}">
                </a>
            </div>
        @endforeach
    </div>
    {{-- <div class="aaaa">
        {{ $progs->links() }}
    </div> --}}
@endsection
