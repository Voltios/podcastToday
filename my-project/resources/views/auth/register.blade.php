@extends('forms')

@section('register')
    <div class="form-container registro">

        <h1 class="card-header">Registro</h1>


        <form method="POST" action="{{ route('register') }}">
            @csrf


            <label for="name" class="">Nombre completo</label>

            <div class="">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



            <label for="email" class="col-md-4 col-form-label text-md-end">Dirección de correo</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>
            <div class="">

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">
                    <span id="ojo" ><button class="ojo"><i class="fa fa-eye" aria-hidden="true"></i></button></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Repite la contraseña</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>
            </div>

            <!-- MEU -->
            <div class="row mb-3">

                <label for="username" class="col-md-4 col-form-label text-md-end">Nombre de usuario</label>

                <div class="col-md-6">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                        name="username" required autocomplete="username">

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="descripcion" class="col-md-4 col-form-label text-md-end">Cuéntanos un poco de ti</label>

                <div class="col-md-6">
                    <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror"
                        name="descripcion" required autocomplete="descripcion">

                    @error('descripcion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="submit-box">
                <button type="submit" class="btn btn-primary login">
                    Registrarse
                </button>
            </div>
            <p class="reg"></p>
        </form>




    </div>
@endsection
