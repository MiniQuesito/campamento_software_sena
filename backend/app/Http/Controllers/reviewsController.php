<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Reviews;

class reviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Reviews::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //capturo el payload
        //crear el nuevo curso
        return Reviews::create(
              $request->all()
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Reviews::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //1.Encontrar el bootcamp por Id 
        $b = Reviews::find($id);
        //2.Actualizarlo
        $b -> update($request->all());
        //3.enviar responsive con el bootcamp actualizado
        return $b;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //1. Encontrar el bootcamp a eliminar por id 
        $b = Reviews::find($id);
        //2. Eliminarlo 
        $b -> delete();
        //3. Response con el objeto eliminado
        return $b;

    }
}
