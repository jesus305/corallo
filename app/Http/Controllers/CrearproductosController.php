<?php

namespace App\Http\Controllers;

use App\Models\Imgcolor;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Coleccion;
use Illuminate\Http\Request;
use App\Models\Subcategoria;

class CrearproductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function store( Subcategoria $subcategoria, Coleccion $coleccion,$subcategorys, $categorys)
    {
        $producto = Producto::orderBy('id', 'ASC')->where('subcategoria_id',$subcategoria->id)->get(); 
        $img  = Imgcolor::all();

        /* dd($subcategory,$categorys); */

        return view('panel.crear-productos',[
            'subcategorys' => $subcategorys,
            'categorys'    => $categorys,
            'subcategoria' => $subcategoria,
            'coleccion'    => $coleccion,
            'productos'    => $producto,
            'imgs'        =>  $img,
            
           ]); 
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
    }

    
    public function destroy($id)
    {
        //
    }
}
