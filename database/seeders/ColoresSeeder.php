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
            ['nombre' => 'blanco', 'descripcion' => 'color blanco', 'url_img' => 'señas/colores/blanco.gif', 'id_leccion' => 1],
            ['nombre' => 'amarillo', 'descripcion' => 'color amarillo', 'url_img' => 'señas/colores/amarillo.gif', 'id_leccion' => 1],
            ['nombre' => 'azul', 'descripcion' => 'color azul', 'url_img' => 'señas/colores/azul.gif', 'id_leccion' => 1],
            ['nombre' => 'colores', 'descripcion' => 'color colores', 'url_img' => 'señas/colores/colores.gif', 'id_leccion' => 1],
            ['nombre' => 'gris', 'descripcion' => 'color gris', 'url_img' => 'señas/colores/gris.gif', 'id_leccion' => 1],
            ['nombre' => 'marron', 'descripcion' => 'color marron', 'url_img' => 'señas/colores/marron.gif', 'id_leccion' => 1],
            ['nombre' => 'naranja', 'descripcion' => 'color naranja', 'url_img' => 'señas/colores/naranja.gif', 'id_leccion' => 1],
            ['nombre' => 'negro', 'descripcion' => 'color negro', 'url_img' => 'señas/colores/negro.gif', 'id_leccion' => 1],
            ['nombre' => 'rojo', 'descripcion' => 'color rojo', 'url_img' => 'señas/colores/rojo.gif', 'id_leccion' => 1],
            ['nombre' => 'rosado', 'descripcion' => 'color rosado', 'url_img' => 'señas/colores/rosado.gif', 'id_leccion' => 1],
            ['nombre' => 'verde', 'descripcion' => 'color verde', 'url_img' => 'señas/colores/verde.gif', 'id_leccion' => 1],
        ]);
    }
}
