<?php

namespace Database\Seeders;

use Faker\Provider\ar_EG\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
 
class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Limpiar cache de permisos
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        
        // Usar firstOrCreate para evitar duplicados
        $this->createPermissions([
            'crear usuario', 'editar usuario', 'borrar usuario',
            'consultar leccion', 'realizar leccion', 'crear leccion', 
            'editar leccion', 'borrar leccion',
            'crear rol', 'editar rol', 'borrar rol',
            'crear permiso', 'editar permiso', 'borrar permiso'
        ]);

        // Roles con permisos
        $admin = Role::firstOrCreate(['name' => 'administrador', 'guard_name' => 'api']);
        $admin->syncPermissions(Permission::all());

        $estudiante = Role::firstOrCreate(['name' => 'estudiante', 'guard_name' => 'api']);
        $estudiante->syncPermissions(['consultar leccion', 'realizar leccion']);
    }

    private function createPermissions(array $permissions): void
    {
        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'api'
            ]);
        }
    }
}
