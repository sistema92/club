<?php

namespace App\Http\Controllers;

use App\plantilla;
use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('form_plantilla');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function show(plantilla $plantilla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function edit(plantilla $plantilla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, plantilla $plantilla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function destroy(plantilla $plantilla)
    {
        //
    }
}
