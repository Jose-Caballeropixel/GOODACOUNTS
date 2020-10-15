@extends('dashboard.sidebaradmin')

@section('content')
    <a href="{{ route('administrador.index') }}" class="btn btn-volver">Regresar</a>
    <h1 class="text-center">Formulario de empresa</h1>
    <div class="contenido-formulario justify-content-center">
        <form action="{{ route('administrador.empresa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">NIT:</label>
                <input type="text" class="form-control" name="nit">
            </div>
            <div class="form-group">
                <label for="">Nombre:</label>
            <input type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group">
                <label for="">Correo:</label>
            <input type="email" class="form-control" name="correo">
            </div>
            <div class="btn-form form-group">
                <button class="btn btn-guardar">Guardar Empresa</button>
            </div>
        </form>
    </div>
@endsection
