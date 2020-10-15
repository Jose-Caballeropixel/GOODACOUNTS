@extends('dashboard.sidebargerente')

@section('content')
    <div class="container">
        <h1 class="text-center">Gestor Bodegas</h1>
        <div class="btn-crear-bodega d-flex float-right mb-3">
            <a class="btn btn-outline-dark" href="{{ route('gerente.bodega.create') }}">Crear <li class="fas fa-plus"></li>
                </a>
        </div>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Encargado</th>
                    <th>Direccion</th>
                    <th>Sucursal</th>
                    <th>opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bodegas as $bodega)
                    <tr>
                        <td>{{ $bodega->id }}</td>
                        <td>{{ $bodega->Encargado }}</td>
                        <td>{{ $bodega->direccionB }}</td>
                        <td>{{ $bodega->sucursal->id}}</td>
                        <td>
                            <a href="">Modificar</a>
                            <a href="{{ route('gerente.bodega.show', ['bodega' => $bodega->id]) }}">Ver</a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection
