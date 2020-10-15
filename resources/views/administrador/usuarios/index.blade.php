@extends('dashboard.sidebaradmin')

@section('content')

    <div class="container">
        {{-- <a class="btn btn-outline-dark" href="{{ route('administrador.usuarios.create') }}">Crear Empresario</a> --}}
        <h1 class="text-center">Empresarios registrados</h1>
        <table class="table table-reponsive mt-5">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Empresa</th>
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
        <div class="paginacion d-flex justify-content-center">
            {{$usuarios->links()}}
        </div>
    </div>

@endsection
