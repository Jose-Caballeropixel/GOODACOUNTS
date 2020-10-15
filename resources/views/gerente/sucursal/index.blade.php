@extends('dashboard.sidebargerente')

@section('content')
    <a class="btn-crear-sucursal btn" href="{{ route('gerente.sucursal.create') }}">Crear Sucursal</a>
    <br><br>
    <div class="table tabla-container">
        <h1 class="text-center">Sucursal</h1>
        <table class="tabla mt-5 table-responsive">
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
