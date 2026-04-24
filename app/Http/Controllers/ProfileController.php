<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\ProfileResource;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'data' => new ProfileResource($request->user()),
        ], 200);
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $validator = Validator::make($request->all(), [
            'cedula' => 'sometimes|nullable|integer',
            'name' => 'sometimes|nullable|string|max:255',
            'apellido' => 'sometimes|nullable|string|max:255|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/u',
            'email' => [
                'sometimes',
                'nullable',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
            'password' => 'sometimes|nullable|string|min:6',
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
            'data' => new ProfileResource($user),
            'message' => 'Perfil actualizado correctamente',
        ], 200);
    }
}