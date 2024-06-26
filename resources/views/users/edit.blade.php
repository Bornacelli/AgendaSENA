@extends('layouts.layout')

@section('content')
<h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-2 c-input">
            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="Brian Gutierrez" value="{{ $user->full_name }}" name="full_name">
                <label for="floatingInputGrid">Nombre Completo</label>
              </div>
            </div>
          </div>

        <div class="row g-2 c-input">
            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="BrianG" value="{{ $user->username }}" name="username">
                <label for="floatingInputGrid">Usuario</label>
              </div>
            </div>

            <div class="col-md">
                <div class="form-floating">
                  <input type="email" class="form-control" id="floatingInputGrid" placeholder="brianG@gmail.com" value="{{ $user->email }}" name="email">
                  <label for="floatingInputGrid">Correo Electrónico</label>
                </div>
              </div>
          </div>

          <div class="row g-2 c-input">
            <div class="col-md">
              <div class="form-floating">
                <input type="number" class="form-control" id="floatingInputGrid" placeholder="3005467655" value="{{ $user->phone_number }}" name="phone_number">
                <label for="floatingInputGrid">Número de Teléfono</label>
              </div>
            </div>

            <div class="col-md">
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingInputGrid" placeholder="contraseña" value="{{ $user->password }}" name="password">
                  <label for="floatingInputGrid">Contraseña</label>
                </div>
              </div>
          </div>
        <button class="btn-atras"><a href="{{ route('users.index') }}" class="">Regresar</a></button>
        <button type="submit" class="btn-create">Editar</button>
    </form>
@endsection
