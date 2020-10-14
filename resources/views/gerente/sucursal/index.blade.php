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
    <a href="{{route('gerente.bodega.index')}}">Lista de socursales</a>
    <br><br>
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
                <tr>
                    <td>{{$sucursal->id}}</td>
                    <td>{{$sucursal->Nombre}}</td>
                    <td>{{$sucursal->Direccion}}</td>
                    <td>{{$sucursal->CorreoS}}</td>
                    <td>
                        <a href="{{route('gerente.sucursal.edit',['sucursal'=>$sucursal->id])}}">Modificar</a>
                    </td>
                </tr>

            @endforeach
        </tbody>

    </table>
</body>
</html>
