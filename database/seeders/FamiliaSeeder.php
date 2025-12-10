<?php

namespace Database\Seeders;

use App\Models\Seña;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamiliaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seña::insert([
            ['nombre' => 'abuelo', 'descripcion' => 'familia abuelo', 'url_img' => 'señas/familia/abuelo.gif', 'id_leccion' => 1],
            ['nombre' => 'abuela', 'descripcion' => 'familia abuela', 'url_img' => 'señas/familia/abuela.gif', 'id_leccion' => 1],
            ['nombre' => 'hermano', 'descripcion' => 'familia hermano', 'url_img' => 'señas/familia/hermano.gif', 'id_leccion' => 1],
            ['nombre' => 'hermana', 'descripcion' => 'familia hermana', 'url_img' => 'señas/familia/hermana.gif', 'id_leccion' => 1],
            ['nombre' => 'mamá', 'descripcion' => 'familia mamá', 'url_img' => 'señas/familia/mama.gif', 'id_leccion' => 1],
            ['nombre' => 'papa', 'descripcion' => 'familia papa', 'url_img' => 'señas/familia/papa.gif', 'id_leccion' => 1],
            ['nombre' => 'niño', 'descripcion' => 'familia niño', 'url_img' => 'señas/familia/niño.gif', 'id_leccion' => 1],
            ['nombre' => 'niña', 'descripcion' => 'familia niña', 'url_img' => 'señas/familia/niña.gif', 'id_leccion' => 1],
            ['nombre' => 'primo', 'descripcion' => 'familia primo', 'url_img' => 'señas/familia/primo.gif', 'id_leccion' => 1],
            ['nombre' => 'prima', 'descripcion' => 'familia prima', 'url_img' => 'señas/familia/prima.gif', 'id_leccion' => 1],
            ['nombre' => 'sobrina', 'descripcion' => 'familia sobrina', 'url_img' => 'señas/familia/sobrina.gif', 'id_leccion' => 1],
            ['nombre' => 'sobrino', 'descripcion' => 'familia sobrino', 'url_img' => 'señas/familia/sobrino.gif', 'id_leccion' => 1],
            ['nombre' => 'suegra', 'descripcion' => 'familia suegra', 'url_img' => 'señas/familia/suegra.gif', 'id_leccion' => 1],
            ['nombre' => 'suegro', 'descripcion' => 'familia suegro', 'url_img' => 'señas/familia/suegro.gif', 'id_leccion' => 1],
            ['nombre' => 'tío', 'descripcion' => 'familia tío', 'url_img' => 'señas/familia/tío.gif', 'id_leccion' => 1],
            ['nombre' => 'tía', 'descripcion' => 'familia tía', 'url_img' => 'señas/familia/tía.gif', 'id_leccion' => 1],
        ]);
    }
}
