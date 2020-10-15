@extends('dashboard.sidebaradmin')

@section('content')
    <div class="container justify-content-center text-center">
        <div class="titulo">
            <h3>Bienvenido Administrador</h3>
        </div>
        <div class="opciones-admin">
            <div class="container">
                <div class="columna">
                    <div class="icon-enlace">
                        <a href="{{ route('administrador.empresa.create') }}">
                            <img src="{{ asset('/img/anadir-evento.png') }}" alt="" width="100">
                            <h3>Crear Empresa</h3>
                        </a>
                    </div>
                </div>
                <table class="table mt-4">
                        <thead>
                            <tr>
                                <th>Nit</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empresas as $empresa)
                                <tr>
                                    <td>{{ $empresa->NIT }}</td>
                                    <td>{{ $empresa->Nombre }}</td>
                                    <td>{{ $empresa->Correo }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
                <div class="paginacion d-flex justify-content-center">
                    {{$empresas->links()}}
                </div>
        </div>
    </div>
    </div>
@endsection
