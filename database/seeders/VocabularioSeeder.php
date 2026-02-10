<?php

namespace Database\Seeders;

use App\Models\Seña;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VocabularioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seña::insert([
            [
                'nombre' => 'Agua', 
                'descripcion' => 'La mano “A” se mueve hacia la boca.', 
                'url_img' => 'señas/vocabulario/agua.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Amiga', 
                'descripcion' => 'Las dos manos se agarran en frente del cuerpo.', 
                'url_img' => 'señas/vocabulario/amiga.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Amigo', 
                'descripcion' => 'Las dos manos se agarran en frente del cuerpo.', 
                'url_img' => 'señas/vocabulario/amigo.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Aprender', 
                'descripcion' => 'La mano abierta se mueve de la otra palma hacia la frente cerrando los dedos.', 
                'url_img' => 'señas/vocabulario/aprender.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Árbol', 
                'descripcion' => 'La mano abierta, con el codo sostenido por la otra mano, se mueve un poco.', 
                'url_img' => 'señas/vocabulario/arbol.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Ayudar', 
                'descripcion' => 'El puño sobre la otra palma se mueve hacia adelante o hacia el cuerpo dependiando de', 
                'url_img' => 'señas/vocabulario/ayudar.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Azúcar', 
                'descripcion' => 'Con la mano palma abajo, los dedos y el pulgar se mueven entre sí.', 
                'url_img' => 'señas/vocabulario/azucar.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Bendecir', 
                'descripcion' => "Las manos 'A' tocan la barbilla y se mueven hacia abajo y adelante terminando abiertas", 
                'url_img' => 'señas/vocabulario/bendecir.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Biblia', 
                'descripcion' => "La combinación de las señas 'JESÚS' y 'LIBRO'.", 
                'url_img' => 'señas/vocabulario/biblia.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Bien', 
                'descripcion' => "La mano 'O' desinflada se mueve de la barbilla hacia afuera terminando en la mano abierta.", 
                'url_img' => 'señas/vocabulario/bien.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Bienvenido', 
                'descripcion' => "La seña de 'BIEN' y luego la seña de 'INVITAR'.", 
                'url_img' => 'señas/vocabulario/bienvenido.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Bonito', 
                'descripcion' => "El pulgar y el dedo índice pegados tocan la barbilla y se cambian a la mano 'L'.", 
                'url_img' => 'señas/vocabulario/bonito.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Broma', 
                'descripcion' => 'broma', 
                'url_img' => 'señas/vocabulario/broma.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Buenas noches', 
                'descripcion' => 'buenas noches', 
                'url_img' => 'señas/vocabulario/buenasnoches.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Buenas tardes', 
                'descripcion' => 'buenas tardes', 
                'url_img' => 'señas/vocabulario/buenastardes.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Buenos días', 
                'descripcion' => 'buenos días', 
                'url_img' => 'señas/vocabulario/buenosdias.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Café', 
                'descripcion' => "La mano 'F' se mueve hacia la boca en la forma de tomar café.", 
                'url_img' => 'señas/vocabulario/cafe.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Camisa', 
                'descripcion' => "La seña de 'ROPA' pero con una sola mano.", 
                'url_img' => 'señas/vocabulario/camisa.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Cansado', 
                'descripcion' => 'Las manos curvas sobre el pecho se mueven hacia abajo, volteándose palma arriba.', 
                'url_img' => 'señas/vocabulario/cansado.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Chao', 
                'descripcion' => 'chao', 
                'url_img' => 'señas/vocabulario/chao.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => '¿Cómo estas?', 
                'descripcion' => 'como estas', 
                'url_img' => 'señas/vocabulario/comoestas.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'De nada', 
                'descripcion' => 'de nada', 
                'url_img' => 'señas/vocabulario/denada.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Dios te bendiga', 
                'descripcion' => 'dios te bendiga', 
                'url_img' => 'señas/vocabulario/diostebendiga.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Doctor', 
                'descripcion' => 'doctor', 
                'url_img' => 'señas/vocabulario/doctor.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Doctora', 
                'descripcion' => 'doctora', 
                'url_img' => 'señas/vocabulario/doctora.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Dormir', 
                'descripcion' => 'El gesto natural.', 
                'url_img' => 'señas/vocabulario/dormir.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Feo', 
                'descripcion' => 'La mano curva se mueve hacia afuera en la mejilla.', 
                'url_img' => 'señas/vocabulario/feo.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Flor', 
                'descripcion' => "La mano 'O' se mueve de la nariz hasta afuera terminando abierta.", 
                'url_img' => 'señas/vocabulario/flor.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Gracias', 
                'descripcion' => 'Ambas manos abiertas se mueven de la barbilla hacia adelante.', 
                'url_img' => 'señas/vocabulario/gracias.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Hola', 
                'descripcion' => 'hola', 
                'url_img' => 'señas/vocabulario/hola.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Liceo', 
                'descripcion' => 'liceo', 
                'url_img' => 'señas/vocabulario/liceo.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Mesa', 
                'descripcion' => 'Ambas manos abiertas hacen la forma de una mesa y los lados.', 
                'url_img' => 'señas/vocabulario/mesa.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Molesto', 
                'descripcion' => 'molesto', 
                'url_img' => 'señas/vocabulario/molesto.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Oyente', 
                'descripcion' => 'La mano abierta, en forma horizontal, circula en frente de la boca.', 
                'url_img' => 'señas/vocabulario/oyente.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Pantalón', 
                'descripcion' => 'pantalón', 
                'url_img' => 'señas/vocabulario/pantalon.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Pena', 
                'descripcion' => 'La mano abierta se coloca en frente de la cara sin tocarla, mientras baja la cabeza un poco.', 
                'url_img' => 'señas/vocabulario/pena.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Refresco', 
                'descripcion' => 'refresco', 
                'url_img' => 'señas/vocabulario/refresco.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Sal', 
                'descripcion' => 'El dedo índice y el pulgar se mueven entre sí.', 
                'url_img' => 'señas/vocabulario/sal.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Tensión alta', 
                'descripcion' => 'tensión alta', 
                'url_img' => 'señas/vocabulario/tensionalta.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Tensión baja', 
                'descripcion' => 'tensión baja', 
                'url_img' => 'señas/vocabulario/tensionbaja.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Trabajar', 
                'descripcion' => 'Los puños se juntan y se separan varias veces en frente del cuerpo.', 
                'url_img' => 'señas/vocabulario/trabajar.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Universidad', 
                'descripcion' => 'La mano con el dedo índice y el meñique extendidos, toca el hombro opuesto.', 
                'url_img' => 'señas/vocabulario/universidad.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Zapato', 
                'descripcion' => "Las dos manos 'X' se mueve hacia abajo en frente del cuerpo", 
                'url_img' => 'señas/vocabulario/zapato.gif', 
                'id_leccion' => 3
            ],
        ]);
    }
}
