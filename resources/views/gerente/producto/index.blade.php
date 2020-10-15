@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{route('gerente.producto.create')}}">Crear producto</a>

            <form action="{{route('gerente.producto.index')}}" method="get">
                <input type="text" name="nombreP" placeholder="Producto">
                <input type="submit" value="Buscar">
            </form>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio de venta</th>
                        <th>Codigo</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->codigo}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>
                            <a href="{{route('gerente.producto.edit', ['producto'=> $producto->id ])}}">Editar</a>
                            <a href="{{route('gerente.producto.show', ['producto'=> $producto->id ])}}">Ver</a>

                            </td>
                        </tr>
                    @endforeach
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
