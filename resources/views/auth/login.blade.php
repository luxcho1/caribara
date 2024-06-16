@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio de Sesion') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesión') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-0">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="text-align: center; margin-top: 4%" >
    <div class="row">
      <div class="col">
        <div class="container mt-5">
            <h2>¿Todavia no te registras?</h2>
            <h5>Crea una cuenta para personalizar tu experiencia de compra y poder
                crear el mueble tal como lo soñaste
            </h5>
            @if (Route::has('register'))
            <button type="submit" class="btn btn-primary">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Crear cuenta') }}<a>
            </button>
            @endif
        </div>
      </div>
    </div>
</div>
@endsection

