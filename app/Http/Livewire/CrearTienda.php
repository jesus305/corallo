<?php

namespace App\Http\Livewire;

use App\Models\Tienda;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearTienda extends Component
{

    public $nombre;
    public $nit;
    public $lema;
    public $banner;
    public $logo;
    public $descripcion;
    public $telefono;
    public $correo;
    public $departamentos;
    public $municipios;
    public $direccion;

    use WithFileUploads;

    protected $rules = [
        'nombre' => 'required|string',
        'nit' => 'string',
        'lema' => 'required|string',
        'banner' => 'required|image|max:1024',
        'logo' => 'required|max:512',
        'descripcion' => 'required|string',
        'telefono' => 'numeric',
        'correo' => 'required',
        'departamentos' => 'required',
        'municipios' => 'required',
        'direccion' => 'required',
    ];

    public  function CrearTienda()
    {
      $datos = $this->validate();

      //almacenar la imagen
      $banner =$this->banner->store('public/banner');
      $logo = $this->logo->store('public/logotiendas');

      $datos['banner'] = str_replace('public/banner/','',$banner);
      $datos['logo'] = str_replace('public/logotiendas/','',$logo);

      
      //crear la tienda
        Tienda::create([
            'nombre' => $datos['nombre'],
            'nit' => $datos['nit'],
            'lema' => $datos['lema'],
            'banner' =>  $datos['banner'],
            'logo' =>  $datos['logo'],
            'descripcion' =>  $datos['descripcion'],
            'telefono' =>  $datos['telefono'],
            'correo' =>  $datos['correo'],
            'departamentos' =>  $datos['departamentos'],
            'municipios' =>  $datos['municipios'],
            'direccion' =>  $datos['direccion'],
            'user_id'   =>  auth()->user()->id,
        ]);

      //Mensaje de confirmacion

      session()->flash('mensaje','La Tienda se registro correctamente');


      //Redicreccionarl al usuario
      return redirect()->route('dashboard');

    }

    public function render()
    {
        return view('livewire.crear-tienda', [
          'tienda' => Tienda::all(),
      ]);
    }

    
}
