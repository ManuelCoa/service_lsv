<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeñaController;
use App\Http\Controllers\CategoriaSemanticaController;
use App\Http\Controllers\RelacionSeñaCategoriaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentTextController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolePermissionController;           
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LeccionController;
use App\Http\Controllers\ProgresoController;
use App\Http\Controllers\ProfileController;
use App\Http\Resources\UserResource;

Route::middleware('guest')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('users', [UserController::class, 'store']);

    Route::prefix('password')->name('password.')->group(function () {
        Route::post('code', [ForgotPasswordController::class, 'sendResetLink'])
            ->name('code')
            ->middleware('throttle:5,1');

        Route::post('verify', [ForgotPasswordController::class, 'reset'])
            ->name('verify')
            ->middleware('throttle:10,1');
    });
});

Route::middleware(['auth:api'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('profile', [ProfileController::class, 'show']);
    Route::put('profile', [ProfileController::class, 'update']);

    Route::get('señas', [SeñaController::class, 'index']);
    Route::get('lecciones', [LeccionController::class, 'index']);
    
    Route::middleware(['role:administrador'])->group(function () {
        Route::apiResource('lecciones', LeccionController::class)
            ->except(['index']);

        Route::apiResource('señas', SeñaController::class)
            ->except(['index']);

        Route::apiResource('users', UserController::class)
            ->except(['store']);     
            
        Route::apiResource('roles', RoleController::class);
        Route::post('roles/assign', [RoleController::class, 'assignRoleToUser']);
        Route::apiResource('categoria-semantica', CategoriaSemanticaController::class);
        Route::apiResource('relacion-seña-categoria', RelacionSeñaCategoriaController::class);
    });

    Route::apiResource('progreso', ProgresoController::class);
});

