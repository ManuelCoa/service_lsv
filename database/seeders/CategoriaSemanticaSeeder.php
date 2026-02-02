<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoriaSemantica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSemanticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['nombre' => 'Abecedario'],
            ['nombre' => 'Números'], 
            ['nombre' => 'Días de la semana'],
            ['nombre' => 'Colores'],
            ['nombre' => 'Meses del año'],
            ['nombre' => 'Familia'],
            ['nombre' => 'Vocabulario general'],
        ];

        CategoriaSemantica::insert($categorias);
    }
}
