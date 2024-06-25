@extends('layouts.layout')

@section('content')
<h2 class="p-user">Perfil de Usuario</h2>

<div>
<img src="{{ asset('assets/img/icon-usuario.jpg') }}" class="logousuario" alt="logosena">
</div>
    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label l-user">Nombre Completo:</label>
        <div class="col-sm-5">
        <input type="" class="form-control" id="" value="{{ $user->full_name }}" readonly>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label l-user">Usuario:</label>
        <div class="col-sm-5">
        <input type="" class="form-control" id="" value="{{ $user->username }}" readonly>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label l-user">Correo Electrónico:</label>
        <div class="col-sm-5">
        <input type="" class="form-control" id="" value="{{ $user->email }}" readonly>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label l-user">Número de Teléfono:</label>
        <div class="col-sm-5">
        <input type="" class="form-control" id="" value="{{ $user->phone_number }}" readonly>
        </div>
    </div>

    <a href="{{ route('users.index') }}" class="l-back">Regresar</a>
@endsection
