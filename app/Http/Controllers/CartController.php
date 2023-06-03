<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    

    public function create()
    {
        return view('cliente.producto-detail');
    }



}
