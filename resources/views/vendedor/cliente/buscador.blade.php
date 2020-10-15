@extends('dashboard.sidebaradmin')
@section('content')
<div class="container justify-content-center text-center">
    <form action="{{route('vendedor.salida.index')}}" method="GET">
        @csrf
        <input type="text" placeholder="N° de identifiacion" name="identificacion">
        <input type="submit" value="Buscar">
    </form>
</div>
@endsection
