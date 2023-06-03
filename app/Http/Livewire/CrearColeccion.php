<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Tienda;
use Livewire\Component;
use App\Models\Coleccion;
use Livewire\WithFileUploads;

class CrearColeccion extends Component
{

    public  $tienda;
    public  $nombre;
    public  $descripcion;
    public  $banner;
    public  $tienda_id;
    public  $portadaimg;


    use WithFileUploads;

    protected $rules = [
        'nombre' => 'required|string',
        'descripcion' => 'required|string',
        'banner' => 'required|image',
        'portadaimg' => 'required|image',

    ];

    public function mount(Tienda $tienda)
    {
        $this->tienda = $tienda->id;
       
    }

    public function CrearColeccion()
    {
      
        $var = $this->tienda;
      
        $datos = $this->validate();

       /*  -------------baner-------------------- */
        $banner = $this->banner->store('public/banner');
        $datos['banner'] = str_replace('public/banner/','',$banner);


         /*  -------------portadaimg-------------------- */
         $portadaimg = $this->portadaimg->store('public/portadaimg');
         $datos['portadaimg'] = str_replace('public/portadaimg/','',$portadaimg);


        //crear Coleccion
        Coleccion::create([
        'nombre'       => $datos['nombre'],
        'descripcion'  => $datos['descripcion'],
        'banner'       => $datos['banner'],
        'portadaimg'   => $datos['portadaimg'],
        'tienda_id'    => $var,
       ]); 
      

      //Redicreccionarl al usuario
      return redirect()->route('ver-tienda',$var); 
      
      //Mensaje de confirmacion
       session()->flash('mensaje','La Tienda se registro correctamente');
 


      //Redicreccionarl al usuario

    }


    public function render()
    {
      
        return view('livewire.crear-coleccion');
    }
}
