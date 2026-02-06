@extends("layout.app")

@section("titulo")
    cursos
@endsection

@section("contenido")

    @foreach($cursos as $curso)
        <li>{{$curso}}<br></li>
    @endforeach
@endsection

Hay {{count($cursos)}} cursos disponibles

@foreach($cursos as $curso)
    @switch($curso)
        @case('PHP')
            <li style="color: blue;">{{ $curso }} - Nivel Avanzado</li>
            @break

        @case('Laravel')
            <li style="color: red;">{{ $curso }} - Nivel Pro</li>
            @break

        @default
            <li>{{ $curso }} - Nivel Básico</li>
    @endswitch
@endforeach