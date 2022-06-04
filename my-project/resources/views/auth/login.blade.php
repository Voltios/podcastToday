@extends('forms')

@section('login')
    <div class="form-container">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <span>Correo electrónico</span>
            <label for="email" class="col-md-4 col-form-label text-md-end"></label>


            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <span>Contraseña</span>
            <label for="password" class="col-md-4 col-form-label text-md-end"></label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                required autocomplete="current-password">
            <span id="ojo" ><button class="ojo"><i class="fa fa-eye" aria-hidden="true"></i></button></span>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="remember-box">
                <span>Recuérdame</span>
                <label class="form-check-label" for="remember"></label>
                <span><input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}></span>
            </div>
            <div class="submit-box">
                <button class="login" type="submit" class="btn primary">
                    {{ __('Login') }}
                </button>
            </div>

            <p class="reg">¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
        </form>
    </div>
@endsection
