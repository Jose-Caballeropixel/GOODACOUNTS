<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>update</h1>
    <form action="{{route('gerente.sucursal.update',['sucursal'=>$sucursal->id])}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Nombre sucursal: </label>
        <input type="text" name="nombre" value="{{$sucursal->Nombre}}">
        <label for="">Direccion: </label>
        <input type="text" name="direccion" value="{{$sucursal->Direccion}}">
        <label for="">Correo: </label>
        <input type="text" name="correo" value="{{$sucursal->CorreoS}}">
        <button type="submit">Modificar sucursal</button>
    </form>
</body>
</html>
