<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;

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
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 400);
        }

        $idRol = $request->id_rol ?? 2;
        $user = User::create([

            'cedula' => $request->cedula,
            'id_rol' => $idRol,
            'name' => $request->name,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('estudiante'); // Asignar rol estudiante por defecto
        /*
        // Si se desea asignar un rol específico al usuario, descomentar la siguiente línea 
        // y asegurarse de que el rol existe en la base de datos.
        // Asegúrate de que el rol existe antes de asignarlo
        // Puedes usar el método `assignRole` de Spatie/Permission para asignar roles
        // Asegúrate de que el rol existe antes de asignarlo
        // Puedes usar el método `assignRole` de Spatie/Permission para asignar roles
        // Asegúrate de que el rol existe antes de asignarlo                        
        if ($request->has('id_rol')) {
            $user->assignRole($request->id_rol);
        }*/
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
            'id_rol' => 'sometimes|required|integer',
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

        $user->update($request->all());

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
