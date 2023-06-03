<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\TallasController;
use App\Http\Controllers\TiendasController;
use App\Http\Controllers\CrearsubController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ColeccionController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\VertiendasController;
use App\Http\Controllers\CreardetailController;
use App\Http\Controllers\ProductdetailController;
use App\Http\Controllers\CrearproductosController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductodetailController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VerarticuloController;
use App\Http\Controllers\VerropaController;
use App\View\Components\ListBusqueda;
use App\View\Components\ListCategory;
use App\View\Components\Slidercolection;
use App\View\Components\SliderOulet;

Route::get('/', [IndexController::class, 'index'], function () {
    return view('welcome');
});

/* Route::get('/', function () { return view('welcome');}); */



Route::get('/dashboard',[TiendasController::class,'index'])->middleware(['auth','verified'])->name('dashboard');

Route::get('/panel/crear-tienda',[TiendasController::class,'create'])->middleware(['auth','verified'])->name('crear-tienda');

Route::get('/panel/ver-tienda/{tienda}',[VertiendasController::class,'show'])->middleware(['auth','verified'])->name('ver-tienda');

Route::get('/panel/coleccion/{tienda}',[ColeccionController::class,'create'])->middleware(['auth','verified'])->name('crear-coleccion');

Route::get('/panel/ver-productos/{coleccion}',[productosController::class,'show'])->middleware(['auth','verified'])->name('ver-productos');

Route::get('/panel/crear-categoria/{coleccion}',[CategoriaController::class,'create'])->middleware(['auth','verified'])->name('crear-categoria');

Route::get('/panel/crear-subca/{categoria}',[CrearsubController::class,'create'])->middleware(['auth','verified'])->name('crear-subca');

Route::get('/panel/crear-productos/{subcategoria}/{coleccion}/{subcategorys}/{categorys}',[CrearproductosController::class,'store'])->middleware(['auth','verified'])->name('crear-productos');

Route::get('/panel/crear-detail/{producto}',[CreardetailController::class,'create'])->middleware(['auth','verified'])->name('crear-detail');

/* ----------------------------------------------------Registro de las tallas------------------------------------------------------------ */
Route::post('/panel/crear-detail/{producto}/{imgcolor}',[TallasController::class,'create'])->middleware(['auth','verified'])->name('crear-tallas');


/* 
Route::post('/panel/producto-detail',[productosController::class,'create'])->middleware(['auth','verified'])->name('crear-carrito'); */



                                             /*     pagina principal cleite */
Route::get('/cliente/ver-articulo/{category}/{subcategory}',[VerarticuloController::class,'store'])->name('ver-articulo');
Route::get('/cliente/producto-detail/{producto}/{img}',[ProductodetailController::class,'index'])->name('producto-detail');

                                             /*      buscador */
Route::GET('/cliente/busqueda',[SearchController::class,'index'])->name('buscar');


require __DIR__.'/auth.php';

