<nav class="navbar navbar-dark bg-dark">
    <div class="container d-flex justify-content-between">
        
        <a class="navbar-brand" href="{{ url('/bienvenida') }}">
            Sistema
        </a>

        <div class="d-flex gap-2">
            <a class="btn btn-outline-light" href="{{ url('/bienvenida') }}">
                Bienvenida
            </a>
            <a class="btn btn-light" href="/profesor/guardar">
                Guardar Profesor
            </a>
            <a class="btn btn-light" href="/asistencia/guardar">
                Guardar Asistecia
            </a>
        </div>

    </div>
</nav>
