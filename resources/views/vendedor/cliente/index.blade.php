@extends('dashboard.sidebarvendedor')

@section('content')
    <div class="container">
        <h1 class="text-center">Clientes</h1>
        <div class="btn-crear-cliente d-flex float-right pb-2">
            <a class="btn btn-outline-dark" href="{{ route('vendedor.cliente.create') }}">Añadir Cliente <li class="fas fa-plus"></li></a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>N° Identificacion</th>
                    <th>Correo electronico</th>
                    <th>Telefono</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellido }}</td>
                        <td>{{ $cliente->identificacion }}</td>
                        <td>{{ $cliente->correo }}</td>
                        <td>{{ $cliente->telefono }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
