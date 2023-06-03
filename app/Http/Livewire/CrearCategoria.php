<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;

class CrearCategoria extends Component
{

    public  $nombre;
    public  $puesto;
    public  $coleccion_id;
    public  $coleccion;
  


    protected $rules = [
        'nombre' => 'required|string',
        'puesto' => 'required',
    ];


    public function mount($coleccion)
    {
        $this->coleccion = $coleccion->id;

        
       /*  dd($coleccion->id); */

    }


    public function CrearCategoria()
    {
         $var = $this->coleccion;
      
      
         $datos = $this->validate();  
      

         //crear Categoria
         Categoria::create([
        'nombre'       => $datos['nombre'],
        'puesto'       => $datos['puesto'],
        'coleccion_id' => $var,
       ]);  
 
        //Redicreccionarl al usuario
         return redirect()->route('ver-productos',$var);  
      
        //Mensaje de confirmacion
         session()->flash('mensaje','La Tienda se registro correctamente');  
 
     }


    public function render()
    {
        return view('livewire.crear-categoria');
    }
}
