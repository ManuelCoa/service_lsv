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
                'descripcion' => 'día lunes', 
                'url_img' => 'señas/dias_semana/diasSemana.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Lunes', 
                'descripcion' => 'La mano con el dedo índice y el meñique extendidos se mueve hacia adelante.', 
                'url_img' => 'señas/dias_semana/lunes.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Martes', 
                'descripcion' => 'Las manos tocan entre los ángulos varias veces.', 
                'url_img' => 'señas/dias_semana/martes.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Miércoles', 
                'descripcion' => 'Las manos curvas se mueven alternadamente hacia arriba y abajo en el pecho.', 
                'url_img' => 'señas/dias_semana/miercoles.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Jueves', 
                'descripcion' => 'Las manos abiertas, palma abajo, se mueven alternadamente hacia adelante y atrás.',
                'url_img' => 'señas/dias_semana/jueves.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Viernes', 
                'descripcion' => "Los de dos de la mano 'V' se doblan mientras el dedo índice de la otra mano toca el antebrazo.", 
                'url_img' => 'señas/dias_semana/viernes.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Sábado', 
                'descripcion' => "El pulgar de la mano 'A' se mueve hacia abajo sobre la mejilla.", 
                'url_img' => 'señas/dias_semana/sabado.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Domingo', 
                'descripcion' => "El pulgar de la mano 'A' se mueve en forma de una cruz en la frente.", 
                'url_img' => 'señas/dias_semana/domingo.gif', 
                'id_leccion' => 1
            ],
        ]);
    }
}
