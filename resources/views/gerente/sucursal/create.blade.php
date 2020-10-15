@extends('dashboard.sidebargerente')

@section('content')
<h1 class="text-center">Formulario</h1>
<div class="contenido-formulario justify-content-center">
    <a href="javascript: history.go(-1)">Volver</a>
<form action="{{route('gerente.sucursal.store')}}" method="POST">
    @csrf
    <div class="form-group">

        <label for="">Nombre sucursal: </label>
        <input type="text" name="nombre" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Direccion: </label>
        <input type="text" name="direccion" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Correo: </label>
        <input type="text" name="correo" class="form-control">
    </div>
    <div class="btn-form form-group">
        <button type="submit" class="btn-guardar btn">Agregar sucursal</button>
    </div>
</form>
</div>
@endsection
