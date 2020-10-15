@extends('dashboard.sidebargerente')

@section('content')
    <div class="container">
        <a class="btn btn-outline-dark" href="{{ route('gerente.sucursal.index') }}">
            <li class="fas fa-arrow-circle-left"></li> Regresar
        </a>
        <h1 class="text-center">Formulario</h1>
        <form action="{{ route('gerente.sucursal.store') }}" method="POST">
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
            <div class="btn-form form-group d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-primary">Agregar sucursal</button>
            </div>
        </form>
    </div>
@endsection
