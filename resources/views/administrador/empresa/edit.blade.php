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
    <form action="{{route('administrador.empresa.update',['empresa'=>$empresa->id])}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">NIT</label>
        <input type="text" name="nit" value="{{$empresa->NIT}}">
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{$empresa->Nombre}}">
        <label for="">Correo</label>
        <input type="email" name="correo" value="{{$empresa->Correo}}">
        <button >Guardar</button>
    </form>
</body>
</html>
