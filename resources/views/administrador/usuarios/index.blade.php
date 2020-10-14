@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <a href="{{route('administrador.usuarios.create')}}">Crear Usuario</a>
                <table class="table table-reponsive">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>

                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->empresa_id}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
