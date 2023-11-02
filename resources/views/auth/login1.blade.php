@extends('page')

@section('title', 'Iniciar Sesión')

@section('content')

    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('login.post') }}" >
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
						<input class="input100" type="text" name="email" id="email" type="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Usuario</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Contraseña requerida">
						<input class="input100"  id="password" type="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Contraseña</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Recordar cuenta
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								¿Olvidaste tu contraseña?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Iniciar Sesión
						</button>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/login/login-image.jpg');">
				</div>
			</div>
		</div>
	</div>
	
    
@endsection