<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>formulario</h1>
    <form action="{{route('gerente.sucursal.store')}}" method="POST">
        @csrf
        <label for="">Nombre sucursal: </label>
        <input type="text" name="nombre">
        <label for="">Direccion: </label>
        <input type="text" name="direccion">
        <label for="">Correo: </label>
        <input type="text" name="correo">
        <button type="submit">Agregar sucursal</button>
    </form>
</body>
</html>
