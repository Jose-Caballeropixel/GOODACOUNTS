@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{route('gerente.producto.update', ['producto'=> $producto->id])}}" method="POST">
                @csrf
                @method('put')
                <div class="form-gruup">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{old('nombre') ? old('nombre')  : $producto->nombre }}">
                    <x-error valor="nombre"></x-error>
                </div>
                <div class="form-gruup">
                    <label for="">Codigo</label>
                    <input type="text" name="codigo" class="form-control" value="{{old('codigo') ? old('codigo')  : $producto->codigo }}">
                    <x-error valor="codigo"></x-error>
                </div>
                <div class="form-gruup">
                    <label for="">Precio de venta</label>
                    <input step="any" type="number" name="precio" class="form-control" value="{{old('precio') ? old('precio')  : $producto->precio }}">
                    <x-error valor="precio"></x-error>
                </div>
                <div class="form-gruup">
                    <label for="">Imagen <small>(*Opcional)</small></label>
                    <input type="file" class="form-control-file">
                    <x-error valor="imagen"></x-error>
                </div>
                <input type="submit" value="Guardar producto"  class="btn btn-primary mt-2">
            </form>
        </div>
    </div>
</div>


@endsection
