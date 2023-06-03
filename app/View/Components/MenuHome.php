<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MenuHome extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


     public function buscarproducto(){

        
       /*  $search = request('search'); 

        $productos = Producto::where('nombre', 'like', '%'.$search.'%')
                              ->orWhere('description', 'like', '%'.$search.'%')
                              ->get(); 
  
        $producto = Producto::orderBy('id', 'ASC')->latest()->paginate();                      
  
        $img = Imgcolor::orderBy('id', 'ASC')->latest()->paginate();    */  
        
    }


   
    public function render()
    {
        return view('components.menu-home');
    }
}


