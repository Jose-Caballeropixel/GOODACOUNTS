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
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre bodega</th>
                <th>Nombre proveedor</th>
                <th>producto</th>
                <th>cantidad</th>
                <th>valor_compra</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bodega->entradas as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->bodega_id}}</td>
                    <td>{{$item->proveedor_id}}</td>
                    <td>{{$item->producto_id}}</td>
                    <td>{{$item->cantidad}}</td>
                    <td>{{$item->valor_compra}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
