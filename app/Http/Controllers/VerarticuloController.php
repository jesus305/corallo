<?php

namespace App\Http\Controllers;

use App\Models\Imgcolor;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VerarticuloController extends Controller
{
    
  

    public function store($category, $subcategory, Request $request)
    {
       
        return view('cliente.ver-articulo',[
            'subcategory' => $subcategory,
            'category'    =>  $category,
          ]);  
    }

   

}
