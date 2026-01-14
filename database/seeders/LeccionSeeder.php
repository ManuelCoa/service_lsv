<?php

namespace Database\Seeders;

use App\Models\Leccione;
use Illuminate\Database\Seeder;

class LeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Leccione::insert([
            //nivel 1
            [
            'titulo' => 'Abecedario',
            'id_nivel' => 01,
            ],
            [
            'titulo' => 'Numeros',
            'id_nivel' => 01,
            ],
            [
            'titulo' => 'Dias de la semana',
            'id_nivel' => 01,
            ],
            //nivel 2
            [
            'titulo' => 'meses del año',
            'id_nivel' => 02,
            ],
            [
            'titulo' => 'colores',
            'id_nivel' => 02,
            ],

            //nivel 3
            [
            'titulo' => 'familia',
            'id_nivel' => 03,
            ],

        
        
        ]);
    }
}
