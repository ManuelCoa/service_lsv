<?php

namespace Database\Seeders;

use App\Models\Seña;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seña::insert([
            [
                'nombre' => 'Blanco', 
                'descripcion' => 'El puño se mueve del pecho hacia afuera terminando con la mano abierta.', 
                'url_img' => 'señas/colores/blanco.gif', 'id_leccion' => 1],
            [
                'nombre' => 'Amarillo', 
                'descripcion' => 'El pulgar y el índice pegados, se mueven hacia arriba en la mejilla.', 
                'url_img' => 'señas/colores/amarillo.gif', 'id_leccion' => 1],
            [
                'nombre' => 'Azul', 
                'descripcion' => 'El dedo medio se desliza sobre el pulgar a nivel de la mejilla.', 
                'url_img' => 'señas/colores/azul.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Colores', 
                'descripcion' => 'Los dedos índices circulan alternadamente en frente de la boca.', 
                'url_img' => 'señas/colores/colores.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Gris', 
                'descripcion' => 'El índice y el dedo medio pegan ligeramente el pulgar varias veces.', 
                'url_img' => 'señas/colores/gris.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Marrón', 
                'descripcion' => 'El índice y dedo medio forman círculo pequeño debajo de la barbilla. Movimiento circular fluido sin contacto.', 
                'url_img' => 'señas/colores/marron.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Anaranjado', 
                'descripcion' => "El pulgar de la mano 'A' se mueve hacia abajo en el otro antebrazo.", 
                'url_img' => 'señas/colores/naranja.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Negro', 
                'descripcion' => 'color negro', 
                'url_img' => 'señas/colores/negro.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Rojo', 
                'descripcion' => 'El índice se mueve hacia abajo sobre los labios varias veces.', 
                'url_img' => 'señas/colores/rojo.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Rosado', 
                'descripcion' => "La mano 'X' circula en la mejilla.", 
                'url_img' => 'señas/colores/rosado.gif', 
                'id_leccion' => 1
            ],
            [
                'nombre' => 'Verde', 
                'descripcion' => 'El pulgar y el índice se pegan y tocan los dientes.', 
                'url_img' => 'señas/colores/verde.gif', 
                'id_leccion' => 1
            ],
        ]);
    }
}
