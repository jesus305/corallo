<?php

namespace App\Http\Livewire;

use App\Models\Tienda;
use Livewire\Component;
use App\Models\Coleccion;

class VerTienda extends Component
{

/*     public $tienda;
    public $coleccion; */

/*     public function mount(Tienda $tienda)
    {
        $this->tienda = $tienda->id;
        dd($tienda->id);
    } */

    public function render(Tienda $tienda)
    {


        
        return view('livewire.ver-tienda');

    }    
}
