<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Curso;


class CursosController extends Controller
{
    //metodo invobs, solo administra una sola ruta
    //formulario principal
    //crear un formulario
    //mostrar show

    public function index() {

        $cursos = Curso::all();

        return view('curso.index',['cursos' => $cursos]);

    }

    public function create(){
        return view('curso.create');
        
    }

    public function show($curso){
        // compact('variable')

        $cursoT = Curso::findOrFail($curso);
        return view('curso.show',['curso' => $cursoT]);
        //return "curos de:$curso"; 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'estdo' => 'required|boolean',
        ]);

        Curso::create($validatedData);

        return redirect()->route('curso.index')->with('success', 'Curso creado exitosamente.');
    }


    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nombre' => 'required',
            'estdo' => 'required|boolean',
        ]);

        $curso->update($request->all());

        return redirect()->route('cursos.index')
                        ->with('success', 'Curso actualizado exitosamente.');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index')
                        ->with('success', 'Curso eliminado exitosamente.');
    }

}
