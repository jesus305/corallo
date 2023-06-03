<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Listadosubcategoria;

class CrearSubcategoria extends Component
{

    public $nombre;
    public $categoria;
    public $categoria_nombre;
    public $categoria_2;

    protected $rules = [
        'nombre' => 'required|string',
    ];

    public function mount(Categoria $categoria)
    {
        $this->categoria = $categoria->id;
        $this->categoria_nombre = $categoria->nombre;
    }
    

    public function CrearSubcategoria()
    {

        $var = $this->categoria;
        $category_nombre = $this->categoria_nombre;


        $datos = $this->validate();  



        //crear Categoria
        Subcategoria::create([
            'nombre'       => $datos['nombre'],
            'puesto'       => 1,
            'categoria_id' => $var,
            'categoria_nombre'=> $category_nombre,

        ]);

        
      session()->flash('mensaje','La Subcategoría se registro con exito');


      //Redicreccionarl al usuario
      return redirect()->to(url()->previous());

    }    

    public function render()
    {

        $listasubca = Listadosubcategoria::all(); 

        return view('livewire.crear-subcategoria',[
            'listadosubca' => $listasubca
        ]);


    }


}
