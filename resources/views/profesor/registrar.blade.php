@extends('layout.app')
@section('contenido')

    <form action="/profesor/guardar" method="post">
        @csrf
        <input type="text" name="dni" placeholder="DNI"><br>
        <input type="text" name="nombres" placeholder="Nombres"><br>
        <input type="text" name="apellidos" placeholder="Apellidos"><br>
        <input type="submit" value="Registrar Profesor">
    </form>
@endsection