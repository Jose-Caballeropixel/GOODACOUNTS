@extends('dashboard.sidebargerente')

@section('content')

    <div class="container">
        <a href="{{ route('administrador.usuarios.create') }}">Crear Usuario</a>
        <h1 class="text-center">Usuarios</h1>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>

            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->empresa_id }}</td>
                        <td>{{ $usuario->role->nombre }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="paginacion">
            {{ $usuarios->links() }}
        </div>
    </div>

@endsection
