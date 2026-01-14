<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $permission)
    {
        $user = $request->user(); // ← Esta es la forma correcta
        
        if (!$user) {
            return response()->json([
                'message' => 'Autenticación requerida',
                'success' => false
            ], 401);
        }

        if (!$user->hasPermissionTo($permission)) {
            return response()->json([
                'message' => 'No tienes permiso',
                'success' => false
            ], 403);
        }


        return $next($request);
    }
}
