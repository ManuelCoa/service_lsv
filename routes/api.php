<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeñaController;
use App\Http\Controllers\CategoriaSemanticaController;
use App\Http\Controllers\RelacionSeñaCategoriaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentTextController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolePermissionController;           
use App\Http\Controllers\RoleController;

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
*/
// routes/api.php

use App\Http\Controllers\LeccionController;
use App\Http\Controllers\ProgresoController;

/*
//lecciones
Route::apiResource('lecciones', LeccionController::class)->middleware(['role:administrador'])->only(['index', 'show', 'store', 'update', 'destroy']);

 // Rutas de CRUD de usuarios
Route::apiResource('users', UserController::class)->middleware('auth:api',)->except(['store']); // Excluir métodos store    

//roles y permisos

Route::middleware(['auth:api', 'rol', 'permission'])->group(function () {
    // Rutas de administración de roles y permisos
    Route::prefix('admin')->group(function () {
        Route::post('/roles', [RolePermissionController::class, 'createRole'])
            ->middleware('permission:create-roles');
            
        Route::post('/permissions', [RolePermissionController::class, 'createPermission'])
            ->middleware('permission:create-permissions');
            
        Route::post('/assign-role', [RolePermissionController::class, 'assignRoleToUser'])
            ->middleware('permission:assign-roles');
            
        Route::post('/give-permission', [RolePermissionController::class, 'givePermissionToRole'])
            ->middleware('permission:assign-permissions');
    });

    // Ruta de ejemplo protegida por permiso
    Route::get('/protected-route', function () {
        return response()->json(['message' => 'Tienes acceso a esta ruta protegida']);
    })->middleware('permission:access-protected-route');
});
*/
//login
Route::post('login', [AuthController::class, 'login']);

//crud de usuarios 
Route::post('users', [UserController::class, 'store']); // Crear usuario

//Route::get('lecciones', [LeccionController::class, 'index']);

//Route::apiResource('roles',RoleController::class);
//Route::post('roles/assign', [RoleController::class, 'assignRoleToUser']);

Route::apiResource('users', UserController::class)->middleware(['auth:api','role:administrador'])->except(['store']); // Excluir métodos store

Route::middleware(['auth:api'])->group(function () {
  //logout
  Route::post('logout', [AuthController::class, 'logout']);

  //lecciones get  
  Route::get('lecciones', [LeccionController::class, 'index']);
//respo de rutas de lecciones
    Route::apiResource('lecciones', LeccionController::class)->middleware(['role:administrador'])->except(['index']);
  
    // Rutas para gestionar señas
    Route::get('señas', [SeñaController::class, 'index']);

    Route::apiResource('señas', SeñaController::class)->middleware(['role:administrador'])->except(['index']);


    // Rutas para gestionar categorías semánticas
    Route::apiResource('categoria-semantica', CategoriaSemanticaController::class)->middleware(['role:administrador']);

    // Rutas para gestionar relaciones entre señas y categorías
    Route::apiResource('relacion-seña-categoria', RelacionSeñaCategoriaController::class)->middleware(['role:administrador']);

   // Route::apiResource('roles',RolePermissionController::class)->middleware(['role:administrador'])->only(['createRole', 'createPermission', 'destroy','assingRolesToUsers', 'index', 'destroy','update']);
    Route::apiResource('roles',RoleController::class);
  // Route::apiResource('roles',RoleController::class)->middleware(['role:administrador'])->only(['index', 'store', 'update', 'destroy']);

   Route::post('roles/assign', [RoleController::class, 'assignRoleToUser'])->middleware(['role:administrador']);

   Route::apiResource('progreso', ProgresoController::class);

   
});




/*
Route::middleware(['auth:sanctum', 'permission:view-admin-dashboard'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return response()->json(['message' => 'Dashboard accessed']);
    });
});
*/