<?php

namespace App\Http\Controllers;

use App\jugador;
use Illuminate\Http\Request;
use App\Http\Requests\validacion_jugador;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // CONSULTA JOIN EN LARAVEL
        $jugador=\DB::table('jugadors')
        ->join('nacionalidads','nacionalidads.id','=','jugadors.nacionalidad_id')
        ->select('jugadors.id','jugadors.nombre','jugadors.apellido','jugadors.edad',
        'jugadors.documento','nacionalidads.nacionalidad')->get();
        
        return view('jugador.index_jugador',compact('jugador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //CONSULTA DE LA TABLA NACIONALIDAD
        $nacionalidad_jugador=\DB::table('nacionalidads')->select('id','nacionalidad')->get();
        return view('jugador.form_jugador',compact('nacionalidad_jugador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validacion_jugador $request)
    {
        //
        $jugador= new Jugador;
        $jugador->nombre=$request->nombre;
        $jugador->apellido=$request->apellido;        
        $jugador->edad=$request->edad;        
        $jugador->documento=$request->documento;        
        $jugador->nacionalidad_id=$request->nacionalidad;        
        $jugador->save();

        return redirect('/jugador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show(jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datos=jugador::findOrFail($id);
        return view('jugador.edit_form_jugador',compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $datos=request()->except(['_token','_method']);
        jugador::where('id','=',$id)->update($datos);
        $datos=jugador::findOrFail($id);
        return view('jugador.edit_form_jugador',compact('datos'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        

        jugador::destroy($id);
        return redirect('/jugador');
    }
}
