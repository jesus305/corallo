<?php

namespace App\View\Components;

use App\Models\Imgcolor;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\View\Component;

class ListBusqueda extends Component
{
    

    public $producto;

    public function __construct($producto)
    {
        $this->producto = $producto;
    }





    public function render()
    {
        $busqueda = $this->producto;

        $producto = Producto::where('nombre', 'LIKE', '%'.$busqueda.'%')
                          ->orWhere('description', 'LIKE', '%'.$busqueda.'%')
                          ->orWhere('categoria', 'LIKE', '%'.$busqueda.'%')
                          ->orWhere('sub_categoria', 'LIKE', '%'.$busqueda.'%')
                          ->orWhere('codigo_referencia', 'LIKE', '%'.$busqueda.'%')
                          ->orWhere('descripcion_modelo', 'LIKE', '%'.$busqueda.'%')
                          ->get();

        $img  = Imgcolor::orderBy('id', 'ASC')->latest()->paginate();

        $category =   Categoria::select('nombre')
                        ->distinct()
                        ->get();
                        
        $subcategoria = Subcategoria::orderBy('puesto', 'ASC')->where('publicado',1)->latest()->paginate();                


        return view('components.list-busqueda',[
            'productos'    =>   $producto,
            'imgs'         =>   $img,
            'categorys'    =>   $category,
            'subcategorias'=>   $subcategoria,
        ]);
    }
}
