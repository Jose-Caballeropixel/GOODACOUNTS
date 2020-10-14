<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <a href="{{route('empresa.create')}}">Formulario</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre de la Empresa</th>
                <th>Correo electronico</th>
                <th>opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empresas as $empresa)
                <tr>
                    <td>{{$empresa->id}}</td>
                    <td>{{$empresa->Nombre}}</td>
                    <td>{{$empresa->Correo}}</td>
                    <td>
                        <a href="{{route('empresa.edit',['empresa'=>$empresa->id])}}">Modificar</a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>
