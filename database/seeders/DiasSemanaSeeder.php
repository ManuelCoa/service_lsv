<?php

namespace Database\Seeders;

use App\Models\Seña;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiasSemanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Seña::insert([
            ['nombre' => 'dias de la semana', 'descripcion' => 'día lunes', 'url_img' => 'señas/dias_semana/diasSemana.gif', 'id_leccion' => 1],
            ['nombre' => 'lunes', 'descripcion' => 'día lunes', 'url_img' => 'señas/dias_semana/lunes.gif', 'id_leccion' => 1],
            ['nombre' => 'martes', 'descripcion' => 'día martes', 'url_img' => 'señas/dias_semana/martes.gif', 'id_leccion' => 1],
            ['nombre' => 'miércoles', 'descripcion' => 'día miércoles', 'url_img' => 'señas/dias/miércoles.gif', 'id_leccion' => 1],
            ['nombre' => 'jueves', 'descripcion' => 'día jueves', 'url_img' => 'señas/dias_semana/jueves.gif', 'id_leccion' => 1],
            ['nombre' => 'viernes', 'descripcion' => 'día viernes', 'url_img' => 'señas/dias_semana/viernes.gif', 'id_leccion' => 1],
            ['nombre' => 'sábado', 'descripcion' => 'día sábado', 'url_img' => 'señas/dias_semana/sábado.gif', 'id_leccion' => 1],
            ['nombre' => 'domingo', 'descripcion' => 'día domingo', 'url_img' => 'señas/dias_semana/domingo.gif', 'id_leccion' => 1],
        ]);
    }
}
