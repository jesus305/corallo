<?php

namespace App\Http\Controllers;

use App\Http\Livewire\VerTienda;
use App\Models\Coleccion;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Tienda;

class VertiendasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $id)
    {
        /* return view('panel.ver-tienda'); */


       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tienda $tienda)
    {

        
           $coleccion = Coleccion::where('tienda_id',$tienda->id)->latest()->paginate(10); 
        

           return view('panel.ver-tienda',[
              'tienda' => $tienda, 
             'coleccion' => $coleccion, 
      ]);  

    }





    public function store(Tienda $tienda, Coleccion $coleccion)
    {
     
         /*   return view('panel.ver-tienda',[
              'tienda' => $tienda, 
              'colecciones' => $coleccion,
       ]);   */

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      /*  return view('panel.ver-tienda',[
              'tienda' => $tienda
       ]); */
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
