<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RelacionSeñaCategoria;

class RelacionSeñaCategoriaSeeder extends Seeder
{
    public function run(): void
    {
        // Limpiar tabla antes de insertar
        RelacionSeñaCategoria::truncate();

        // ABECEDARIO (1-28) -> Categoría 1
        $this->asignarCategoria(range(1, 28), 1);
        
        // NÚMEROS (29-58) -> Categoría 2  
        $this->asignarCategoria(range(29, 58), 2);
        
        // DÍAS DE LA SEMANA (59-66) -> Categoría 3
        $this->asignarCategoria(range(59, 66), 3);
        
        // COLORES (67-77 estimado) -> Categoría 4
        $this->asignarCategoria(range(67, 77), 4);
        
        // MESES DEL AÑO (78-89 estimado, 12 meses) -> Categoría 5
        $this->asignarCategoria(range(78, 89), 5);
        
        // FAMILIA (90-105 estimado, 16 miembros) -> Categoría 6
        $this->asignarCategoria(range(90, 105), 6);
        
        // VOCABULARIO GENERAL (106-200 estimado) -> Categoría 7
        $this->asignarCategoria(range(106, 148), 7);
    }

    private function asignarCategoria(array $idsSeñas, int $idCategoria): void
    {
        $relaciones = [];
        
        foreach ($idsSeñas as $idSeña) {
            $relaciones[] = [
                'id_seña' => $idSeña,
                'id_categoria' => $idCategoria,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        
        RelacionSeñaCategoria::insert($relaciones);
    }
}
