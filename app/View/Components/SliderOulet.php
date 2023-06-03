<?php

namespace App\View\Components;

use App\Models\Imgcolor;
use App\Models\Producto;
use Illuminate\View\Component;

class SliderOulet extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

  
    public function render()
    {
        $producto = Producto::where('coleccion_id',127)->where('publicado',1)->get();   

        $img = Imgcolor::all() ;


        return view('components.slider-oulet',[
            'productos'  =>  $producto,
            'imgs'      =>  $img,
        ]);
        
    }
}
