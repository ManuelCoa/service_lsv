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
            [
                'nombre' => 'Enero', 
                'descripcion' => 'mes enero', 
                'url_img' => 'señas/meses_año/enero.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Febrero', 
                'descripcion' => 'mes febrero', 
                'url_img' => 'señas/meses_año/febrero.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Marzo', 
                'descripcion' => 'mes marzo', 
                'url_img' => 'señas/meses_año/marzo.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Abril', 
                'descripcion' => 'mes abril', 
                'url_img' => 'señas/meses_año/abril.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Mayo', 
                'descripcion' => 'mes mayo', 
                'url_img' => 'señas/meses_año/mayo.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Junio', 
                'descripcion' => 'mes junio', 
                'url_img' => 'señas/meses_año/junio.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Julio', 
                'descripcion' => 'mes julio', 
                'url_img' => 'señas/meses_año/julio.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Agosto', 
                'descripcion' => 'mes agosto', 
                'url_img' => 'señas/meses_año/agosto.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Septiembre', 
                'descripcion' => 'mes septiembre', 
                'url_img' => 'señas/meses_año/septiembre.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Octubre', 
                'descripcion' => 'mes octubre', 
                'url_img' => 'señas/meses_año/octubre.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Doviembre', 
                'descripcion' => 'mes noviembre', 
                'url_img' => 'señas/meses_año/noviembre.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Diciembre', 
                'descripcion' => 'mes diciembre', 
                'url_img' => 'señas/meses_año/diciembre.gif', 
                'id_leccion' => 1
            ],
        ]);
    }
}
