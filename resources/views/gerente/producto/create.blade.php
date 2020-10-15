@extends('dashboard.sidebargerente')

@section('content')
<div class="container">
    <div class="btn-atras">
        <a class="btn btn-outline-dark" href="{{ route('gerente.index') }}"><li class="fas fa-arrow-circle-left"></li> Regresar</a>
    </div>
    <h1 class="text-center">Crear Producto</h1>
    <form class="mt-4" action="{{route('gerente.producto.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
            <x-error valor="nombre"></x-error>
        </div>
        <div class="form-group">
            <label for="">Codigo</label>
            <input type="text" name="codigo" class="form-control" value="{{old('codigo')}}">
            <x-error valor="codigo"></x-error>
        </div>
        <div class="form-group">
            <label for="">Precio de venta</label>
            <input step="any"  type="number" name="precio" class="form-control" value="{{old('precio')}}" >
            <x-error valor="precio"></x-error>
        </div>
        <div class="form-group mt-2">
            <label for="">Imagen <small>(*Opcional)</small></label>
            <input type="file" class="form-control-file">
            <x-error valor="imagen"></x-error>
        </div>
        <div class="btn-formulario d-flex justify-content-center">
            <input type="submit" value="Guardar producto"  class="btn btn-outline-info mt-4">
        </div>
    </form>
</div>


@endsection
