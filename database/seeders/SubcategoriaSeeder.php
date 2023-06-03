<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategoriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('listadosubcategorias')->insert([
            'nombre' => 'tops',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('listadosubcategorias')->insert([
            'nombre' => 'camisas',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('listadosubcategorias')->insert([
            'nombre' => 'camiseros',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('listadosubcategorias')->insert([
            'nombre' => 'blusas',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('listadosubcategorias')->insert([
            'nombre' => 'bodys',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('listadosubcategorias')->insert([
            'nombre' => 'conjuntos',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('listadosubcategorias')->insert([
            'nombre' => 'conjuntos',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('listadosubcategorias')->insert([
            'nombre' => 'vestidos',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('listadosubcategorias')->insert([
            'nombre' => 'bragas',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('listadosubcategorias')->insert([
            'nombre' => 'faldas',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('listadosubcategorias')->insert([
            'nombre' => 'pantalones',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('listadosubcategorias')->insert([
            'nombre' => 'shorts',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('listadosubcategorias')->insert([
            'nombre' => 'sueter',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('listadosubcategorias')->insert([
            'nombre' => 'blazer',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('listadosubcategorias')->insert([
            'nombre' => 'franelas básicas',
            'categoria' => 'ropa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        
        
    }


    
}
