<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Producto;
use App\Models\Coleccion;
use Illuminate\Support\Str;
use App\Models\Subcategoria;
use Livewire\WithFileUploads;

class CrearProductos extends Component
{

    public $nombre;
    public $subcategoria;
    public $codigo_referencia;
    public $ubicacion_bodega;

    public $subcategoria_id;
    public $porcentaje_descuento;
    public $precio_final;
    public $descripcion_modelo;
    public $coleccion;
    public $colecciones;
    public $codigo_referencia_aleatorio;
    public $sub;
    public $col;

    public $subcategorys;
    public $category;

    use WithFileUploads;


    protected $rules = [
        'nombre' => 'required|string',
    /*  'codigo_referencia' => 'required|string', */
        'ubicacion_bodega' => 'required|string',
        'porcentaje_descuento' => 'required|string',
        'precio_final' => 'required|numeric',
        'descripcion_modelo' => 'required|string',
    ];

    
    public function mount(Subcategoria $subcategoria , Coleccion $coleccion, Categoria $categoria, $subcategorys , $categorys)
    {
        $this->subcategoria = $subcategoria->id;
        $this->coleccion = $coleccion->id;



        $this->sub = $subcategoria->nombre;
        $this->col = $coleccion->nombre;

        $this->category = $categorys;
        $this->subcategorys = $subcategorys;
        
    }

    
    public function CrearProductos(){
            
                
            $var = $this->subcategoria;
            $colecciones = $this->coleccion;

            $subcategoria_referencia = $this->sub;
            $coleccion_referencia    = $this->col;

            $subcategories = $this->subcategorys; 
            $categories =    $this->category; 
             
            
           
           
            /* datos del formulario */
            $datos = $this->validate();

            $pri_l_sub = substr($subcategoria_referencia, 0, 2); // Obtiene la primera letra de la variable subcategoria_referencia
            $pri_l_col = substr($coleccion_referencia, 0, 1); // Obtiene la primera letra de la variable coleccion_referencia

            $pri_l_sub_m = mb_strtoupper($pri_l_sub); // Convierte la primera letra de la subcategoría a mayúscula
            $pri_l_col_m = mb_strtoupper($pri_l_col); // Convierte la primera letra de la colección a mayúscula



            $codigo_referencia_al = Str::random(3); //Genera una cadena aleatoria de 10 caracteres para el código de referencia.
            $codigo_refe_mayus = mb_strtoupper($codigo_referencia_al);
            $fecha_actual = Carbon::now('America/Bogota')->format('Ym'); //YmdHis Obtiene la fecha y hora actual en la zona horaria de Bogotá en el formato AñoMesDiaHoraMinutosSegundos



            $codigo_referencia = $pri_l_sub_m . $pri_l_col_m . $codigo_refe_mayus . $fecha_actual;

             //crear Produ
             Producto::create([
            'nombre'                 => $datos['nombre'],
            'codigo_referencia'      => $codigo_referencia,
            'ubicacion_bodega'       => $datos['ubicacion_bodega'],
            'porcentaje_descuento'   => $datos['porcentaje_descuento'],
            'precio_final'           => $datos['precio_final'],
            'descripcion_modelo'     => $datos['descripcion_modelo'],
            'subcategoria_id'        => $var,
            'coleccion_id'           => $colecciones,
            'sub_categoria'          => $subcategories,
            'categoria'              => $categories,
           ]); 
          
    
                     //Mensaje de confirmacion
          session()->flash('mensaje','El producto se registo Correctamente');

          //Redicreccionarl al usuario
          return redirect()->to(url()->previous()); 
          

     
    }


    

    

    public function render()
    {
       
       

        return view('livewire.crear-productos');
    }
}
