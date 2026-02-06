@extends("layout.app")

@section("titulo")
    cursos
@endsection

@section("contenido")


    <h1>Mostrar la lista de cursos</h1>

    <?php
    foreach ($cursos as $curso){
        echo $curso . "<br>";
    }
    ?>
    <ol>
    @foreach($cursos as $curso)
        <li>{{$curso}}<br></li>
    @endforeach
    </ol>

@endsection