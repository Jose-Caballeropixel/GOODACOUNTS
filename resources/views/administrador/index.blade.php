@extends('dashboard.sidebaradmin')

@section('content')
    <div class="container justify-content-center text-center">
        <div class="titulo">
            <h3>Bienvenido Administrador</h3>
        </div>
        <div class="opciones-admin">
            <div class="row">
                <div class="col">
                <a href=""><img src="{{asset('/img/anadir-evento.png')}}" alt="" width="100">
                </div>
                <span>Crear Gerente</span></a>
            </div>
        </div>
    </div>
@endsection
