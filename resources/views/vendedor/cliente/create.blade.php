<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('vendedor.cliente.store')}}" method="POST">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{old('nombre')}}">
        <label for="">Apellido</label>
        <input type="text" name="apellido" value="{{old('apellido')}}">
        <label for="">N° identificacion</label>
        <input type="text" name="identificacion" value="{{old('identificacion')}}">
        <label for="">Correo Electronico</label>
        <input type="text" name="correo" value="{{old('correo')}}">
        <label for="">Telefono</label>
        <input type="text" name="telefono" value="{{old('telefono')}}">
        <button type="submit">Guardar Cliente</button>
    </form>
</body>
</html>
