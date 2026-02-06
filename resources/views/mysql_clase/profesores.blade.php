@foreach ($profesores as $profesor)
    <h2>Usuario: {{ $profesor->id }}</h2>
    <li>{{ $profesor->Nombres }}</li>
    <li>{{ $profesor->Apellidos }}</li>
    <li>{{ $profesor->dni }}</li>
@endforeach
