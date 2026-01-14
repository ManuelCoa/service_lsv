<?php

namespace Database\Seeders;

use App\Models\Seña;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MesesAñoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seña::insert([
            ['nombre' => 'enero', 'descripcion' => 'mes enero', 'url_img' => 'c', 'id_leccion' => 1],
            ['nombre' => 'febrero', 'descripcion' => 'mes febrero', 'url_img' => 'señas/meses_año/febrero.gif', 'id_leccion' => 1],
            ['nombre' => 'marzo', 'descripcion' => 'mes marzo', 'url_img' => 'señas/meses_año/marzo.gif', 'id_leccion' => 1],
            ['nombre' => 'abril', 'descripcion' => 'mes abril', 'url_img' => 'señas/meses_año/abril.gif', 'id_leccion' => 1],
            ['nombre' => 'mayo', 'descripcion' => 'mes mayo', 'url_img' => 'señas/meses_año/mayo.gif', 'id_leccion' => 1],
            ['nombre' => 'junio', 'descripcion' => 'mes junio', 'url_img' => 'señas/meses_año/junio.gif', 'id_leccion' => 1],
            ['nombre' => 'julio', 'descripcion' => 'mes julio', 'url_img' => 'señas/meses_año/julio.gif', 'id_leccion' => 1],
            ['nombre' => 'agosto', 'descripcion' => 'mes agosto', 'url_img' => 'señas/meses_año/agosto.gif', 'id_leccion' => 1],
            ['nombre' => 'septiembre', 'descripcion' => 'mes septiembre', 'url_img' => 'señas/meses_año/septiembre.gif', 'id_leccion' => 1],
            ['nombre' => 'octubre', 'descripcion' => 'mes octubre', 'url_img' => 'señas/meses_año/octubre.gif', 'id_leccion' => 1],
            ['nombre' => 'noviembre', 'descripcion' => 'mes noviembre', 'url_img' => 'señas/meses_año/noviembre.gif', 'id_leccion' => 1],
            ['nombre' => 'diciembre', 'descripcion' => 'mes diciembre', 'url_img' => 'señas/meses_año/diciembre.gif', 'id_leccion' => 1],
        ]);
    }
}
