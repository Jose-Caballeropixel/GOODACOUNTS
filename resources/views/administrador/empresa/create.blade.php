<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('administrador.empresa.index')}}">volver</a>
    <h1>Formulario de empresa</h1>
    <form action="{{route('administrador.empresa.store')}}" method="POST">
        @csrf
        <label for="">NIT</label>
        <input type="text" name="nit">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <label for="">Correo</label>
        <input type="email" name="correo">
        <button >Guardar</button>
    </form>
</body>
</html>
