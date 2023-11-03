@extends('page')
@section('title', 'Iniciar Sesión')
@section('content')
  
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                
                <form class="login100-form validate-form" method="POST" action="https://typical-pipe-production.up.railway.app/login">
                                @csrf
                                <div class="text-center pl-5 mb-5">
                                    <a href="#!">
                                      <img src="images/icons/psicoalianza.svg" alt="" width="300" height="93">
                                    </a>
                                  </div>
                                <span class="login100-form-title p-b-43">
                                    Inicia sesión para continuar
                                </span>
                                <div class="wrap-input100 validate-input" data-validate = "Usuario requerido">
                                    <input id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Usuario</span>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Contraseña requerida">
                                    <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <span class="focus-input100"></span>
                                    <span class="label-input100">Contraseña</span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="flex-sb-m w-full p-t-3 p-b-32">
                                    <div class="contact100-form-checkbox">
                                        <input class="form-check-input input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="label-checkbox100" for="remember">
                                            {{ __('Recuérdame') }}
                                        </label>
                                    </div>
                                    <div>
                                        <a href="#" class="txt1">
                                            ¿Olvidaste tu contraseña?
                                        </a>
                                    </div>
                                </div>
                                <div class="container-login100-form-btn">
                                    <button type="submit" class="login100-form-btn btn btn-primary">
                                        {{ __('Iniciar Sesión') }}
                                    </button>
                                </div>
                                <div class="container-login100-form-btn">
                                    @if (Route::has('register'))
                                    <a class="nav-link" href="https://typical-pipe-production.up.railway.app/register"><input class="btn-primary" type="button">
                                        {{ __('Registro') }}
                                    </a>
                                    @endif
                                </div>
                </form>
                <div class="login100-more" style="background-image: url('images/login/login-image.jpg');">
                </div>
            </div>
        </div>
    </div>
    @endsection
        