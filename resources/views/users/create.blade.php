@extends('layouts.layout')

@section('content')
<h1>Crear Usuarios</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="row g-2 c-input">
            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="Brian Gutierrez" value="" name="full_name">
                <label for="floatingInputGrid">Nombre Completo</label>
              </div>
            </div>
          </div>

        <div class="row g-2 c-input">
            <div class="col-md">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="BrianG" value="" name="username">
                <label for="floatingInputGrid">Usuario</label>
              </div>
            </div>

            <div class="col-md">
                <div class="form-floating">
                  <input type="email" class="form-control" id="floatingInputGrid" placeholder="brianG@gmail.com" value="" name="email">
                  <label for="floatingInputGrid">Correo Electrónico</label>
                </div>
              </div>
          </div>

          <div class="row g-2 c-input">
            <div class="col-md">
              <div class="form-floating">
                <input type="number" class="form-control" id="floatingInputGrid" placeholder="3005467655" value="" name="phone_number">
                <label for="floatingInputGrid">Número de Teléfono</label>
              </div>
            </div>

            <div class="col-md">
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingInputGrid" placeholder="contraseña" value="" name="password">
                  <label for="floatingInputGrid">Contraseña</label>
                </div>
              </div>
          </div>

        <button type="submit">Crear Nuevo Usuario</button>
    </form>

@endsection
