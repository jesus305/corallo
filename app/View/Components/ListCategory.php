<?php

namespace App\View\Components;

use App\Models\Imgcolor;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class ListCategory extends Component
{
    
    public  $search;
    public  $imgs;

    public function __construct()
    {
        //
    }


   /*  public function buscarproducto(){
        
    }
 */


    public function render()
    {
      /* $search = request('search'); */

      /* $productos = Producto::where('nombre', 'like', '%'.$search.'%')
                            ->orWhere('description', 'like', '%'.$search.'%')
                            ->get(); */

   /*    $producto = Producto::orderBy('id', 'ASC')->latest()->paginate();                      

      $img = Imgcolor::orderBy('id', 'ASC')->latest()->paginate();       */      
    
      return view('components.list-category');
    }
}
