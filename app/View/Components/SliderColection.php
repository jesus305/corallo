<?php

namespace App\View\Components;

use App\Models\Imgcolor;
use App\Models\Producto;
use Illuminate\View\Component;

class SliderColection extends Component
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

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        /* $producto = Producto::where('coleccion_id',126)->latest()->paginate();  */
        $producto = Producto::where('coleccion_id',126)->where('publicado',1)->get();   

        $img = Imgcolor::all() ;

        


        return view('components.slider-colection',[
            'productos'  =>  $producto,
            'imgs'      =>  $img,
            
        ]);
    }
}
