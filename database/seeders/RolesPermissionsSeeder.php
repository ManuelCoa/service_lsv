<?php

namespace Database\Seeders;

use Faker\Provider\ar_EG\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'crear usuario']);
        Permission::create(['name' => 'editar usuario']);
        Permission::create(['name' => 'borrar usuario']);

        Permission::create(['name' => 'consultar leccion']);
        Permission::create(['name' => 'realizar leccion']);
        Permission::create(['name' => 'crear leccion']);
        Permission::create(['name' => 'editar leccion']);
        Permission::create(['name' => 'borrar leccion']);
        

        
        Permission::create(['name' => 'crear rol']);
        Permission::create(['name' => 'editar rol']);
        Permission::create(['name' => 'borrar rol']);

        
        Permission::create(['name' => 'crear permiso']);
        Permission::create(['name' => 'editar permiso']);
        Permission::create(['name' => 'borrar permiso']);

        // Crear roles y asignar permisos
        $admin = Role::create(['name' => 'administrador' , 'guard_name' => 'api']);
        $admin->givePermissionTo(Permission::all());

        $estudiante = Role::create(['name' => 'estudiante', 'guard_name' => 'api']);
        $estudiante->givePermissionTo(['consultar leccion', 'realizar leccion']);
    }
}
