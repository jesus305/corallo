<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Coleccion;
use App\Models\Subcategoria;

class VerCategoria extends Component
{

    public $coleccion;

    public function mount(Coleccion $coleccion)
    {
        $this->coleccion = $coleccion->id;
    }

    public function render(Coleccion $coleccion)
    {

        $var = $this->coleccion;
        
        $coleccion = $var;
        
        $producto = Producto::where('publicado',1)->get(); 
       
       /*  -------------------consultade categoria (ventana ver-productos )al selecionaar la coleccion ----------------------------------- */
        $categoria = Categoria::where('coleccion_id',$var)->orderBy('puesto', 'ASC')->where('publicado',1)->get(); 

        /*  -------------------consultade Subcategoria (ventana ver-productos )al selecionaar la coleccion ----------------------------------- */ 
        $subcategoria = Subcategoria::orderBy('puesto', 'ASC')->where('publicado',1)->get(); 
 
    
           
        return view('livewire.ver-categoria',[
            'productos'     => $producto,
            'categorias'    => $categoria,
            'subcategorias' => $subcategoria,
            'coleccion'     => $coleccion,
        ]);
    }
}


