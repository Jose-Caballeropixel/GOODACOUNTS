@extends('dashboard.sidebaradmin')

@section('content')
<<<<<<< HEAD
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
=======
<div class="container">
    <h1 class="text-center">Bienvenido Administrador</h1>
    <div class="row mt-4 text-center justify-content-center">
        <div class="col-sm-12 col-lg-4">
            <a href="{{ route('administrador.empresa.create') }}" class="p-5 text-decoration-none">
                <img src="{{ asset('/img/anadir-evento.png') }}" alt="" width="70">
                <h5 class="mt-2 ml-5">Crear Empresa</h5>
            </a>
>>>>>>> 6eb24748a3761c6a2bec16fee4db27b5f21f9a9c
        </div>
    </div>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nit</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->NIT }}</td>
                    <td>{{ $empresa->Nombre }}</td>
                    <td>{{ $empresa->Correo }}</td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="paginacion d-flex justify-content-center">
        {{ $empresas->links() }}
    </div>
</div>
@endsection
