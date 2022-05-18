@extends('forms')
@section('register')
    @if (session('mensaje'))
        {{ session('mensaje') }}
    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="fname">nombre
            <input type="text" name="fname" id="fname">
        </label>
        <label for="fpaswd">paswd
            <input type="password" name="fpaswd" id="fpaswd">
        </label>
        <label for="fuser">user
            <input type="text" name="fuser" id="fuser">
        </label>
        <label for="furl">url
            <input type="url" name="furl" id="furl">
        </label>
        <label for="femail">email
            <input type="email" name="femail" id="femail">
        </label>
        <input type="submit" value="Enviar">
    </form>
@endsection
