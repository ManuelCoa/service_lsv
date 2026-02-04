<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seña;


class AbecedarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seña::insert([
            [
                'nombre' => 'A',
                'descripcion' => 'Puño cerrado con el pulgar al lado, no sobre los dedos.',
                'url_img' => 'señas/abecedario/a.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'B',
                'descripcion' => 'Mano abierta con los dedos juntos y el pulgar doblado hacia la palma.',
                'url_img' => 'señas/abecedario/b.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'C',
                'descripcion' => "Forma una 'C' con la mano, curvando los dedos.",
                'url_img' => 'señas/abecedario/c.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'D',
                'descripcion' => 'Dedo índice extendido, otros dedos doblados con el pulgar tocándolos.',
                'url_img' => 'señas/abecedario/d.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'E',
                'descripcion' => 'Todos los dedos doblados hacia la palma, pulgar sobre los dedos.',
                'url_img' => 'señas/abecedario/e.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'F',
                'descripcion' => 'Pulgar e índice se tocan formando un círculo, otros dedos extendidos.',
                'url_img' => 'señas/abecedario/f.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'G',
                'descripcion' => 'Índice y pulgar extendidos horizontalmente, otros dedos cerrados.',
                'url_img' => 'señas/abecedario/g.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'H',
                'descripcion' => 'Índice y medio extendidos horizontalmente, otros dedos cerrados.',
                'url_img' => 'señas/abecedario/h.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'I',
                'descripcion' => 'Solo el meñique extendido, otros dedos cerrados con el pulgar.',
                'url_img' => 'señas/abecedario/i.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'J',
                'descripcion' => 'Meñique extendido hacia arriba, otros dedos cerrados. Mueve la mano en un pequeño arco.',
                'url_img' => 'señas/abecedario/j.gif',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'K',
                'descripcion' => 'Índice y medio extendidos en forma de V, pulgar entre ellos, otros dedos cerrados.',
                'url_img' => 'señas/abecedario/k.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'L',
                'descripcion' => 'Índice extendido hacia arriba, pulgar extendido hacia el lado, otros dedos cerrados.',
                'url_img' => 'señas/abecedario/l.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'M',
                'descripcion' => 'Pulgar bajo los tres primeros dedos doblados, meñique cerrado.',
                'url_img' => 'señas/abecedario/m.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'N',
                'descripcion' => 'Pulgar bajo los dos primeros dedos doblados, otros dedos cerrados.',
                'url_img' => 'señas/abecedario/n.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'Ñ',
                'descripcion' => 'Como la N pero con un movimiento ondulado de la muñeca, simulando la tilde de la ñ.',
                'url_img' => 'señas/abecedario/ñ.gif',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'O',
                'descripcion' => 'Todos los dedos curvados formando un círculo, como si sostuvieras una pelota pequeña.',
                'url_img' => 'señas/abecedario/o.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'P',
                'descripcion' => 'Como K pero apuntando hacia abajo, índice y medio hacia el suelo.',
                'url_img' => 'señas/abecedario/p.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'Q',
                'descripcion' => 'Como G pero apuntando hacia abajo, índice y pulgar hacia el suelo.',
                'url_img' => 'señas/abecedario/q.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'R',
                'descripcion' => 'Índice y medio cruzados, otros dedos cerrados con el pulgar.',
                'url_img' => 'señas/abecedario/r.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'RR',
                'descripcion' => "Repite el gesto con movimiento lateral: desliza la mano ligeramente de lado a lado para indicar la doble 'rr'.",
                'url_img' => 'señas/abecedario/rr.gif',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'S',
                'descripcion' => 'Puño cerrado con el pulgar sobre los dedos, como la letra A pero con pulgar encima.',
                'url_img' => 'señas/abecedario/s.gif',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'T',
                'descripcion' => 'Pulgar entre índice y medio doblados, otros dedos cerrados.',
                'url_img' => 'señas/abecedario/t.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'U',
                'descripcion' => 'Índice y medio extendidos juntos hacia arriba, otros dedos cerrados.',
                'url_img' => 'señas/abecedario/u.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'V',
                'descripcion' => 'Índice y medio extendidos separados en forma de V, otros dedos cerrados.',
                'url_img' => 'señas/abecedario/v.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'W',
                'descripcion' => 'Índice, medio y anular extendidos separados, pulgar y meñique cerrados.',
                'url_img' => 'señas/abecedario/w.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'X',
                'descripcion' => 'Índice doblado en forma de gancho, otros dedos cerrados.',
                'url_img' => 'señas/abecedario/x.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'Y',
                'descripcion' => 'Pulgar y meñique extendidos, otros dedos cerrados.',
                'url_img' => 'señas/abecedario/y.jpg',
                'id_leccion' => 1,
            ],
            [
                'nombre' => 'Z',
                'descripcion' => 'Índice extendido, traza la forma de la letra Z en el aire.',
                'url_img' => 'señas/abecedario/z.gif',
                'id_leccion' => 1,
            ],
        ]);
    }
}
