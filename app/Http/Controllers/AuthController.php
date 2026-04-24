<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function login(LoginUserRequest $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['status' => 'error', 'message' => 'Credenciales inválidas'], 401);
            }

            $user  = JWTAuth::user();

            $userData = [
                'cedula' => $user->cedula,
                'id_rol' => $user->id_rol,
                'name' => $user->name,
                'apellido' => $user->apellido,
                'email' => $user->email,
            ];

            return response()->json([
                'status' => 'success', 
                'data' => ['user' => $userData, 'token' => $token]
            ], 200);

        } catch (JWTException $e) {
            return response()->json(['status' => 'error', 'message' => 'No se pudo crear el token'], 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            JWTAuth::invalidate(JWTAuth::parseToken($request->token));
            return response()->json(['status' => 'success', 'message' => 'Sesión cerrada correctamente'], 200);
        } catch (JWTException $e) {
            return response()->json(['status' => 'error', 'message' => 'No se pudo cerrar la sesión'], 500);
        }
    }
}
