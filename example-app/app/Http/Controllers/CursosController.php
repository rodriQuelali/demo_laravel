<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //metodo invobs, solo administra una sola ruta
    //formulario principal
    //crear un formulario
    //mostrar show

    public function index() {

        return view('curso.index');
    }

    public function create(){
        return view('curso.create');
        
    }

    public function show($curso){
        // compact('variable')
        return view('curso.show',['curso' => $curso]);
        //return "curos de:$curso"; 
    }
}
