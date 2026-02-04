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
            [
                'nombre' => 'Números', 
                'descripcion' => 'El puño se abre, extendido los dedos uno a la vez.', 
                'url_img' => 'señas/numeros/numeros.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '1', 
                'descripcion' => 'Puño cerrado con el dedo índice extendido.',
                'url_img' => 'señas/numeros/1.jpg', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '2', 
                'descripcion' => 'Extiende índice y medio.', 
                'url_img' => 'señas/numeros/2.jpg', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '3', 
                'descripcion' => 'Extiende índice, medio y pulgar.', 
                'url_img' => 'señas/numeros/3.jpg', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '4', 
                'descripcion' => 'Extiende los cuatro dedos.', 
                'url_img' => 'señas/numeros/4.jpg', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '5', 
                'descripcion' => 'Mano abierta.', 
                'url_img' => 'señas/numeros/5.jpg', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '6', 
                'descripcion' => 'El Pulgar toca el dedo meñique.',
                'url_img' => 'señas/numeros/6.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '7', 
                'descripcion' => 'El pulgar toca el dedo anular.',
                'url_img' => 'señas/numeros/7.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '8', 
                'descripcion' => 'El pulgar toca el dedo medio.',
                'url_img' => 'señas/numeros/8.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '9', 
                'descripcion' => 'El pulgar toca el dedo índice.',
                'url_img' => 'señas/numeros/9.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '10',
                'descripcion' => 'Con pulgar hacia arriba y oscilación lateral.', 
                'url_img' => 'señas/numeros/10.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '11',
                'descripcion' => 'Dedo índice extendido verticalmente, seguido de movimiento del pulgar hacia arriba con oscilación lateral.', 
                'url_img' => 'señas/numeros/11.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '12',
                'descripcion' => 'Dedos índice y medio extendidos, seguido de movimiento del pulgar hacia arriba con oscilación lateral.',
                'url_img' => 'señas/numeros/12.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '13',
                'descripcion' => 'Dedos índice, medio y pulgar extendidos, seguido de movimiento del pulgar hacia arriba con oscilación lateral.', 
                'url_img' => 'señas/numeros/13.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '14',
                'descripcion' => 'Cuatro dedos extendidos, seguido de movimiento del pulgar hacia arriba con oscilación lateral.',
                'url_img' => 'señas/numeros/14.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '15',
                'descripcion' => 'Mano abierta, seguido de movimiento del pulgar hacia arriba con oscilación lateral.',
                'url_img' => 'señas/numeros/15.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '16',
                'descripcion' => 'Pulgar toca el dedo meñique, seguido de movimiento del pulgar hacia arriba con oscilación lateral.', 
                'url_img' => 'señas/numeros/16.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '17',
                'descripcion' => 'El pulgar toca el dedo anular, seguido de movimiento del pulgar hacia arriba con oscilación lateral.',
                'url_img' => 'señas/numeros/17.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '18',
                'descripcion' => 'El pulgar toca el dedo medio, seguido de movimiento del pulgar hacia arriba con oscilación lateral.',
                'url_img' => 'señas/numeros/18.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '19',
                'descripcion' => 'El pulgar toca el dedo índice, seguido de movimiento del pulgar hacia arriba con oscilación lateral.',
                'url_img' => 'señas/numeros/19.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '20',
                'descripcion' => "Extiende el dedo índice y medio, seguido de la mano en forma de 'O'.", 
                'url_img' => 'señas/numeros/20.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '30',
                'descripcion' => "Dedos índice, medio y pulgar extendidos, seguido de la mano en forma de 'O'.", 
                'url_img' => 'señas/numeros/30.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '40',
                'descripcion' => "Extiende los cuatro dedos, seguido de la mano en forma de 'O'.", 
                'url_img' => 'señas/numeros/40.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '50',
                'descripcion' => "Mano abierta, seguido de la mano en forma de 'O'.", 
                'url_img' => 'señas/numeros/50.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '60',
                'descripcion' => "Pulgar toca dedo meñique, seguido de la mano en forma de 'O'", 
                'url_img' => 'señas/numeros/60.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '70',
                'descripcion' => "Pulgar toca el dedo anular, seguido de la mano en forma de 'O'.",
                'url_img' => 'señas/numeros/70.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '80',
                'descripcion' => "Pulgar toca el dedo medio, seguido de la mano en forma de 'O'.",
                'url_img' => 'señas/numeros/80.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '90',
                'descripcion' => "Pulgar toca el dedo índice, seguido de la mano en forma de 'O'.",
                'url_img' => 'señas/numeros/90.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => '100',
                'descripcion' => "Combine las señas para 'UNO' 'CERO' 'CERO' o 'UNO' 'C' (cien).", 
                'url_img' => 'señas/numeros/100.gif', 
                'id_leccion' => 1
            
            ],
            [
                'nombre' => '1000', 
                'descripcion' => "La mano 'M' toca la otra palma", 
                'url_img' => 'señas/numeros/1000.gif', 
                'id_leccion' => 1
            
            ],
        ]);
    }
}
