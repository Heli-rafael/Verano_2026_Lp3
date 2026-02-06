Hola {{ $nombre}} -

@if($nombre == "Admin")
    Hola admin
@elseif($nombre == "User")
    Hola usuario
@endif