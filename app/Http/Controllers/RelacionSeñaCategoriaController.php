<?php

namespace App\Http\Controllers;

use App\Models\RelacionSeñaCategoria;
use App\Http\Resources\RelacionSeñaCategoriaResource;
use Illuminate\Http\Request;

class RelacionSeñaCategoriaController extends Controller
{
    public function index()
    {
        $relaciones = RelacionSeñaCategoria::all();
        return response()->json([
            'status' => 'success',
            'data' => RelacionSeñaCategoriaResource::collection($relaciones),
        ], 200); // Usar el código de estado HTTP directamente
    }

    public function show(RelacionSeñaCategoria $relacionSeñaCategoria)
    {
        return response()->json([
            'status' => 'success',
            'data' => new RelacionSeñaCategoriaResource($relacionSeñaCategoria),
        ], 200); // Usar el código de estado HTTP directamente
    }

    public function store(Request $request)
    {
        $relacionSeñaCategoria = RelacionSeñaCategoria::create($request->all());
        return response()->json([
            'status' => 'success',
            'data' => new RelacionSeñaCategoriaResource($relacionSeñaCategoria),
        ], 201); // Usar el código de estado HTTP directamente
    }

    public function update(Request $request, RelacionSeñaCategoria $relacionSeñaCategoria)
    {
        $relacionSeñaCategoria->update($request->all());
        return response()->json([
            'status' => 'success',
            'data' => new RelacionSeñaCategoriaResource($relacionSeñaCategoria),
        ], 200); // Usar el código de estado HTTP directamente
    }

    public function destroy(RelacionSeñaCategoria $relacionSeñaCategoria)
    {
        $relacionSeñaCategoria->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Relación eliminada correctamente',
        ], 204); // Usar el código de estado HTTP directamente
    }
}
