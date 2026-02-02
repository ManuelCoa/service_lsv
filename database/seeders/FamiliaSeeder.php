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
            [
                'nombre' => 'Abuelo', 
                'descripcion' => 'familia abuelo', 
                'url_img' => 'señas/familia/abuelo.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Abuela', 
                'descripcion' => 'familia abuela', 
                'url_img' => 'señas/familia/abuela.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Hermano', 'descripcion' => 
                'familia hermano', 'url_img' => 'señas/familia/hermano.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Hermana', 
                'descripcion' => 'familia hermana', 
                'url_img' => 'señas/familia/hermana.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Mamá', 
                'descripcion' => 'familia mamá', 
                'url_img' => 'señas/familia/mama.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Papá', 
                'descripcion' => 'familia papa', 
                'url_img' => 'señas/familia/papa.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Niño', 
                'descripcion' => 'familia niño', 
                'url_img' => 'señas/familia/niño.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Niña', 
                'descripcion' => 'familia niña', 
                'url_img' => 'señas/familia/niña.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Primo', 
                'descripcion' => 'familia primo', 
                'url_img' => 'señas/familia/primo.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Prima', 
                'descripcion' => 'familia prima', 
                'url_img' => 'señas/familia/prima.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Sobrina', 
                'descripcion' => 'familia sobrina', 
                'url_img' => 'señas/familia/sobrina.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Sobrino', 
                'descripcion' => 'familia sobrino', 
                'url_img' => 'señas/familia/sobrino.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Suegra', 
                'descripcion' => 'familia suegra', 
                'url_img' => 'señas/familia/suegra.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Suegro', 
                'descripcion' => 'familia suegro', 
                'url_img' => 'señas/familia/suegro.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Tío', 
                'descripcion' => 'familia tío', 
                'url_img' => 'señas/familia/tio.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Tía', 
                'descripcion' => 'familia tía', 
                'url_img' => 'señas/familia/tia.gif', 
                'id_leccion' => 1
            ],
        ]);
    }
}
