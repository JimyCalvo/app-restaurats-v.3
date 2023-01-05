<?php

namespace App\Http\Controllers;


use \App\Models\Restaurante;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class RestauranteVisitantesController extends Controller
{  
    public function index(Request $request){


        $buscarpor=$request->get('buscarpor');
       

       $restaurantes = Restaurante::where('nombre_restaurante','like','%' .$buscarpor . '%')->get();
       // $restaurantes = Restaurante::get();
        //return view('restaurantes.index', compact('restaurantes', 'buscarpor'));

        return view('restaurantes.index',['restaurantes' => $restaurantes, 'buscarpor' => $buscarpor]);
    }


    public function show(Restaurante $restaurante){

        return view('restaurantes.show',['restaurante'=>$restaurante]);
        
    }

    public function create(){

        return view('restaurantes.create');
        
    }


    public function store(Request $request){

        $request->validate([
            'RazonSocial'=>['required'],
            'nombreRestaurante'=>['required'],
            'direccionLocal'=>['required'],
            'nombreGerente'=>['required'],
            'fotoLocal'=>['required'],
            'categoriaLocal'=>['required'],
            'correoLocal'=>['required'],    
        ]);


        $datoRestaurante = request()->except('_token');

        



        $restaurante = new Restaurante;


        if($request->hasFile('fotoLocal')){
            $foto = $request->file('fotoLocal');
            $destino = 'images/';
            $filename = time(). '-' . $foto->getClientOriginalName();
            $subirImagen = $request->file('fotoLocal')->move($destino, $filename);
            $restaurante-> fotoDirec = $destino . $filename;
        }

        $restaurante-> razon_social = $request->input('RazonSocial');
        $restaurante-> nombre_restaurante = $request->input('nombreRestaurante');
        $restaurante-> direccion_local = $request->input('direccionLocal');
        $restaurante-> gerente_local = $request->input('nombreGerente');

        $restaurante-> tipo_local = $request->input('categoriaLocal');
        $restaurante-> correo_local = $request->input('correoLocal');

        


        $restaurante->save();

        session()->flash('status', 'Restaurante Creado con Exito');

        return to_route('restaurantes.index');
    }

    public function edit(Restaurante $restaurante){
        
        return view('restaurantes.edit',['restaurante'=>$restaurante]);

    }


    public function update(Request $request, Restaurante $restaurante){
        
        $request->validate([
            'RazonSocial'=>['required'],
            'nombreRestaurante'=>['required'],
            'direccionLocal'=>['required'],
            'nombreGerente'=>['required'],
            'fotoLocal'=>['required'],
            'categoriaLocal'=>['required'],
            'correoLocal'=>['required'],    
        ]);

        if($request->hasFile('fotoLocal')){
            $foto = $request->file('fotoLocal');
            $destino = 'images/';
            $filename = time(). '-' . $foto->getClientOriginalName();
            $subirImagen = $request->file('fotoLocal')->move($destino, $filename);
            $restaurante-> fotoDirec = $destino . $filename;
        }
        $restaurante-> razon_social = $request->input('RazonSocial');
        $restaurante-> nombre_restaurante = $request->input('nombreRestaurante');
        $restaurante-> direccion_local = $request->input('direccionLocal');
        $restaurante-> gerente_local = $request->input('nombreGerente');
    
        $restaurante-> tipo_local = $request->input('categoriaLocal');
        $restaurante-> correo_local = $request->input('correoLocal');

        
        $restaurante->save();

        session()->flash('status', 'Informacion actualizada');

        return to_route('restaurantes.show',$restaurante);

    }


    public function destroy(Restaurante $restaurante){

        $restaurante->delete();
        
        
        return to_route('restaurantes.index')->with('status','Restaurante Eliminado');

    }





}
