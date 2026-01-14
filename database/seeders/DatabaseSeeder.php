<?php

namespace Database\Seeders;

use App\Models\Nivele;
use App\Models\Leccione;
use App\Models\RelacionSeñaCategoria;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesPermissionsSeeder::class,            
            NivelSeeder::class,
            LeccionSeeder::class,
            AbecedarioSeeder::class,
            NumerosSeeder::class,  
            DiasSemanaSeeder::class,
            MesesAñoSeeder::class,
            ColoresSeeder::class,
            FamiliaSeeder::class,
            CategoriaSemanticaSeeder::class,
            RelacionSeñaCategoriaSeeder::class,
                        
        ]);

        $adminUser = User::create([  // ← create() en lugar de factory
            'cedula' => '32312412',
            'name' => 'Manuel',
            'id_rol' => 1,
            'name' => 'Manuel',
            'apellido' => 'Coa',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('test1234'),
        ]);

        $adminRole = Role::where([
            'name' => 'administrador',
            'guard_name' => 'api'
        ])->firstOrFail();
        
        $adminUser->assignRole($adminRole); // Asignar rol admin
    }
        
}
