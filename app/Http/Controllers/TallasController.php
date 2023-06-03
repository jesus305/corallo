<?php

namespace App\Http\Controllers;

use App\Models\Imgcolor;
use App\Models\Producto;
use App\Models\Talla;
use Illuminate\Http\Request;

class TallasController extends Controller
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
    public function create(Request $request, Producto $producto, Imgcolor $imgcolor)
    {   
        

       //validacion
        $this->validate($request,[
        'cantidad'=>'numeric|required',
        'talla'=>'required|max:255'
       ]);

       Talla::create([
        'cantidad'    =>  $request->cantidad,
        'talla'       =>  $request->talla,
        'imgcolor_id' =>  $imgcolor->id,
        'producto_id' =>  $producto->id,
      ]);  



      return back()->with('mensaje','Talla registrada con exito'); 
    }

 
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
