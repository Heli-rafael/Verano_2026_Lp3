<?php
/*
1. Cuando es la misma ruta tines que priorizar una

*/
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//Declarar controllador
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AsistenciaController;
// Profesor
Route::get("/profesor/guardar", [ProfesorController::class, 'registrar']);
Route::post("/profesor/guardar", [ProfesorController::class, 'guardar']);

// Asistencia
Route::get("/asistencia/marcar", [AsistenciaController::class, 'registrar']);
Route::post("/asistencia/guardar", [AsistenciaController::class, 'guardar']);

Route::get("/profesor/mostrar", [ProfesorController::class, 'mostrar']);
Route::get("/profesor/actualizar", [ProfesorController::class, 'actualizar']);
Route::get("/profesor/eliminar", [ProfesorController::class, 'eliminar']);

Route::get('/profesores', [ProfesorController::class, 'index']);
Route::get('/profesores/{id}', [ProfesorController::class, 'show']);




















Route::post("/procesar", [PruebaController::class, "procesar"])->name("guardar");
//Procesar es el nombre de la funcion que se va utilizar

Route::get('/ejemcontrolador', function(){
    return view("ejemcontrolador", ["nombre", "Angelica"])->name("");
});


// Controllers

// Controller
Route::get("/usuarios", [UserController::class, "mostrar"]);

//Invocable
Route::get("/servidor", ProvisionServer::class);

//Resource
Route::resource("facultad", FacultadController::class);

// Clase
Route::get("/usuario/registrar", [UserController::class, "crear"]);
Route::get("/usuario/buscar", [UserController::class, "buscar"]);

// Trabajos en clase
Route::get('/prueba', function(){
    return view("prueba", ["nombre=", "Angelica"]);
});

Route::get('/prueba', function(){
    return view("prueba")
    ->with("nombre", "Heli")
    ->with("apellido", "Rafael");
})->name("Bienvenido");


// Ejemplos
Route::get('/saludos1', function(){
    return "Bienvenido a mi primera aplicación en Laravel";
});


/*
Route::get('/usuarios', function(Request $request){
    dd($request);
});

Route::get('/usuarios', function(Request $request){
    return $request->input("nombre");
});*/

Route::get('/usuarios/mostrar{nombre}', function(String $nombre){
    return $nombre;
});

Route::get('/usuarios/mostrar{nombre}', function ($nombre) {
    return $nombre;
});

// Usuario guardar
Route::get("usuario/guardar", function(){
    return view("registro");
});

Route::post("usuario/guardar", function(){
    return "usuario guardado";
})->name("guardar");


// Trabajando con rutas anidadas
Route::get("/cursos2", function(){
    $cursos = ["I", "II"];
    return view("cursos.mostrar")->with("cursos", $cursos);
});

Route::get("/usuario/registrar", function(){
    return view("usuario.crear");
});


/*


LABORATORIOS 


*/


// LABORATORIO 2

// Actividad 1
Route::get('/', function () {
    return "Bienvenido a mi primera aplicación en Laravel";
});

// Actividad 2

Route::get('/hola', function () {
    return "Hola desde Laravel";
});

Route::get('/about', function () {
    echo "Soy estudiante de desarrollo web";
});

// Actividad 3
Route::get('/saludo/{nombre?}', function($nombre){
    return "Hola, $nombre. Bienvenido a Laravesssl";
});

// Actividad 4
Route::get('/curso/{nombre?}', function($nombre = "Laravel"){
    return "Estas aprendiendo $nombre";
});

/* Actividad 5
Route::get('/home', function($nombre = "Laravel"){
    return view('home');
});
*/

//Actividad 6
Route::get('/home', function(){
    $nombre = "Estudiante";
    return view("home", ["nombre" => $nombre]);
});


// LABORATORIO 3

// Actividad 1
Route::get('/curso/{nombre?}', function($nombre = "Laravel"){
    return "Estas aprendiendo $nombre";
});

// Actividad 2
Route::get("/usuario/inicio", function($nombre = "Heli"){
    $nombre = "User";
    return view("usuario", ["nombre" => $nombre]);
});

Route::get("/usuario/{nombre}", function($nombre = "Heli"){
    return view("usuario")->with("nombre", $nombre);
});

// Actividad 3
Route::get("/cursos", function(){
    $cursos = ['Laravel', 'PHP','MySQL', 'JavaScript'];
    return view("cursos")->with("cursos", $cursos);
});

// Actividad 4

// Actividad 5
Route::get("/parcial_menu", function(){
    return view("parcial_menu");
});

// Actividad 6
// Ver
Route::get('/contacto', function () {
    return view('contacto');
});
// Mostrar
Route::post("/contacto", function(Request $request){
    $nombre = $request->input("nombre");
    $mensaje = $request->input("mensaje");
    return view("resultado")
        ->with("nombre", $nombre)
        ->with("mensaje", $mensaje);
    
});


/*
Laboratorio 4
*/

/*
Crea un controlador llamado PaginaController con un método inicio que
retorne la vista inicio.blade.php con un mensaje de bienvenida.
*/
// Controller
Route::get("/controller", [PaginaController::class, "vistaInicio"]);

/*
Agrega una ruta /inicio que apunte al método inicio de
PaginaController.
*/
Route::get("/inicio", [PaginaController::class, "vistaInicio"]);

/*
En PaginaController, crea un método saludo($nombre) que reciba un
parámetro desde la ruta /saludo/{nombre} y retorne una vista
*/
Route::get('/inicio/{nombre?}', [PaginaController::class, "saludo"]);

/*
Crea un método cursos en PaginaController que retorne una vista
cursos.blade.php, enviando un arreglo con cursos, por ejemplo:
*/
Route::get("/cursos3", [PaginaController::class, "cursos"]);

/*
Crea una plantilla layouts/app.blade.php con un @yield('titulo') y
@yield('contenido').
b) En PaginaController, crea un método nosotros que retorne una vista
nosotros.blade.php extendiendo la plantilla, y que muestre:
*/
Route::get("/nosotros", [PaginaController::class, "nosotros"]);
