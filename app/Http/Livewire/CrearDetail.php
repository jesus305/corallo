<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Imgcolor;
use App\Models\Producto;
use Livewire\WithFileUploads;

class CrearDetail extends Component
{

    public $color;
    public $img1;
    public $img2;
    public $img3;
    public $img4;
    public $producto_id;
    public $producto;
    public $imgcolores;
    public $request;


    use WithFileUploads;

    protected $rules = [

        'color' => 'required|image',
        'img1' => 'required|image',
        'img2' => 'required|image',
        'img3' => 'NULLable',
        'img4' => 'NULLable',

    ];

    public function mount(Producto $producto)
    {
        $this->producto = $producto->id;
    }


    public function CrearDetail()
    {


        $var = $this->producto;

        $datos = $this->validate();


        /*  -------------color-------------------- */
        $color = $this->color->store('public/productos');
        $datos['color'] = str_replace('public/productos/', '', $color);


        /*  -------------img1-------------------- */
        $img1 = $this->img1->store('public/productos');
        $datos['img1'] = str_replace('public/productos/', '', $img1);


        /*  -------------img2-------------------- */
        $img2 = $this->img2->store('public/productos');
        $datos['img2'] = str_replace('public/productos/', '', $img2);

        /*  -------------img3-------------------- */
        if ($this->img3) {
            $img3 = $this->img3->store('public/productos');
            $datos['img3'] = str_replace('public/productos/', '', $img3);
        } else {
            $datos['img3'] = '';
        }

        if ($this->img4) {
            $img4 = $this->img4->store('public/productos');
            $datos['img4'] = str_replace('public/productos/', '', $img4);
        } else {
            $datos['img4'] = '';
        }

        /*  -------------img4-------------------- */


        //crear imgs
        Imgcolor::create([
            'color'        => $datos['color'],
            'img1'         => $datos['img1'],
            'img2'         => $datos['img2'],
            'img3'         => $datos['img3'],
            'img4'         => $datos['img4'],
            'producto_id'  => $var,
        ]);
        //Mensaje de confirmacion
        session()->flash('mensaje', '  imagenes y color creados Correctamente');

        //Redicreccionarl al usuario
        return redirect()->route('crear-detail', $var);
    }

    public function render()
    {


        return view('livewire.crear-detail');
    }
}
