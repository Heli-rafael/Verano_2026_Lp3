<?php


namespace App\Http\Controllers;

use Illuminate\http\Request;

class PruebaController extends Controller {
    public function procesar(Request $request){
        return view("resultado")->with("nombre", $request->input("nombre"));
    }
}

?>