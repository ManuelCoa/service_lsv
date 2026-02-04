<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Spatie\Permission\PermissionRegistrar;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json([
            'status' => 'success',
            'data' => UserResource::collection($users),
        ], 200);
    }

    public function show(User $user)
    {
        return response()->json([
            'status' => 'success',
            'data' => new UserResource($user),
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cedula' => 'required|integer',
            'name' => 'required|string|max:255',
            'apellido' => 'required|string|max:255|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'id_rol' => 'sometimes|integer|in:1,2' // 1=admin, 2=estudiante ✅
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 400);
        }

        $user = User::create([
            'cedula' => $request->cedula,
            'id_rol' => $request->id_rol ?? 2,
            'name' => $request->name,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Asignar rol correcto según id_rol
        if ($request->id_rol == 1) {
            $user->assignRole('administrador');
        } else {
            $user->assignRole('estudiante');
        }

        return response()->json([
            'status' => 'success',
            'data' => new UserResource($user),
            'message' => 'Usuario creado correctamente',
        ], 201);
    }

    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'cedula' => 'sometimes|required|integer',
            'id_rol' => 'sometimes|required|integer|in:1,2', 
            'name' => 'sometimes|required|string|max:255',
            'apellido' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $user->cedula .',cedula',
            'password' => 'sometimes|required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 400);
        }

        if ($request->has('password')) {
            $request->merge(['password' => Hash::make($request->password)]);
        }

        // Actualizar rol si cambia
        if ($request->has('id_rol')) {
            app()[PermissionRegistrar::class]->forgetCachedPermissions();
            $user->roles()->detach();
            
            if ($request->id_rol == 1) {
                $user->assignRole('administrador');
            } else {
                $user->assignRole('estudiante');
            }
        }

        $user->update($request->only(['cedula', 'name', 'apellido', 'email', 'id_rol']));

        return response()->json([
            'status' => 'success',
            'data' => new UserResource($user),
        ], 200);
    }


    public function updateProfile(Request $request)
    {
        $user = $request->user();
    
        $validator = Validator::make($request->all(), [
        'cedula' => 'sometimes|integer',
        'name' => 'sometimes|string|max:255',
        'apellido' => 'sometimes|string|max:255|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u',
        'email' => [
            'sometimes',
            'email',
            'max:255',
            Rule::unique('users')->ignore($user->id)  
        ],
            'password' => 'sometimes|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 400);
        }

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->update($request->only(['cedula', 'name', 'apellido', 'email']));

        return response()->json([
            'status' => 'success',
            'data' => new UserResource($user),
            'message' => 'Perfil actualizado correctamente',
        ], 200);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Usuario eliminado correctamente',
        ], 200);
    }
}
