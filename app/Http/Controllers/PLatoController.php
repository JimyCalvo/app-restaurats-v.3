<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;



use Illuminate\Http\Request;

/**
 * Class PlatoController
 * @package App\Http\Controllers
 */
class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos = Plato::paginate();

        return view('plato.index', compact('platos'))
            ->with('i', (request()->input('page', 1) - 1) * $platos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plato = new Plato();

        $categorias = Categoria::pluck('nombre','id');



        return view('plato.create', compact('plato', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $datosPlato = request()->except('_token');
        if($request->hasFile('Foto')){
            $datosPlato['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Plato::insert($datosPlato);


        

        $plato = Plato::create($request->all());

        request()->validate(Plato::$rules);

        return redirect()->route('platos.index')
            ->with('success', 'Plato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plato = Plato::findOrFail($id);

        return view('plato.show', compact('plato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $plato = Plato::findOrFail($id);

        $categorias = Categoria::pluck('nombre','id');

        return view('plato.edit', compact('plato', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Plato $plato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // request()->validate(Plato::$rules);


        $datosPlato = request()->except(['_token','_method']);

        

        if($request->hasFile('Foto')){  

            $plato=Plato::findOrFail($id);
            Storage::delete(('public/'.$plato->Foto));
            $datosPlato['Foto']=$request->file('Foto')->store('uploads','public');
        }


        Plato::where('id','=',$id)->update($datosPlato);

        

        // $plato->update($request->except('_token','_method'));

        $plato=Plato::findOrFail($id);
        
        // return view('plato.edit', compact('plato') );





        // Plato::where('id','=',$id)->update($datosPlato);

         return redirect()->route('platos.index')
             ->with('success', 'Plato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $plato = Plato::find($id)->delete();

        return redirect()->route('platos.index')
            ->with('success', 'Plato deleted successfully');
    }
}
