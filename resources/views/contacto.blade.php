<!DOCTYPE html>
<html>
<head>
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <form action="/contacto" method="POST">
        @csrf
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>
        
        <label>Mensaje:</label><br>
        <textarea name="mensaje" required></textarea><br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
