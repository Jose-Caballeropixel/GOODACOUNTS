@extends('dashboard.sidebargerente')

@section('content')
<div class="container">
    <div class="form-group">
        <label for="">Nombre</label>
        <input disabled type="text" name="nombre" class="form-control" value="{{old('nombre') ? old('nombre')  : $producto->nombre }}">
    </div>
    <div class="form-group">
        <label for="">Codigo</label>
        <input disabled type="text" name="codigo" class="form-control" value="{{old('codigo') ? old('codigo')  : $producto->codigo }}">
        <x-error valor="codigo"></x-error>
    </div>
    <div class="form-group">
        <label for="">Precio de venta</label>
        <input disabled step="any" type="number" name="precio" class="form-control" value="{{old('precio') ? old('precio')  : $producto->precio }}">
    </div>
</div>


@endsection
