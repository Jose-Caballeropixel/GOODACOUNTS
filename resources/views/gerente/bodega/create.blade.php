@extends('dashboard.sidebargerente')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">Crear bodega</h1>
        <form action="{{ route('gerente.bodega.store') }}" method="POST" class="mt-2">
            @csrf
            <div class="form-group">
                <label for="">Encargado</label>
                <input type="text" name="encargado" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Direccion de Bodega</label>
            <input type="text" name="direccion" class="form-control">
            </div>
            <input type="hidden" value="{{ $sucursal->id }}" name="sucursal_id">
            <div class="boton-formulario d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-info">Registrar Bodega</button>
            </div>
        </form>
    </div>
@endsection
