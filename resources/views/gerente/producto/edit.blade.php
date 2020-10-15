@extends('dashboard.sidebargerente')

@section('content')
<div class="container">
    <h1 class="text-center"> Editar Producto</h1>
    <form class="mt-4" action="{{route('gerente.producto.update', ['producto'=> $producto->id])}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{old('nombre') ? old('nombre')  : $producto->nombre }}">
            <x-error valor="nombre"></x-error>
        </div>
        <div class="form-group">
            <label for="">Codigo</label>
            <input type="text" name="codigo" class="form-control" value="{{old('codigo') ? old('codigo')  : $producto->codigo }}">
            <x-error valor="codigo"></x-error>
        </div>
        <div class="form-group">
            <label for="">Precio de venta</label>
            <input step="any" type="number" name="precio" class="form-control" value="{{old('precio') ? old('precio')  : $producto->precio }}">
            <x-error valor="precio"></x-error>
        </div>
        <div class="form-group">
            <label for="">Imagen <small>(*Opcional)</small></label>
            <input type="file" class="form-control-file">
            <x-error valor="imagen"></x-error>
        </div>
        <div class="btn-form-edit-producto d-flex justify-content-center">
            <input type="submit" value="Editar producto"  class="btn btn-outline-primary mt-2">
        </div>
    </form>
</div>


@endsection
