<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('vendedor.cliente.index')}}">Inicio vendedor</a>
    <form action="{{route('vendedor.cliente.update',['cliente'=>$cliente->id])}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{old('nombre') ? old('nombre')  :$cliente->nombre}}">
        <label for="">Apellido</label>
        <input type="text" name="apellido" value="{{old('apellido') ? old('apellido')  :$cliente->apellidos}}">
        <label for="">N° identificacion</label>
        <input type="text" name="identificacion" value="{{old('identicacion') ? old('identicacion')  :$cliente->identificacion}}">
        <label for="">Correo Electronico</label>
        <input type="text" name="correo" value="{{old('correo') ? old('correo')  :$cliente->correo}}">
        <label for="">Telefono</label>
        <input type="text" name="telefono" value="{{old('telefono') ? old('telefono')  :$cliente->telefono}}">
        <button type="submit">Modificar Datos</button>
    </form>
</body>
</html>
