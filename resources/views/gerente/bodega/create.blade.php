<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>crear bodega</h2>
    <form action="{{route('gerente.bodega.store')}}" method="POST">
        @csrf
        <label for="">Encargado</label>
        <input type="text" name="encargado">
        <label for="">Direccion de Bodega</label>
        <input type="text" name="direccion">
        <input type="hidden" value="{{$sucursal->id}}" name="sucursal_id">
        <button type="submit">Registrar Bodega</button>
    </form>
</body>
</html>
