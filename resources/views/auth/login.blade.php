{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <title>SENA</title>

    <meta content="Portal oficial de bienestar al aprendiz Sena del Centro
    Nacional Colombo Alemán, podrá observar las diferentes actividades que
    se han realizado y podrá realizar la encuesta psicosocial." name="description">

    <meta content="Sena, Centro Nacional Colombo Aleman, Bienestar, Aprendiz Sena" name="keywords">

    <!-- Favicons -->
    <link href="{!! asset('assets/img/sena_logo.svg') !!}" rel="icon">

    <!-- Vendor CSS Files -->
    <link href="{!! asset('assets/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') !!}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{!! asset('assets/css/login.css') !!}" rel="stylesheet">

  </head>
  <body>

    <section class="vh-100 gradient-form">
      <div class="container vh-100">
        <div class="row justify-content-center align-items-center vh-100">
          <div class="col-lg-10">
            <div class="card rounded-3 text-black shadow">
              <div class="row g-0">
                <div class="col-md-6 d-flex align-items-center gradient-custom-2">
                  {{-- <div class="text-white px-4 py-4 p-md-4 mx-md-3">
                    <h3 class="mb-2 mb-md-4">Bienvenido a la Plataforma de Bienestar Sena CNCA!</h3>
                    <p class="mb-0 fw-semibold">Querido instructor del área de bienestar del CNCA, te invitamos ha ingresar a la plataforma con tus credenciales(Correo y Contraseña).</p>
                  </div> --}}
                  <img src="{!! asset('assets/img/sena_logo.svg') !!}" alt="">
                </div>
                <div class="col-md-6 bg-light">
                  <div class="card-body p-md-4 mx-md-3 my-4">

                    <div class="text-center">
                      <img src="{!! asset('assets/img/icon.svg') !!}" class="mb-5" width= "185px" height="100px" alt="Logo Sena">
                    </div>

                    <form id="usuario" method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                      @csrf


                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="background-color: #39a900;">
                              <span class="bi bi-person" style="color: white;"></span>
                            </div>
                          </div>
                        <input 
                        onchange="validateJS(event,'email')"
                        type="email" 
                        class="form-control" 
                        placeholder="Ingrese su Correo Eléctronico" 
                        name="email" 
                        value="{{ old('email') }}"
                        required
                        autocomplete="current-password">
          
                      <div class="valid-feedback">Válido.</div>
                      <div class="invalid-feedback">Campo inválido.</div>
          
                    </div>


                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="background-color: #39a900;">
                              <span class="bi bi-lock" style="color: white;"></span>
                            </div>
                          </div>
          
                        <input 
                        onchange="validateJS(event,'email')"
                        type="password" 
                        class="form-control" 
                        placeholder="Ingrese su Contraseña" 
                        name="password" 
                        required
                        autocomplete="current-password">
          
                      <div class="valid-feedback">Válido.</div>
                      <div class="invalid-feedback">Campo inválido.</div>
          
                    </div>


                      <div class="text-center pt-3">
                        <button class="btn btn-login rounded-sm mt-2 shadow px-4 fw-semibold" type="submit">INGRESAR</button>
                      </div>

                      @error('email')
                        <div class="alert alert-danger alert-dismissible fade show mt-4 mb-0 text-center" role="alert">
                          <strong><i class="bi bi-person-x fs-5"></i> Correo o Contraseña incorrectos, por favor verifique sus credenciales!</strong>
                        </div>
                      @enderror

                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Vendor JS Files -->
    <script src="{!! asset('assets/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/js/jquery.js') !!}"></script>
    <script src="{!! asset('assets/js/validarForm.js') !!}"></script>
  </body>
</html>
