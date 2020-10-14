@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="form-gruup">
                    <label for="">Nombre</label>
                    <input disabled type="text" name="nombre" class="form-control" value="{{old('nombre') ? old('nombre')  : $producto->nombre }}">
                </div>
                <div class="form-gruup">
                    <label for="">Codigo</label>
                    <input disabled type="text" name="codigo" class="form-control" value="{{old('codigo') ? old('codigo')  : $producto->codigo }}">
                    <x-error valor="codigo"></x-error>
                </div>
                <div class="form-gruup">
                    <label for="">Precio de venta</label>
                    <input disabled step="any" type="number" name="precio" class="form-control" value="{{old('precio') ? old('precio')  : $producto->precio }}">
                </div>


        </div>
    </div>
</div>


@endsection
