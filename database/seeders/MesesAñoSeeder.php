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
                'descripcion' => "La mano 'F' toca el pecho a la altura del hombro opuesto.", 
                'url_img' => 'señas/meses_año/enero.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Febrero', 
                'descripcion' => 'El dedo medio de la mano abiertatoca la frente y se mueve unpoco de un lado a otro.', 
                'url_img' => 'señas/meses_año/febrero.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Marzo', 
                'descripcion' => 'Las manos abiertas se mueven de un lado a otro en frente del cuerpo.', 
                'url_img' => 'señas/meses_año/marzo.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Abril', 
                'descripcion' => "La seña de 'JESÚS'.", 
                'url_img' => 'señas/meses_año/abril.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Mayo', 
                'descripcion' => 'La mano cerrada se mueve hacia arriba a través de la otra mano terminando abierta.', 
                'url_img' => 'señas/meses_año/mayo.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Junio', 
                'descripcion' => "Formar las letras 'J' y 'N'.", 
                'url_img' => 'señas/meses_año/junio.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Julio', 
                'descripcion' => "Formar las letras 'J' y 'L'.", 
                'url_img' => 'señas/meses_año/julio.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Agosto', 
                'descripcion' => "Las manos 'X', una sobre a la otra, se mueven de un lado a otro con movimientos pequeños.", 
                'url_img' => 'señas/meses_año/agosto.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Septiembre', 
                'descripcion' => "La mano 'F' toca la otra mano 'F'.", 
                'url_img' => 'señas/meses_año/septiembre.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Octubre', 
                'descripcion' => 'El dedo índice (o la mano abierta) se mueve de un lado a otro en la barbilla.', 
                'url_img' => 'señas/meses_año/octubre.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Noviembre', 
                'descripcion' => "La mano 'N' se mueve hacia abajo dos veces.", 
                'url_img' => 'señas/meses_año/noviembre.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Diciembre', 
                'descripcion' => 'La mano curva se mueve de la barbilla hacia abajo.', 
                'url_img' => 'señas/meses_año/diciembre.gif', 
                'id_leccion' => 1
            ],
        ]);
    }
}
