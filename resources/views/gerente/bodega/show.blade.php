<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bodega</title>
</head>
<body>
    <a href="javascript: history.go(-1)">Volver</a>
    <a href="{{route('gerente.bodega.buscador',['bodega'=>$bodega->id])}}">Agregar Productos</a>
</body>
</html>
