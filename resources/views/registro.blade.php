<h1>Usuario guardar</h1>
<form action="{{Route('guardar')}}" method="post">
<form action="\usuario\guardar" method="post">
    @csrf
    <input type="submit" value="guardar">
</form>

<a href="/saludos">Saludos 1</a>
<a href="{{Route('Bienvenido')}}">Saludos 2</a>