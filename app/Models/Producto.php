<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'codigo_referencia',
        'ubicacion_bodega',
        'porcentaje_descuento',
        'precio_final',
        'descripcion_modelo',
        'publicado',
        'subcategoria_id',
        'coleccion_id',
        'sub_categoria',
        'categoria'
    ];
}
