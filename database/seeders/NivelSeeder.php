<?php

namespace Database\Seeders;

use App\Models\Nivele;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Nivele::factory()->count(5)->create();
    }
}
