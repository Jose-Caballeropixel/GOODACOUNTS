@extends('dashboard.sidebargerente')

@section('content')
    <div class="container">
        <h1 class="text-center">Productos</h1>
        <div class="btn-encabezado-productos d-flex justify-content-between">
            <form class="form-inline" action="{{ route('gerente.producto.index') }}" method="get">
                <input class="form-control" type="text" name="nombreP" placeholder="Buscar">
                <input class="btn btn-outline-success ml-2" type="submit" value="Buscar">
            </form>
            <a class="btn btn-outline-dark" href="{{ route('gerente.producto.create') }}">Crear producto <li
                    class="fas fa-plus"></li></a>
        </div>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio de venta</th>
                    <th>Codigo</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->codigo }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>
                        <a class="btn btn-outline-success" href="{{ route('gerente.producto.edit', ['producto' => $producto->id]) }}"><li class="fas fa-edit"></li></a>
                        <a class="btn btn-outline-primary" href="{{ route('gerente.producto.show', ['producto' => $producto->id]) }}"><li class="fas fa-eye"></li></a>

                    </td>
                </tr>
                @endforeach
                </tr>
            </tbody>

        </table>
    </div>
@endsection
