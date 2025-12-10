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
         CategoriaSemantica::insert([
            ['nombre' => 'Educacion'],
        ]);
    }
}
