<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('bodeguero.entrada')}}" method="GET">
        @csrf
        <input type="text" placeholder="NIT Proveedor" name="nit">
        <input type="hidden" value="{{$bodega->id}}" name="bodega">
        <input type="submit" value="Buscar">
    </form>

</body>
</html>
