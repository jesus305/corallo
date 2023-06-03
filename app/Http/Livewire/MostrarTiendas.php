<?php

namespace App\Http\Livewire;

use App\Models\Tienda;
use Livewire\Component;

class MostrarTiendas extends Component
{



    
    public function render()
    {
        $tiendas = Tienda::where('user_id',auth()->user()->id)->paginate(10);

        return view('livewire.mostrar-tiendas',[
            'tiendas' => $tiendas
        ]);
    }



    
}
