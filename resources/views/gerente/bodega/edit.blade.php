<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Bodega</h1>
    <a href="javascript: history.go(-1)">Volver</a>
    <form action="{{route('gerente.bodega.update',['bodega'=>$bodega->id])}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Encargado</label>
        <input type="text" name="encargado" value="{{$bodega->Encargado}}">
        <label for="">Direccion de Bodega</label>
        <input type="text" name="direccion" value="{{$bodega->direccionB}}">

        <button type="submit">Registrar Bodega</button>
    </form>
</body>
</html>
