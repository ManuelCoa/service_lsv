<?php

namespace App\Http\Controllers;

use App\Models\Seña;
use App\Http\Resources\SeñaResource;
use Illuminate\Http\Request;

class SeñaController extends Controller
{
    public function index(Request $request)
    {
        $query = Seña::query();

        // Filtro por nombre de categoría (minúsculas, sin acentos)
        $categoria = $request->get('categoria');
        if ($categoria) {
            $query->whereHas('categorias', function ($q) use ($categoria) {
                $q->whereRaw('LOWER(REPLACE(nombre, " ", "")) = ?', [
                    strtolower(str_replace(' ', '', $categoria))
                ]);
            });
        }

        $señas = $query->get();

        return response()->json([
            'status' => 'success',
            'data' => SeñaResource::collection($señas),
        ], 200);
    }

    public function show(Seña $seña)
    {
        return response()->json([
            'status' => 'success',
            'data' => new SeñaResource($seña),
        ], 200); 
    }

    public function store(Request $request)
    {
        $seña = Seña::create($request->all());
        return response()->json([
            'status' => 'success',
            'data' => new SeñaResource($seña),
        ], 201); 
    }

    public function update(Request $request, Seña $seña)
    {
        $seña->update($request->all());
        return response()->json([
            'status' => 'success',
            'data' => new SeñaResource($seña),
        ], 200); 
    }

    public function destroy(Seña $seña)
    {
        $seña->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Seña eliminada correctamente',
        ], 204); 
    }
}
