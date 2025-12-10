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
            ['nombre' => 'enero', 'descripcion' => 'mes enero', 'url_img' => 'señas/meses_año/enero.jpg', 'id_leccion' => 1],
            ['nombre' => 'febrero', 'descripcion' => 'mes febrero', 'url_img' => 'señas/meses_año/febrero.jpg', 'id_leccion' => 1],
            ['nombre' => 'marzo', 'descripcion' => 'mes marzo', 'url_img' => 'señas/meses_año/marzo.jpg', 'id_leccion' => 1],
            ['nombre' => 'abril', 'descripcion' => 'mes abril', 'url_img' => 'señas/meses_año/abril.jpg', 'id_leccion' => 1],
            ['nombre' => 'mayo', 'descripcion' => 'mes mayo', 'url_img' => 'señas/meses_año/mayo.jpg', 'id_leccion' => 1],
            ['nombre' => 'junio', 'descripcion' => 'mes junio', 'url_img' => 'señas/meses_año/junio.jpg', 'id_leccion' => 1],
            ['nombre' => 'julio', 'descripcion' => 'mes julio', 'url_img' => 'señas/meses_año/julio.jpg', 'id_leccion' => 1],
            ['nombre' => 'agosto', 'descripcion' => 'mes agosto', 'url_img' => 'señas/meses_año/agosto.jpg', 'id_leccion' => 1],
            ['nombre' => 'septiembre', 'descripcion' => 'mes septiembre', 'url_img' => 'señas/meses_año/septiembre.jpg', 'id_leccion' => 1],
            ['nombre' => 'octubre', 'descripcion' => 'mes octubre', 'url_img' => 'señas/meses_año/octubre.jpg', 'id_leccion' => 1],
            ['nombre' => 'noviembre', 'descripcion' => 'mes noviembre', 'url_img' => 'señas/meses_año/noviembre.jpg', 'id_leccion' => 1],
            ['nombre' => 'diciembre', 'descripcion' => 'mes diciembre', 'url_img' => 'señas/meses_año/diciembre.jpg', 'id_leccion' => 1],
        ]);
    }
}
