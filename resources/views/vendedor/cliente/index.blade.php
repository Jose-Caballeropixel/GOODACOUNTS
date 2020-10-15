<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de clientes</h1>

    <br><br>
    <table>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>N° Identificacion</td>
                <td>Correo electronico</td>
                <td>Telefono</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->identificacion}}</td>
                    <td>{{$cliente->correo}}</td>
                    <td>{{$cliente->telefono}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
