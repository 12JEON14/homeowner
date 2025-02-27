<?php

namespace App\Http\Controllers;

use App\Models\Tradie;
use Illuminate\Http\Request;

class TradieController extends Controller
{
    public function index()
    {
        return response()->json(Tradie::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:tradies,email',
            'phone' => 'nullable|string|max:20',
            'skillset' => 'required|string|max:255',
            'availability' => 'boolean',
        ]);

        $tradie = Tradie::create($request->all());
        return response()->json($tradie, 201);
    }

    public function show(Tradie $tradie)
    {
        return response()->json($tradie);
    }

    public function update(Request $request, Tradie $tradie)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:tradies,email,' . $tradie->id,
            'phone' => 'nullable|string|max:20',
            'skillset' => 'required|string|max:255',
            'availability' => 'boolean',
        ]);

        $tradie->update($request->all());
        return response()->json($tradie);
    }

    public function destroy(Tradie $tradie)
    {
        $tradie->delete();
        return response()->json(['message' => 'Tradie deleted successfully']);
    }
}
