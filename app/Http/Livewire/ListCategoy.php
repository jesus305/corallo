<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Imgcolor;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Subcategoria;

class ListCategoy extends Component
{
   
    public $seleccions;
    public $colorNuevo;


    
    public $categories;
    public $category;
    public $subcategory;

        public function mount( $category, $subcategory)
        {
            $this->category    = $category;
            $this->subcategory = $subcategory;
 
        }  

   
        public function cargarArticulo()
        {
        
          $datos = $this->validate();
        
          session()->push('productos', $datos);
        
        }



    public function render()
    {
       /*  -------------------consultade categoria (ventana ver-productos ) ----------------------------------- */
        $categoria = Categoria::orderBy('puesto', 'ASC')->where('publicado',1)->get();

        /*  -------------------consultade Subcategoria (ventana ver-productos )----------------------------------- */

        
        $categories = $this->category;
        $subcategories = $this->subcategory;


       if ($subcategories == 'todo'){
            $producto = Producto::orderBy('created_at', 'ASC')->where('publicado',1)->get(); 
       }else{
           $producto = Producto::orderBy('created_at', 'ASC')->where('publicado',1)->where('sub_categoria', $subcategories)->get(); 
       }
            
        

       $subcategoria = Subcategoria::orderBy('nombre')
       ->orderBy('puesto', 'ASC')
       ->where('publicado', 1)
       ->distinct('nombre')
       ->get();
  

        $img  = Imgcolor::all();


          $products = session('productos', []);

        return view('livewire.list-categoy',[
            'products' => $products,
            'categories'      => $categories,
            'productos'     => $producto,
            'subcategorias' => $subcategoria,
            'categoria'     => $categoria,
            'imgs'          =>  $img,
        ]);
        
    }
   
    
    
       
}
