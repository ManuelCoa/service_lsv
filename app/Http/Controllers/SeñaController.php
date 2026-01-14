<?php

namespace App\Http\Controllers;

use App\Models\Seña;
use App\Http\Resources\SeñaResource;
use Illuminate\Http\Request;

class SeñaController extends Controller
{
    public function index()
    {
        $señas = Seña::all();
        return response()->json([
            'status' => 'success',
            'data' => SeñaResource::collection($señas),
        ], 200); // Usar el código de estado HTTP directamente
    }

    public function show(Seña $seña)
    {
        return response()->json([
            'status' => 'success',
            'data' => new SeñaResource($seña),
        ], 200); // Usar el código de estado HTTP directamente
    }

    public function store(Request $request)
    {
        $seña = Seña::create($request->all());
        return response()->json([
            'status' => 'success',
            'data' => new SeñaResource($seña),
        ], 201); // Usar el código de estado HTTP directamente
    }

    public function update(Request $request, Seña $seña)
    {
        $seña->update($request->all());
        return response()->json([
            'status' => 'success',
            'data' => new SeñaResource($seña),
        ], 200); // Usar el código de estado HTTP directamente
    }

    public function destroy(Seña $seña)
    {
        $seña->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Seña eliminada correctamente',
        ], 204); // Usar el código de estado HTTP directamente
    }
}
