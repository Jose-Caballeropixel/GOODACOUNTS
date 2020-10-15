@extends('dashboard.sidebargerente')

@section('content')
     <div class="container">
         <h1 class="text-center">Buscar Proveedor</h1>
        <form action="{{route('bodeguero.entrada')}}" method="GET">
            @csrf
            <div class="form-group">
                <input type="text" placeholder="N° de identificacion" name="identificacion" class="form-control">
                <input type="hidden" value="{{$bodega->id}}" name="bodega" class="">
            </div>
            <input type="submit" value="Buscar" class="btn btn-primary">
        </form>
     </div>
@endsection
