<?php

namespace App\Http\Controllers;

use App\Models\Tienda;
use App\Models\Imgcolor;
use App\Models\Producto;
use App\Models\Coleccion;
use Illuminate\Http\Request;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Coleccion $coleccion)
    {

        dd($coleccion);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Producto $producto, Imgcolor $imgcolor)
    {
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Coleccion $coleccion)
    {
        $producto = Producto::orderBy('id', 'ASC')->where('coleccion_id',$coleccion->id)->where('publicado',1)->latest()->paginate(); 

        $img  = Imgcolor::all();

        return view('panel.ver-productos',[
            'productos' => $producto,
            'coleccion' => $coleccion ,
            'imgs'        =>  $img,
          ]);  
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
