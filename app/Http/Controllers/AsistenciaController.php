<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use App\Models\Asistencia;

use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function registrar(){
        return view("asistencia.marcar");
    }

    public function guardar(Request $request){
        $profesor = Profesor::where("dni", $request->input('dni'))->first();
        date_default_timezone_set('America/Lima');

        if (!$profesor) {
            return "Profesor no encontrado";
        }
        $id_profesor = $request->input('id_profesor');

        $asistencia = new Asistencia();
        $asistencia->hora_marcacion = date('H:i:s');
        $asistencia->id_profesor = $profesor->id;
        $asistencia->save();
        return "Asistencia registrada correctamente";
    }
}
