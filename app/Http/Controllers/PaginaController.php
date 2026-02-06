<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    //
    public function vistaIncio() {
        return view("inicio", ["mensaje" => "Bienvenido a Laravel"]);
    }

    public function saludo($nombre) {
        return view("saludo", ["nombre" => $nombre]);
        //return view("saludo")->with("nombre", $nombre)
        // se puede usar Compact
        //  return view("saludo", compact('nombre'));
    }

    public function cursos(){  
        $cursos = [
            
        ];
        return view("cursos")->with("cursos", $cursos);
    }

    public function nosotros(){
        return view("nosotros");
    }
}
