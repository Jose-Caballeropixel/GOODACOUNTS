@extends('dashboard.sidebaradmin')

@section('content')
    <div class="container justify-content-center text-center">
        <div class="titulo">
            <h3>Bienvenido Administrador</h3>
        </div>
        <div class="opciones-admin">
            <div class="container">
                <div class="rows">
                    <div class="columna">
                        <div class="icon-enlace">
                            <a href="{{ route('administrador.empresa.create') }}">
                                <img src="{{ asset('/img/anadir-evento.png') }}" alt="" width="100">
                                <h3>Crear Empresa</h3>
                            </a>
                        </div>
                    </div>
                    <div class="columna">
                        <div class="icon-enlace">
                        <a href="{{route('gerente.index')}}">
                                <img src="{{ asset('/img/anadir-evento.png') }}" alt="" width="100">
                                <h3>Crear Empresa</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
