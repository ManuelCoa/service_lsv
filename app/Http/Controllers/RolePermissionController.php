<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class RolePermissionController extends Controller
{
    
    public function index(){
        $roles = Role::all();
        $permissions = Permission::all();

        return response()->json([
            'roles' => $roles,
            'permissions' => $permissions
        ]);
    }
    public function createRole(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name'
        ]);

        $role = Role::create(['name' => $request->name]);
        
        return response()->json([
            'success' => true,
            'role' => $role
        ]);
    }

    public function createPermission(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:permissions,name'
        ]);

        $permission = Permission::create(['name' => $request->name]);
        
        return response()->json([
            'success' => true,
            'permission' => $permission
        ]);
    }

    public function givePermissionToRole(Request $request)
    {
        $request->validate([
            'role' => 'required|exists:roles,name',
            'permission' => 'required|exists:permissions,name'
        ]);

        $role = Role::findByName($request->role);
        $role->givePermissionTo($request->permission);
        
        return response()->json([
            'success' => true,
            'message' => 'Permiso asignado al rol correctamente'
        ]);
    }
}