<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class SearchController extends Controller
{





    public function index(Request $request)
    {


            //validacion
            $this->validate($request,[
                'palabraclave'=>'required|max:250',
            ]);


            $producto = $request->input('palabraclave');


           
        return view('cliente.busqueda',[
            'producto'   => $producto,
        ]);
    }

}
