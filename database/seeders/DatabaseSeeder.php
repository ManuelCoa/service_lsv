<?php

namespace Database\Seeders;

use App\Models\Nivele;
use App\Models\Leccione;
use App\Models\RelacionSeñaCategoria;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role;

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
            contentTextSeeder::class,
            AbecedarioSeeder::class,
            MesesAñoSeeder::class,
            NumerosSeeder::class,  
            ColoresSeeder::class,
            DiasSemanaSeeder::class,
            FamiliaSeeder::class,
            VocabularioSeeder::class,
            CategoriaSemanticaSeeder::class,
            RelacionSeñaCategoriaSeeder::class,
            MesesAñoSeeder::class,
            
            
            
            
        ]);
        // User::factory(10)->create();

        User::factory()->create([
            'cedula' => '32312412',
            'id_rol' => 1,
            'name' => 'Manuel',
            'apellido' => 'Coa ',
            'email' => 'manuelcoa100@gmail.com',
            'password' => bcrypt('contrasenasegura'),
        ]);

        $user = User::find(32312412); // Usuario con ID 1
        $user->assignRole('administrador'); // Asignar rol admin
        
    }
        
}
