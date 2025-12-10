<?php

namespace App\Http\Controllers;

use App\Models\ContentText;
use Illuminate\Http\Request;
use App\Http\Resources\ContentTextResource;

class ContentTextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contentText = ContentText::all();
        return ContentTextResource::collection($contentText);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contentText = ContentText::create($request->all());
        return response()->json([
            'status' => 'success',
            'data' => new ContentTextResource($contentText),
        ], 201); // Usar el código de estado HTTP directamente
    }

    /**
     * Display the specified resource.
     */
    public function show(ContentText $contentText)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContentText $contentText)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContentText $contentText)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentText $contentText)
    {
        //
    }
}
