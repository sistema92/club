 <?php

namespace App\Http\Controllers;

use App\nacionalidad;
use Illuminate\Http\Request;
use App\Http\Requests\validacion_nacionalidad;

class NacionalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $naciona=nacionalidad::select('id','nacionalidad')->orderBy('nacionalidad','asc')->get();
        return view('nacionalidad.index_nacionalidad',compact('naciona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('nacionalidad.form_nacionalidad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( validacion_nacionalidad $request)
    {
        //
        $datos= new Nacionalidad;
        $datos->nacionalidad=$request->nacio;

        //PARA VERIFICAR SI EL REGISTRO EXISTE EN LA BASE DE DATOS
        $existencia= \DB::table('nacionalidads')->select('nacionalidad')->where('nacionalidad','=',$request->nacio)->get();
        if (count($existencia)>=1) {   
        return json_encode('Existe registro');
        }else{
			
            $datos->save();
            return redirect('/nacionalidad');

        }

     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nacionalidad  $nacionalidad
     * @return \Illuminate\Http\Response
     */
    public function show(nacionalidad $nacionalidad)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nacionalidad  $nacionalidad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
            $datos=nacionalidad::findOrFail($id); 
            return view('nacionalidad.edit_form_nacionalidad',compact('datos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nacionalidad  $nacionalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datos=request()->except(['_token','_method']);
        nacionalidad::where('id','=',$id)->update($datos);
        $datos=nacionalidad::findOrFail($id);
        return view('nacionalidad.edit_form_nacionalidad',compact('datos'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nacionalidad  $nacionalidad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        nacionalidad::destroy($id);
        return redirect('/nacionalidad');    
        
    }
}
