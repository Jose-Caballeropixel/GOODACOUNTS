<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Index bodega</h2>
    <table>
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
                    <td>{{$bodega->id}}</td>
                    <td>{{$bodega->Encargado}}</td>
                    <td>{{$bodega->direccionB}}</td>
                    <td>{{$bodega->sucursal_id}}</td>
                    <td>
                        <a href="">Modificar</a>
                    </td>
                </tr>

            @endforeach
        </tbody>
</body>
</html>