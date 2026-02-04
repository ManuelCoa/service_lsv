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
                'descripcion' => 'El puño toca la barbilla varias veces, seguido de un roce suave del dedo índice y pulgar sobre la nariz.', 
                'url_img' => 'señas/familia/abuelo.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Abuela', 
                'descripcion' => 'El puño toca la barbilla varias veces, seguido de un roce suave del dedo índice y pulgar sobre la oreja.', 
                'url_img' => 'señas/familia/abuela.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Hermano', 
                'descripcion' => 'El dedo índice se desliza sobre el antebrazo desde la muñeca hacia arriba.', 
                'url_img' => 'señas/familia/hermano.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Hermana', 
                'descripcion' => ' El dedo índice se desliza sobre el antebrazo desde la muñeca hacia arriba, seguido de un roce suave del dedo índice y pulgar sobre la oreja.', 
                'url_img' => 'señas/familia/hermana.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Mamá', 
                'descripcion' => "La mano 'U' toca un lado de la boca y después el otro.", 
                'url_img' => 'señas/familia/mama.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Papá', 
                'descripcion' => "La mano 'H' toca la barbilla y después la frente.", 
                'url_img' => 'señas/familia/papa.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Niño', 
                'descripcion' => "La mano 'H' se desliza hacia adelante sobre la otra mano 'H'", 
                'url_img' => 'señas/familia/niño.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Niña', 
                'descripcion' => "La mano 'H' se desliza hacia adelante sobre la otra mano 'H', seguido de un roce suave del dedo índice y pulgar sobre la oreja.", 
                'url_img' => 'señas/familia/niña.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Primo', 
                'descripcion' => 'El dedo índice se mueve de un lado a otra sobre el otro dedo índice.', 
                'url_img' => 'señas/familia/primo.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Prima', 
                'descripcion' => 'El dedo índice se mueve de un lado a otra sobre el otro dedo índice,  seguido de un roce suave del dedo índice y pulgar sobre la oreja.', 
                'url_img' => 'señas/familia/prima.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Sobrina', 
                'descripcion' => 'La palma abierta de la mano derecha toca suavemente el centro del pecho, seguido de un roce suave de las yemas del dedo índice y pulgar sobre la oreja.', 
                'url_img' => 'señas/familia/sobrina.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Sobrino', 
                'descripcion' => 'La palma abierta de la mano derecha toca suavemente el centro del pecho, seguido de un roce suave de las yemas del dedo índice y pulgar sobre la punta de la nariz.', 
                'url_img' => 'señas/familia/sobrino.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Suegra', 
                'descripcion' => "La mano 'F' toca la barbilla, seguido de un roce suave del dedo índice y pulgar sobre la oreja.", 
                'url_img' => 'señas/familia/suegra.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Suegro', 
                'descripcion' => "La mano 'F' toca la barbilla, seguido de un roce suave del dedo índice y pulgar sobre la punta de la nariz.",
                'url_img' => 'señas/familia/suegro.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Tío', 
                'descripcion' => 'El dedo índice toca varias veces el otro dedo índice.', 
                'url_img' => 'señas/familia/tio.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Tía', 
                'descripcion' => 'El dedo índice toca varias veces el otro dedo índice, seguido de un roce suave del dedo índice y pulgar sobre la oreja.', 
                'url_img' => 'señas/familia/tia.gif', 
                'id_leccion' => 1
            ],
        ]);
    }
}
