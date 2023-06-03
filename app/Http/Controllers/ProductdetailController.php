<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Imgcolor;
use App\Models\Talla;

class ProductdetailController extends Controller
{
 
/*     protected $middleware = [
        // ...
        \Illuminate\Session\Middleware\StartSession::class,
    ];
 */


    public function index(Request $request, Producto $producto, Imgcolor $img)
    {

       $imgcolor = Imgcolor::where('producto_id',$producto->id)->latest()->paginate(); 

       $talla = Talla::where('imgcolor_id',2)->latest()->paginate(); 
       
        /* dd($producto );  */

        return view('panel.product-detail',[
            'img'        =>  $img, 
            'imgcolores' => $imgcolor,
            'producto'   =>   $producto,
            'tallas'     =>  $talla,
           /*  'miVariable' => json_encode($miVariable) */
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        dd($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function cambiarImagenPorcolor($id) 
    {
        // $collection = collect([1, 2, 3, 4]);
 
        // $filtered = $collection->filter(function ($value, $key) {
        //     return if($value === $id) {
                
        //     };
        // });
 
        //$coleccion =  $filtered->all();
        
        /* arregloPrincipal[] filtraria las imagenes que correspondan al id que viene en la fucion cambiarImagenPorcolor(id) */
        // retunr {las imganes filtradas por color}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
