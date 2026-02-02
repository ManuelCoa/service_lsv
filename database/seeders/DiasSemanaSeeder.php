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
            [
                'nombre' => 'Días de la semana', 
                'descripcion' => 'día lunes', 'url_img' => 'señas/dias_semana/diasSemana.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Lunes', 
                'descripcion' => 'día lunes', 
                'url_img' => 'señas/dias_semana/lunes.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Martes', 
                'descripcion' => 'día martes', 
                'url_img' => 'señas/dias_semana/martes.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Miércoles', 
                'descripcion' => 'día miércoles', 
                'url_img' => 'señas/dias_semana/miercoles.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Jueves', 
                'descripcion' => 'día jueves', 
                'url_img' => 'señas/dias_semana/jueves.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Viernes', 
                'descripcion' => 'día viernes', 
                'url_img' => 'señas/dias_semana/viernes.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Sábado', 
                'descripcion' => 'día sábado', 
                'url_img' => 'señas/dias_semana/sabado.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Domingo', 
                'descripcion' => 'día domingo', 
                'url_img' => 'señas/dias_semana/domingo.gif', 
                'id_leccion' => 1
            ],
        ]);
    }
}
