@extends('dashboard.sidebaradmin')

@section('content')

    <div class="container">
        <a class="btn btn-outline-dark" href="{{ route('administrador.usuarios.create') }}">Crear Usuario</a>
        <table class="table table-reponsive mt-4">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>

            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->empresa_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
