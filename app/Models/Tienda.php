<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'nit',
        'lema',
        'banner',
        'logo',
        'descripcion',
        'telefono',
        'correo',
        'departamentos',
        'municipios',
        'direccion',
        'user_id'
    ];

}
