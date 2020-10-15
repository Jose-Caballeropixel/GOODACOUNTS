@extends('dashboard.sidebargerente')

@section('content')
    <div class="container justify-content-center text-center">
        <div class="titulo pb-4">
            <h3>Bienvenido Gerente</h3>
        </div>
        <div class="opciones-admin d-flex justify-content-center">
            <div class="row mt-4 text-center">
                <div class="col-sm-12 col-lg-4 justify-content-center">
                    <a href="{{ route('gerente.sucursal.create') }}" class="p-5 text-decoration-none">
                        <img src="{{ asset('/img/compras.png') }}" alt="" width="70">
                        <h5 class="mt-2 ml-5">Crear Sucursal</h5>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <a href="{{route('gerente.bodega.index')}}" class="p-5 text-decoration-none">
                        <img src="{{ asset('/img/cava.png') }}" alt="" width="70">
                        <h5 class="mt-2 ml-5">Ver Bodegas</h5>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <a href="{{ route('gerente.producto.create') }}" class="p-5 text-decoration-none">
                        <img src="{{ asset('/img/desarrollo.png') }}" alt="" width="70">
                        <h5 class="mt-2 ml-5">Crear Productos</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
