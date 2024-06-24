@extends('layouts.layout')

@section('content')

    
    <button class="b-crear">
        <a href="{{ route('users.create') }}" style="text-decoration: none; color:#fff;" >
            <i class="bi bi-plus-circle"> </i>
        Crear
        </a>
    </button>
    <table class="table table-bordered tabled-hover table-striped nowrap shadow-sm table-datatable table-responsive"
    style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Usuario</th>
                <th>Correo Electrónico</th>
                <th>Número de Teléfono</th>
                <th>Mostrar</th>
                <th>Editar</th>
                <th>Eliminar</th>
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
                        <a href="{{ route('users.show', $user->id) }}"><i class="fs-4 text-secondary bi bi-eye-fill text-success"></i></a>
                    </td>

                    <td class="text-center">
                        <a href="{{ route('users.edit', $user->id) }}"><i class="fs-4 text-secondary bi bi-pencil-square text-secondy"></i></a>
                    </td>

                    <td class="text-center">
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none"><i class="fs-4 text-secondary bi bi-trash-fill text-danger"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
