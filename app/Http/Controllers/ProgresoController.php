<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProgresoResource;
use App\Models\Progreso;
use Illuminate\Http\Request;

class ProgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $progreso = Progreso::all();
        return response()->json([
            'status' => 'consulta exitosa',
            'data' => ProgresoResource::collection($progreso),
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $progreso = Progreso::create($request->all());
        return response()->json([
            'status' => 'creacion exitosa',
            'data' => new ProgresoResource($progreso),
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Progreso  $progreso)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Progreso $progreso)
    {
        $progreso->update($request->all());
        return response()->json([
            'status' => 'actualizacion exitosa',
            'data' => new ProgresoResource($progreso),
        ], 200);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progreso $progreso)
    {
        $progreso->delete();
        return response()->json([
            'status' => 'eliminacion exitosa',
        ], 200);
    }
}
