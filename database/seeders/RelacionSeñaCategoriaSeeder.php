<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RelacionSeñaCategoria;

class RelacionSeñaCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RelacionSeñaCategoria::insert([
                //['id_seña' => 57, 'id_categoria' => 1],
                //['id_seña' => 58, 'id_categoria' => 1],
                //['id_seña' => 59, 'id_categoria' => 1],
                ['id_seña' => 1, 'id_categoria' => 1],
                ['id_seña' => 2, 'id_categoria' => 1],
                ['id_seña' => 3, 'id_categoria' => 1],
                ['id_seña' => 4, 'id_categoria' => 1],
                ['id_seña' => 5, 'id_categoria' => 1],
                ['id_seña' => 6, 'id_categoria' => 1],
                ['id_seña' => 7, 'id_categoria' => 1],
                ['id_seña' => 8, 'id_categoria' => 1],
                ['id_seña' => 9, 'id_categoria' => 1],
                ['id_seña' => 10, 'id_categoria' => 1],
                ['id_seña' => 11, 'id_categoria' => 1],
                ['id_seña' => 12, 'id_categoria' => 1],
                ['id_seña' => 13, 'id_categoria' => 1],
                ['id_seña' => 14, 'id_categoria' => 1],
                ['id_seña' => 15, 'id_categoria' => 1],
                ['id_seña' => 16, 'id_categoria' => 1],
                ['id_seña' => 17, 'id_categoria' => 1],
                ['id_seña' => 18, 'id_categoria' => 1],
                ['id_seña' => 19, 'id_categoria' => 1],
                ['id_seña' => 20, 'id_categoria' => 1],
                ['id_seña' => 21, 'id_categoria' => 1],
                ['id_seña' => 22, 'id_categoria' => 1],
                ['id_seña' => 23, 'id_categoria' => 1],
                ['id_seña' => 24, 'id_categoria' => 1],
                ['id_seña' => 25, 'id_categoria' => 1],
        ]);
    }
}
