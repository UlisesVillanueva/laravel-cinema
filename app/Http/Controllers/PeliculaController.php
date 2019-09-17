<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelicula;
use App\paise;
use App\genero;
use App\clasificacione;
use App\funcione;
use App\sala;
use DB;



class PeliculaController extends Controller
{

    public function index()
    {
        $peliculas=Pelicula::all();
        return view('vistaPeliculas',compact('peliculas'));
    }


    public function list(){
        $peliculas=DB::table("peliculas")
        ->select('idpelicula','titulo','imagen')
        ->get();

        return view ('vistaPeliculas',compact('peliculas'));
    }

    public function create()
    {
        $paises = paise::all();
        $generos = genero::all(); 
        $clasificaciones = clasificacione::all();
        return view('registroPelicula', compact('paises','generos','clasificaciones'));
    }

    public function store(Request $request)
    {
        request()->validate([ 
            'titulo'=>'required',
            'sinopsis'=>'required',
            'fechalanza'=>'required',
            'duracion'=>'required|numeric|max:300',
            'pais_id'=>'required',
            'genero_id'=>'required',
            'genero_id'=>'required',
            'Imagen'=>'required'
        ],[
            'titulo.required'=>'Debes ingresar el título de la película',
            'fechalanza.required'=>'Debes ingresar fecha de lanzamiento',
            'sinopsis.required'=>'Debes ingresar una sinopsis de la película',
            'duracion.numeric'=>'La duración debe ser en minutos',
            'duracion.required'=>'Debes ingresar la duración',
            'duracion.max'=>'La película debe durar más de 300min',
            'pais_id.required'=>'Debes seleccionar un país',
            'genero_id.required'=>'Debes seleccionar un genero',
            'clasificacion_id.required'=>'Debes seleccionar una clasificación',
            'Imagen.image'=>'solo puedes agragar imagenes ,jpg, .png, etc',
            'Imagen.required'=>'Debes seleccionar una imagen',
        ]);

        $imagenn;
        if($request->hasFile('Imagen')){
        $file =$request->file('Imagen');
        $imagenn=time().$file->getClientOriginalName();
        $file->move(public_path().'/imagenes/',$imagenn);
        }

        $peli = new Pelicula();
        $peli->titulo=$request->input('titulo');
        $peli->fechalanzamiento=$request->input('fechalanza');
        $peli->sinopsis=$request->input('sinopsis');
        $peli->duracion=$request->input('duracion');
        $peli->pais_id=$request->input('pais_id');
        $peli->genero_id=$request->input('genero_id');
        $peli->clasificacion_id=$request->input('clasificacion_id');
        $peli->imagen=$imagenn;
        $peli->save();

        $peliculas = Pelicula::all();
        return redirect()->route('vistaPeliculas',compact('peliculas'))
        ->with('status', 'Película registrada correctamente');
    }

    public function show($id){   
        $pelicula = pelicula::find($id);
        $auxgen=$pelicula->genero_id;
        $genero= genero::find($auxgen);

        $auxcla=$pelicula->clasificacion_id;
        $clasificacion= clasificacione::find($auxcla);

        $auxpais=$pelicula->pais_id;
        $pais= paise::find($auxpais);
        $salas = sala::all(); 

        $indP =pelicula::find($id);


        $funciones=DB::table("funciones")
        ->select('idfuncion','fecha','hora','sala_id','pelicula_id')
        ->get()->where('pelicula_id', 'LIKE', "$id");

        // return $funciones;

        // $peliculas = Pelicula::all($id);
        // $funciones = funcione::all();
        return view('mostrarPelicula',compact('pelicula','pais','genero','clasificacion','funciones','salas','peliculas'));
    }

    public function edit($id)
    {   $paises = paise::all();
        $generos = genero::all(); 
        $clasificaciones = clasificacione::all();
        $pelicula = pelicula::find($id);
        return view('editarPelicula',compact('pelicula','paises','generos','clasificaciones'));
    }

    public function update(Request $request, $id)
    {  
        $imagenn;
        $peli = Pelicula::find($id);
        $peli->fill($request->all());

        if($request->hasFile('Imagen')){
        $file =$request->file('Imagen');
        $imagenn=time().$file->getClientOriginalName();
        $file->move(public_path().'/imagenes/',$imagenn);
        }
        $peli->titulo=$request->input('titulo');
        $peli->fechalanzamiento=$request->input('fechalanza');
        $peli->sinopsis=$request->input('sinopsis');
        $peli->duracion=$request->input('duracion');
        $peli->pais_id=$request->input('pais_id');
        $peli->genero_id=$request->input('genero_id');
        $peli->clasificacion_id=$request->input('clasificacion_id');
        $peli->imagen=$imagenn;
        $peli->save();

        $peliculas = pelicula::all();
        return redirect()->route('vistaPeliculas',compact('peliculas'))
        ->with('status', 'Película actualizada correctamente');
        
    }


    public function destroy($id)
    {
        
        $peli = pelicula::find($id);
        $file_path = public_path().'/imagenes/'.$peli->imagen;
        \File::delete($file_path);
        $peli->delete();
        
        $peliculas = pelicula::all();
        return redirect()->route('vistaPeliculas',compact('peliculas'))
        ->with('status', 'Película eliminada correctamente');
    }
}
