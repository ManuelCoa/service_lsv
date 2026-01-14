<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RolePermissionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_verifies_permission_system_works_correctly()
    {
        // ==================== 1. PREPARACIÓN ====================
        // Crear usuario de prueba
        $user = User::factory()->create();
        
        // Crear rol y permiso necesarios
        $adminRole = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'view-admin-dashboard']);
        
        // ==================== 2. ACCIÓN ====================
        // Asignar rol al usuario
        $user->assignRole($adminRole);
        
        // Asignar permiso al rol
        $adminRole->givePermissionTo($permission);
        
        // ==================== 3. VERIFICACIÓN ====================
        // Verificaciones directas del modelo
        $this->assertTrue($user->hasRole('admin'));
        $this->assertTrue($user->can('view-admin-dashboard'));
        
        // Prueba de acceso a ruta protegida
        $response = $this->actingAs($user)
                        ->get('/api/admin/dashboard');
        
        // Verificaciones de la respuesta HTTP
        $response->assertStatus(200)
                 ->assertJson([
                     'message' => 'Dashboard accessed'
                 ]);
    }

    /** @test */
    public function it_denies_access_without_permission()
    {
        // Usuario sin permisos
        $regularUser = User::factory()->create();
        
        $response = $this->actingAs($regularUser)
                        ->get('/api/admin/dashboard');
        
        $response->assertStatus(403);
    }

    /** @test */
    public function it_denies_access_to_unauthenticated_users()
    {
        // Usuario no autenticado
        $response = $this->get('/api/admin/dashboard');
        
        $response->assertStatus(401);
    }
}