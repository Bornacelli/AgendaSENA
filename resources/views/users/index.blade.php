@extends('layouts.layout')

@section('content')

    
    
    <br>
    <button class="b-crear">
        <a href="{{ route('users.create') }}" style="text-decoration: none; color:#fff;" >
            <i class="bi bi-plus-circle"> </i>
        Crear Nuevo Usuario
        </a>
    </button>
    <br><br>
    <table class="table table-bordered tabled-hover table-striped nowrap shadow-sm table-datatable table-responsive"
    style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Usuario</th>
                <th>Correo Electrónico</th>
                <th>Número de Teléfono</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td class="text-center">
                        <a href="{{ route('users.show', $user->id) }}"><i class="fs-5 bi bi-eye-fill me-2 icon-color" ></i></a>
                        <a href="{{ route('users.edit', $user->id) }}"><i class="fs-5 bi bi-pencil-square me-2 icon-color" ></i></a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none"><i class="fs-5 bi bi-trash-fill me-2 icon-color" ></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
