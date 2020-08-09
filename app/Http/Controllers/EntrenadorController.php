<?php

namespace App\Http\Controllers;

use App\entrenador;
use Illuminate\Http\Request;

class EntrenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $entrenador=\DB::table('entrenadors')
        ->join('nacionalidads','nacionalidads.id','=','entrenadors.nacionalidad_id')
        ->select('entrenadors.id','entrenadors.nombre','entrenadors.apellido','entrenadors.edad',
        'entrenadors.documento','nacionalidads.nacionalidad')->get();

        return view('entrenador.index_entrenador',compact('entrenador'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $nacionalidad_entrenador=\DB::table('nacionalidads')->select('id','nacionalidad')->get();
        return view('entrenador.form_entrenador',compact('nacionalidad_entrenador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $entrenador=\DB::table('entrenadors')
        ->join('nacionalidads','nacionalidads.id','=','entrenadors.nacionalidad_id')
        ->select('entrenadors.id','entrenadors.nombre','entrenadors.apellido','entrenadors.edad',
        'entrenadors.documento','nacionalidads.nacionalidad')->get();//
        
        $entrenado= new Entrenador;
        $entrenado->nombre=$request->nombre;
        $entrenado->apellido=$request->apellido;
        $entrenado->edad=$request->edad;
        $entrenado->documento=$request->documento;
        $entrenado->nacionalidad_id=$request->nacionalidad;
        $entrenado->save();

        return view('entrenador.index_entrenador',compact('entrenador'));




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function show(entrenador $entrenador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
            $datos=entrenador::findOrFail($id);
            return view('entrenador.edit_form_entrenador',compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $datos=request()->except(['_token','_method']);
        entrenador::where('id','=',$id)->update($datos);
        $datos=entrenador::findOrFail($id);
        return view('entrenador.edit_form_entrenador',compact('datos'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entrenador  $entrenador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        entrenador::destroy($id);
        return redirect('/entrenador');
    }
}
