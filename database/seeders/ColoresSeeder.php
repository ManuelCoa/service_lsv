<?php

namespace Database\Seeders;

use App\Models\Seña;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seña::insert([
            [
                'nombre' => 'Blanco', 
                'descripcion' => 'color blanco', 
                'url_img' => 'señas/colores/blanco.gif', 'id_leccion' => 1],
            [
                'nombre' => 'Amarillo', 
                'descripcion' => 'color amarillo', 
                'url_img' => 'señas/colores/amarillo.gif', 'id_leccion' => 1],
            [
                'nombre' => 'Azul', 
                'descripcion' => 'color azul', 
                'url_img' => 'señas/colores/azul.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Colores', 
                'descripcion' => 'color colores', 
                'url_img' => 'señas/colores/colores.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Gris', 
                'descripcion' => 'color gris', 
                'url_img' => 'señas/colores/gris.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Marrón', 
                'descripcion' => 'color marron', 
                'url_img' => 'señas/colores/marron.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Anaranjado', 
                'descripcion' => 'color naranja', 
                'url_img' => 'señas/colores/naranja.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Negro', 
                'descripcion' => 'color negro', 
                'url_img' => 'señas/colores/negro.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Rojo', 
                'descripcion' => 'color rojo', 
                'url_img' => 'señas/colores/rojo.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Rosado', 
                'descripcion' => 'color rosado', 
                'url_img' => 'señas/colores/rosado.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Verde', 
                'descripcion' => 'color verde', 
                'url_img' => 'señas/colores/verde.gif', 
                'id_leccion' => 1
            ],
        ]);
    }
}
