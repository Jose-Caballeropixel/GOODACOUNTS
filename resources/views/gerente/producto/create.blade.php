@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="{{route('gerente.producto.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-gruup">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
                    <x-error valor="nombre"></x-error>
                </div>
                <div class="form-gruup">
                    <label for="">Codigo</label>
                    <input type="text" name="codigo" class="form-control" value="{{old('codigo')}}">
                    <x-error valor="codigo"></x-error>
                </div>
                <div class="form-gruup">
                    <label for="">Precio de venta</label>
                    <input step="any"  type="number" name="precio" class="form-control" value="{{old('precio')}}" >
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
