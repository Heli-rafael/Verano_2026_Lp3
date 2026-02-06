<h1>Marcacion</h1>
<form action="/asistencia/guardar" method="post">
        @csrf
        <input type="text" name="dni" placeholder="DNI"><br>
        <input type="submit" value="Registrar Asistencia Profesor">
    </form>