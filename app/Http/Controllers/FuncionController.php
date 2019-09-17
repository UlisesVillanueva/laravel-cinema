<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcione;
use App\sala;
use App\Pelicula;

class FuncionController extends Controller
{

    public function index(){
        $funciones = Funcione::all();
        $peliculas = pelicula::all();
        $salas = sala::all();
        
        return view('vistaFunciones',compact('funciones','salas','peliculas'));
    }

    public function create(){
        $peliculas = pelicula::all();
        $salas = sala::all(); 
        return view('registroFuncion', compact('peliculas','salas'));
    }


    public function store(Request $request){

            request()->validate([ 
            'fecha'=>'required',
            'hora'=>'required',
            'sala_id'=>'required',
            'pelicula_id'=>'required'
        ],[
            'fecha.required'=>'Debes ingresar una fecha para la función',
            'hora.required'=>'Debes ingresar una hora para la función',
            'sala_id.required'=>'Debes seleccionar una sala',
            'pelicula_id.required'=>'Debes seleccionar una película',
        ]);


        $funci = new Funcione();
        $funci->fecha=$request->input('fecha');
        $funci->hora=$request->input('hora');
        $funci->sala_id=$request->input('sala_id');
        $funci->pelicula_id=$request->input('pelicula_id');
        $funci->save();

        $funciones = Funcione::all();
        $peliculas = Pelicula::all();
        $salas = sala::all();
        
        return redirect()->route('vistaFunciones',compact('funciones','salas','peliculas'))
        ->with('status', 'Función registrada correctamente');
    }

    public function show($id){
        $funcion = funcione::find($id);

        $auxpeli=$funcion->pelicula_id;
        $pelicula= pelicula::find($auxpeli);

        $auxsala=$funcion->sala_id;
        $sala= sala::find($auxsala);

        return view('mostrarFuncion',compact('funcion','sala','pelicula'));
    }


    public function edit($id){
        $salas = sala::all(); 
        $peliculas = Pelicula::all();
        $funcion = funcione::find($id);
        return view('editarFuncion',compact('funcion','salas','peliculas'));
    
    }

    public function update(Request $request, $id){
        $funci = Funcione::find($id);
        $funci->fill($request->all());
        $funci->fecha=$request->input('fecha');
        $funci->hora=$request->input('hora');
        $funci->sala_id=$request->input('sala_id');
        $funci->pelicula_id=$request->input('pelicula_id');
        $funci->save();

        $funciones = Funcione::all();
        return redirect()->route('vistaFunciones',compact('funciones'))
        ->with('status', 'Función actualizada correctamente');
    }

    public function destroy($id)
    {
        $funci = funcione::find($id);
        $funci->delete();

        $funciones = Funcione::all();
        return redirect()->route('vistaFunciones',compact('funciones'))
        ->with('status', 'Función eliminada correctamente');
    }
}
