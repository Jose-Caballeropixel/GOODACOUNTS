@extends('layouts.app')

@section('content')

    <form action="{{route('administrador.usuarios.store')}}" method="POST">
        @csrf
        @include('ui.form_usuario')

    </form>

@endsection
