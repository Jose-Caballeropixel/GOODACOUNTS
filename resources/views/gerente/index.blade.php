@extends('dashboard.sidebargerente')

@section('content')
<div class="container justify-content-center text-center">
    <div class="titulo">
        <h3>Bienvenido Gerente</h3>
    </div>
    <div class="opciones-admin">
        <div class="container">
            <form action="{{route('gerente.index')}}" class="form-inline justify-content-center" method="GET">
                <input type="text" name="nombre" placeholder="Sucursal" class="form-control">
                <input type="submit" value="Buscar" class="btn btn-success">
            </form>
            <br>
            <table class="table table-hover">
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
    </div>
@endsection
