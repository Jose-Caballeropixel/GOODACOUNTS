@extends('dashboard.sidebargerente')

@section('content')
    <div class="container">
        <h1 class="text-center">Sucursales</h1>
        <div class="btn-encabezado-productos d-flex justify-content-between">
            <form class="form-inline" action="{{ route('gerente.sucursal.index') }}" method="get">
                <input class="form-control" type="text" name="nombre" placeholder="Buscar">
                <input class="btn btn-outline-success ml-2" type="submit" value="Buscar">
            </form>
            <a class="btn btn-outline-dark" href="{{ route('gerente.sucursal.create') }}">Crear sucursal <li
                    class="fas fa-plus"></li></a>
        </div>
        <table class="table mt-3">
            <tbody>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre Sucursal</th>
                        <th>Direccion</th>
                        <th>Correo electronico</th>
                        <th>opciones</th>
                    </tr>
                </thead>
            <tbody>
                @foreach ($sucursales as $sucursal)
                    <tr>
                        <td>{{ $sucursal->id }}</td>
                        <td>{{ $sucursal->Nombre }}</td>
                        <td>{{ $sucursal->Direccion }}</td>
                        <td>{{ $sucursal->CorreoS }}</td>
                        <td>
                            <a class="btn btn-outline-success text-center"
                                href="{{ route('gerente.sucursal.edit', ['sucursal' => $sucursal->id]) }}">
                                <li class="fas fa-edit"></li>
                            </a>
                            <a class="btn btn-outline-info" href="">
                                <li class="fas fa-eye"></li>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="paginacion">
            {{ $sucursales->links() }}
        </div>
    </div>
@endsection
