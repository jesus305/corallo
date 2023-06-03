<?php

namespace App\Http\Controllers;

use App\Models\Imgcolor;
use App\Models\Producto;
use App\Models\Talla;
use Illuminate\Http\Request;

class CreardetailController extends Controller
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
    public function create(Producto $producto)
    {   
       


        //////////////////////////// ME TRAER LAS IMG DE CADA PRODUCTO //////////////
        $imgcolor = Imgcolor::where('producto_id',$producto->id)->paginate();



        //////////////////////////// ME TRAER LAS TALLAS  DE CADA IMGCOLOR //////////////
        $talla = Talla::all();

        return  view('panel.crear-detail',[
            'imgcolores' => $imgcolor,
            'producto'   => $producto,
            'tallas'     => $talla,
        ]);
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
        
    }
}
