<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriaSemanticaResource;
use App\Models\CategoriaSemantica;
use Illuminate\Http\Request;

class CategoriaSemanticaController extends Controller
{
    public function index()
    {
        $categorias = CategoriaSemantica::all();
        return response()->json([
            'status' => 'success',
            'data' => CategoriaSemanticaResource::collection($categorias),
        ], 200); // Usar el código de estado HTTP directamente
    }

    public function show(CategoriaSemantica $categoriaSemantica)
    {
        return response()->json([
            'status' => 'success',
            'data' => new CategoriaSemanticaResource($categoriaSemantica),
        ], 200); // Usar el código de estado HTTP directamente
    }

    public function store(Request $request)
    {
        $categoriaSemantica = CategoriaSemantica::create($request->all());
        return response()->json([
            'status' => 'success',
            'data' => new CategoriaSemanticaResource($categoriaSemantica),
        ], 201); // Usar el código de estado HTTP directamente
    }

    public function update(Request $request, CategoriaSemantica $categoriaSemantica)
    {
        $categoriaSemantica->update($request->all());
        return response()->json([
            'status' => 'success',
            'data' => new CategoriaSemanticaResource($categoriaSemantica),
        ], 200); // Usar el código de estado HTTP directamente
    }

    public function destroy(CategoriaSemantica $categoriaSemantica)
    {
        $categoriaSemantica->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Categoría eliminada correctamente',
        ], 204); // Usar el código de estado HTTP directamente
    }
}
