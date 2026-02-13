<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesorController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        //return $profesores;
        return view('mysql_clase.profesores', ["profesores" => $profesores]);
    }

    public function show($id){
        return Profesor::findOrFail($id);
        
    }

    public function store(Request $request)
    {
        // Crear el profesor
        Profesor::create([
            'dni' => $request->dni,
            'Nombres' => $request->nombres,
            'Apellidos' => $request->apellidos,
        ]);

        // Redirigir a la lista con mensaje
        return redirect()->route('profesores.create')->with('success', 'Profesor creado correctamente.');
    }

    // CREAR
    public function registrar(){
        return view('profesor.registrar');
    }

    public function guardar(Request $request){

        // Validar los datos
        $request->validate([
            'dni' => 'required|unique:profesors,dni|numeric|size:8',
            'nombres' => 'required',
            'apellidos' => 'required',
        ]);


        $profesor = new Profesor();
        $profesor->dni = $request->input("dni");
        $profesor->nombres = $request->input("nombres");
        $profesor->apellidos = $request->input("apellidos");
        $profesor->save();

        return "Profesor guardado correctamente";

        /* Manual 
        DB::insert("INSERT INTO profesors (dni, Nombres, Apellidos) VALUES (?,?,?)",
            ['98765432','Ana','Gomez']);
        */
    }

    public function mostrar(){
        // Forma comun
        $profesores = DB::select("SELECT * FROM profesors");

        // Para especificar la vista
        $profesores = DB::table("profesors")->get();

        // Para traer todo
        //$profesores = DB::table("profesors")->all();
        
        // De otra forma
        //$profesores = Profesor::all();
        return view("profesor.mostrar", ["profesores" => $profesores]);
    }

    public function actualizar(){
        $profesor = Profesor::find(1);
        $profesor->Nombres = 'Heli H';
        $profesor->save();
        return "Profesor actualizado correctamente";

        /*
        DB::update("UPDATE profesors SET Nombres = ? WHERE id = ?", ['Maria', $id]);
        return "Profesor actualizado correctamente";
        */
    }

    public function eliminar($id){
        
        /*
        $profesor = Profesor::find($id);
        $profesor->delete();
        DB::delete("DELETE FROM profesors WHERE id = ?", [$id]);
        return "Profesor eliminado correctamente";
        */
    }
}
