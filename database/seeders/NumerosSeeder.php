<?php

namespace Database\Seeders;

use App\Models\Seña;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NumerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seña::insert([
            ['nombre' => 'numeros', 'descripcion' => 'número 1', 'url_img' => 'señas/numeros/numeros.gif', 'id_leccion' => 1],
            ['nombre' => '1', 'descripcion' => 'número 1', 'url_img' => 'señas/numeros/1.jpg', 'id_leccion' => 1],
            ['nombre' => '2', 'descripcion' => 'número 2', 'url_img' => 'señas/numeros/2.jpg', 'id_leccion' => 1],
            ['nombre' => '3', 'descripcion' => 'número 3', 'url_img' => 'señas/numeros/3.jpg', 'id_leccion' => 1],
            ['nombre' => '4', 'descripcion' => 'número 4', 'url_img' => 'señas/numeros/4.jpg', 'id_leccion' => 1],
            ['nombre' => '5', 'descripcion' => 'número 5', 'url_img' => 'señas/numeros/5.jpg', 'id_leccion' => 1],
            ['nombre' => '6', 'descripcion' => 'número 6', 'url_img' => 'señas/numeros/6.gif', 'id_leccion' => 1],
            ['nombre' => '7', 'descripcion' => 'número 7', 'url_img' => 'señas/numeros/7.gif', 'id_leccion' => 1],
            ['nombre' => '8', 'descripcion' => 'número 8', 'url_img' => 'señas/numeros/8.gif', 'id_leccion' => 1],
            ['nombre' => '9', 'descripcion' => 'número 9', 'url_img' => 'señas/numeros/9.gif', 'id_leccion' => 1],
            ['nombre' => '10', 'descripcion' => 'número 10', 'url_img' => 'señas/numeros/10.gif', 'id_leccion' => 1],
            ['nombre' => '11', 'descripcion' => 'número 11', 'url_img' => 'señas/numeros/11.gif', 'id_leccion' => 1],
            ['nombre' => '12', 'descripcion' => 'número 12', 'url_img' => 'señas/numeros/12.gif', 'id_leccion' => 1],
            ['nombre' => '13', 'descripcion' => 'número 13', 'url_img' => 'señas/numeros/13.gif', 'id_leccion' => 1],
            ['nombre' => '14', 'descripcion' => 'número 14', 'url_img' => 'señas/numeros/14.gif', 'id_leccion' => 1],
            ['nombre' => '15', 'descripcion' => 'número 15', 'url_img' => 'señas/numeros/15.gif', 'id_leccion' => 1],
            ['nombre' => '16', 'descripcion' => 'número 16', 'url_img' => 'señas/numeros/16.gif', 'id_leccion' => 1],
            ['nombre' => '17', 'descripcion' => 'número 17', 'url_img' => 'señas/numeros/17.gif', 'id_leccion' => 1],
            ['nombre' => '18', 'descripcion' => 'número 18', 'url_img' => 'señas/numeros/18.gif', 'id_leccion' => 1],
            ['nombre' => '19', 'descripcion' => 'número 19', 'url_img' => 'señas/numeros/19.gif', 'id_leccion' => 1],
            ['nombre' => '20', 'descripcion' => 'número 20', 'url_img' => 'señas/numeros/20.gif', 'id_leccion' => 1],
            ['nombre' => '30', 'descripcion' => 'número 30', 'url_img' => 'señas/numeros/30.gif', 'id_leccion' => 1],
            ['nombre' => '40', 'descripcion' => 'número 40', 'url_img' => 'señas/numeros/40.gif', 'id_leccion' => 1],
            ['nombre' => '50', 'descripcion' => 'número 50', 'url_img' => 'señas/numeros/50.gif', 'id_leccion' => 1],
            ['nombre' => '60', 'descripcion' => 'número 60', 'url_img' => 'señas/numeros/60.gif', 'id_leccion' => 1],
            ['nombre' => '70', 'descripcion' => 'número 70', 'url_img' => 'señas/numeros/70.gif', 'id_leccion' => 1],
            ['nombre' => '80', 'descripcion' => 'número 80', 'url_img' => 'señas/numeros/80.gif', 'id_leccion' => 1],
            ['nombre' => '90', 'descripcion' => 'número 90', 'url_img' => 'señas/numeros/90.gif', 'id_leccion' => 1],
            ['nombre' => '100', 'descripcion' => 'número 100', 'url_img' => 'señas/numeros/100.gif', 'id_leccion' => 1],
            ['nombre' => '1000', 'descripcion' => 'número 1000', 'url_img' => 'señas/numeros/1000.gif', 'id_leccion' => 1],
        ]);
    }
}
