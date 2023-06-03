<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imgcolor extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'color',
        'img1',
        'img2',
        'img3',
        'img4',
        'publicado',
        'producto_id',
        
        
    ];


}
