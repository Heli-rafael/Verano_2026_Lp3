@extends('layout.app')
@section('contenido')

    <form action="/profesor/guardar" method="post">
        @csrf
        <input class="form-control" @error('dni') style="border: 1px solid red;" @enderror type="text" name="dni" placeholder="DNI" value="{{ old('dni') }}">
        @error ('dni') <div class="form-text" style="color: red;"> {{$message}} </div> @enderror<br>
        <input class="form-control" type="text" name="nombres" placeholder="Nombres" value="{{ old('nombres') }}"><br>
        <input class="form-control" type="text" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos') }}"><br>
        <input class="form-control" type="submit" value="Registrar Profesor"><br>
    </form>class="form-control"

    @if ($errors->any())
        <div class="alert alert-danger" class="mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection