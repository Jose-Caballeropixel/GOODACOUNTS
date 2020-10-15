@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h2>Encargado: {{$bodega[0]->Encargado}}</h2>
        </div>
        <div class="col-md-8">
            <h2 class="mb-0">Proveedor: {{$proveedor->Nombre}}</h2>
            <p  class="mb-0">Nit: {{$proveedor->NIT}}</p>
        </div>
    </div>
</div>
<hr>

<entrada-producto :bodega="{{$bodega[0]->id}}" :proveedor="{{$proveedor->id}}"></entrada-producto>
@endsection
