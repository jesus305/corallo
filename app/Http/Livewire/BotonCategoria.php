<?php

namespace App\Http\Livewire;

use App\Models\Coleccion;
use Livewire\Component;



class BotonCategoria extends Component
{

    public $coleccion;


    public function mount( $coleccion)
    {
        $this->coleccion = $coleccion;
        
    }


    public function render()
    {
        return view('livewire.boton-categoria');
    }
}
