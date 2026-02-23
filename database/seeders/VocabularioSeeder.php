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
                'descripcion' => "La mano 'A' se mueve hacia la boca.", 
                'url_img' => 'señas/vocabulario/agua.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Amiga', 
                'descripcion' => ' Las dos manos se agarran frente al cuerpo, seguido de un toque suave en la oreja.', 
                'url_img' => 'señas/vocabulario/amiga.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Amigo', 
                'descripcion' => 'Las dos manos se agarran frente al cuerpo, seguido de un toque suave sobre la nariz.', 
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
                'descripcion' => 'El puño sobre la otra palma se mueve hacia adelante o hacia el cuerpo dependiando del contexto de la oración.', 
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
                'descripcion' => "Las manos 'V' se mueven de un lado a otro en frente del cuerpo.", 
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
                'descripcion' => "Toca la nariz y luego las manos en forma de 'C' se mueven hacia adelante frente al pecho.", 
                'url_img' => 'señas/vocabulario/broma.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Buenas noches', 
                'descripcion' => "La mano 'O' desinflada se mueve de la barbilla hacia afuera terminando abierta, seguido de las manos abiertas moviéndose hacia adentro terminando en puño con brazos cruzados.", 
                'url_img' => 'señas/vocabulario/buenasnoches.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Buenas tardes', 
                'descripcion' => "La mano 'O' desinflada se mueve de la barbilla hacia afuera terminando abierta, seguido de la mano 'F' de lado circulando frente a la boca.", 
                'url_img' => 'señas/vocabulario/buenastardes.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Buenos días', 
                'descripcion' => "La mano 'O' desinflada se mueve de la barbilla hacia afuera terminando abierta, seguido de pulgar e índice tocando la cara entre la sien y el pómulo.", 
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
                'descripcion' => 'Las manos abiertas se mueven de lado a lado frente al cuerpo.', 
                'url_img' => 'señas/vocabulario/chao.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => '¿Cómo estás?', 
                'descripcion' => "Haz una 'O' floja con la palma arriba y muévela en círculo frente a ti, luego baja la mano abierta (palma abajo) y apunta con el índice a la persona.", 
                'url_img' => 'señas/vocabulario/comoestas.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'De nada', 
                'descripcion' => "Una o ambas manos en forma de 'F' se mueven de lado a lado frente al pecho.", 
                'url_img' => 'señas/vocabulario/denada.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Dios te bendiga', 
                'descripcion' => "Índice y pulgar se cierran al lado del ojo, luego la mano 'B' se mueve hacia abajo junto a la cara, seguidas de las manos 'A' tocando la barbilla y moviéndose hacia abajo y adelante terminando abiertas.", 
                'url_img' => 'señas/vocabulario/diostebendiga.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Doctor', 
                'descripcion' => 'El dedo índice, medio y pulgar tocan la muñeca, seguido de un toque suave sobre la nariz.', 
                'url_img' => 'señas/vocabulario/doctor.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Doctora', 
                'descripcion' => ' El dedo índice, medio y pulgar tocan la muñeca, seguido de un toque suave sobre la oreja.', 
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
                'descripcion' => "Haz una 'C' o extiende índice y medio para tocar alrededor de la oreja, luego pasa la mano horizontal en círculo frente a la boca.", 
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
                'descripcion' => 'La mano abierta en posición de saludo se eleva desde el hombro hacia adelante con un movimiento suave y natural.', 
                'url_img' => 'señas/vocabulario/hola.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Liceo', 
                'descripcion' => 'Pon una mano plana frente al pecho con la palma hacia arriba. Con la otra mano haz una "L" y toca suave el medio de la palma con el borde del pulgar.', 
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
                'descripcion' => 'El canto de la mano abierta toca la barbilla varias veces.', 
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
                'descripcion' => 'Pon las manos a la altura de la cintura, palmas hacia ti, deslízalas hacia abajo por los muslos como poniéndotelos, luego súbelas de nuevo simulando abrocharlos o ajustarlos arriba.', 
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
                'descripcion' => "Haz la letra 'R' con el pulgar extendido, llévala hacia la boca como si bebieses, moviendo la mano ligeramente.", 
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
                'descripcion' => ' El dedo índice y medio tocan las venas de la muñeca, luego la mano abierta sube indicando altura.', 
                'url_img' => 'señas/vocabulario/tensionalta.gif', 
                'id_leccion' => 3
            ],
            [
                'nombre' => 'Tensión baja', 
                'descripcion' => 'El dedo índice y medio tocan las venas de la muñeca, luego la mano abierta baja hacia abajo', 
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
