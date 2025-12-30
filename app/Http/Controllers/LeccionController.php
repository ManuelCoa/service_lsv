<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\LeccionResource;
use App\Models\Leccione;

class LeccionController extends Controller
{
    public function index()
    {
        $lecciones = Leccione::all();
        return LeccionResource::collection($lecciones);
    }

    public function store(Request $request)
    {
        $leccion = Leccione::create($request->all());
        return new LeccionResource($leccion);
    }

    public function show(Leccione $leccion)
    {
        return new LeccionResource($leccion);
    }

    public function update(Request $request, Leccione $leccione)
    {
        $leccione->update($request->all());

        return new LeccionResource($leccione);
    }

    public function destroy(Leccione $leccione)
    {
        $leccione->delete();
        return response()->json(null, 204);
    }
}
