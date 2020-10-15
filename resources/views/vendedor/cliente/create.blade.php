@extends('dashboard.sidebarvendedor')

@section('content')
    <div class="container">
        <div class="btn-regresar-clientes mb-2">
        <a class="btn btn-outline-dark" href="{{route('vendedor.cliente.index')}}"><li class="fas fa-arrow-circle-left"></li> Regresar</a>
        </div>
        <h1 class="text-center">Crear Cliente</h1>
        <form action="" class="mt-2">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Apellido</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">N° identificacion</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Correo Electronico</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Telefono</label>
                <input type="text" class="form-control">
            </div>
            <div class="btn-formulario d-flex justify-content-center">
                <input type="submit" value="Añadir Cliente"  class="btn btn-outline-info mt-4">
            </div>
        </form>
    </div>
@endsection
