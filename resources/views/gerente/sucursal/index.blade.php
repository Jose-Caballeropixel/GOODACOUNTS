<<<<<<< HEAD
@extends('dashboard.sidebargerente')

@section('content')
    <a class="btn-crear-sucursal btn" href="{{ route('gerente.sucursal.create') }}">Crear Sucursal</a>
    <br><br>
    <div class="table tabla-container">
        <h1 class="text-center">Sucursal</h1>
        <table class="tabla mt-5 table-responsive">
            <thead>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Sucursal</h1>
    <a href="{{route('gerente.sucursal.create')}}">Formulario</a>
    <a href="{{route('gerente.bodega.index')}}">Lista de bodegas</a>
    <br><br>
    <form action="{{route('gerente.sucursal.index')}}" method="GET">
        <input type="text" name="nombre" placeholder="Sucursal">
        <input type="submit" value="Buscar">
    </form>
    <table>
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
>>>>>>> ebfd4cc242d2a2a84b1107b173ab1e919a457a16
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

<<<<<<< HEAD
@endsection
=======
            @endforeach
        </tbody>

    </table>
</body>
</html>
>>>>>>> ebfd4cc242d2a2a84b1107b173ab1e919a457a16
