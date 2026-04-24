<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UserResource;
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

    public function store(RegisterUserRequest $request)
    {
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


    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Usuario eliminado correctamente',
        ], 200);
    }
}
