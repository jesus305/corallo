<?php

namespace App\Http\Livewire;

use App\Models\Talla;
use Livewire\Component;
use App\Models\Imgcolor;
use App\Models\Producto;
use Livewire\WithPagination;

class ProductoDetail extends Component
{

    public $img;
    public $producto;
    public $seleccions;
    public $colorNuevo;
    public $SeleccionColor;
    public $SeleccionTalla;

    


    use WithPagination;

    public $rules = [
      'colorNuevo'     => 'required',
      'SeleccionTalla' => 'required',
    ];



    public function mount( Producto $producto)
    {
        /* $this->img = $img->id; */
        $this->producto = $producto;
       /*  -------- consulta de color ---------- */
       $this->seleccions =   Imgcolor::all();

    }

    


public function cargarArticulo()
{

  $datos = $this->validate();

  session()->push('productos', $datos);

}

    



    public function render()
    {

        $producto_id = $this->producto;

        $imgcolor = Imgcolor::
        when($this->colorNuevo,function ($query){
          return  $query->where('id',$this->colorNuevo);
        })->where('producto_id',$producto_id->id)->latest()->paginate(1); 




        $talla = Talla::
        when($this->colorNuevo,function ($query){
          return  $query->where('imgcolor_id',$this->colorNuevo);
        })->get(); 
    
        $productos = session('productos', []);

        return view('livewire.producto-detail',[
                'productos' => $productos,
                'imgcolores'    => $imgcolor,
                'producto_id'   =>   $producto_id,
                'tallas'        =>  $talla,
            ]);
    }
}
