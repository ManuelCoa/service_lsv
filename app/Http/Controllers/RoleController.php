<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //GUET
    public function index()
    {
        $roles = Role::all();

        return response()->json([
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    //GUET
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name'
        ]);

        $role = Role::create(['name' => $request->name]);

        return response()->json([
            'status' => 'success',
            'role' => $role
        ]);
    }

    /**
     * Display the specified resource.
     */
    //guet
    public function show(string $id)
    {
        $role = Role::findOrFail($id);

        return response()->json([
            'role' => $role,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $id
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->save();

        return response()->json([
            'status' => 'success',
            'role' => $role,
            'message' => 'Rol actualizado correctamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $idRole = Role::findOrFail($id);
        $idRole->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Rol eliminado correctamente'
        ]);
    }

    public function assignRoleToUser(Request $request)
    {
        $request->validate([
            'user_cedula' => 'required|exists:users,cedula',
            'role' => 'required|exists:roles,id'
        ]);
         // Elimina todos los roles del 
        $user = User::findOrFail($request->user_cedula);
        $user->syncRoles([]);
        $user->assignRole($request->role);
        $user->update(['id_rol' => $request->role]);
        


        return response()->json([
            'success' => true,
            'message' => 'Rol asignado correctamente'
        ]);
    }

    
    
}
