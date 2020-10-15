@extends('dashboard.sidebargerente')

@section('content')
    <div class="container">
        <a class="btn btn-outline-dark" href="{{ route('gerente.sucursal.index') }}">
            <li class="fas fa-arrow-circle-left"></li> Regresar
        </a>
        <h1 class="text-center mt-3">Editar sucursal</h1>
        <form action="{{ route('gerente.sucursal.update', ['sucursal' => $sucursal->id]) }}" method="POST" class="mt-4">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="">Nombre sucursal: </label>
                <input type="text" name="nombre" class="form-control" value="{{ $sucursal->Nombre }}">
            </div>
            <div class="form-group">
                <label for="">Direccion: </label>
                <input type="text" name="direccion"  class="form-control" value="{{ $sucursal->Direccion }}">
            </div>
            <div class="form-group">
                <label for="">Correo: </label>
                <input type="text" name="correo" class="form-control" value="{{ $sucursal->CorreoS }}">
            </div>
            <div class="btn-formulario d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-primary">Modificar sucursal</button>
            </div>
        </form>
    </div>
@endsection
