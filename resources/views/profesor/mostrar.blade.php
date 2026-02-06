<h1 class="mt-3">Profesores</h1>
@foreach ($profesores as $profesor)
    <h2>Usuario: {{ $profesor->id }}</h2>
    <li>{{ $profesor->Nombres }}</li>
    <li>{{ $profesor->Apellidos }}</li>
    <li>{{ $profesor->dni }}</li>
@endforeach
