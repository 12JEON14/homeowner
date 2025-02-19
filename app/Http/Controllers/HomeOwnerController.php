<?php

namespace App\Http\Controllers;

use App\Models\Homeowner;
use Illuminate\Http\Request;

class HomeownerController extends Controller
{
    public function index()
    {
        $homeowners = Homeowner::all();
        return view('homeowners.index', compact('homeowners'));
    }

    public function create()
    {
        return view('homeowners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:homeowners,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        Homeowner::create($request->all());

        return redirect()->route('homeowners.index')->with('success', 'Homeowner created successfully.');
    }

    public function show(Homeowner $homeowner)
    {
        return view('homeowners.show', compact('homeowner'));
    }

    public function edit(Homeowner $homeowner)
    {
        return view('homeowners.edit', compact('homeowner'));
    }

    public function update(Request $request, Homeowner $homeowner)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:homeowners,email,' . $homeowner->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $homeowner->update($request->all());

        return redirect()->route('homeowners.index')->with('success', 'Homeowner updated successfully.');
    }

    public function destroy(Homeowner $homeowner)
    {
        $homeowner->delete();
        return redirect()->route('homeowners.index')->with('success', 'Homeowner deleted successfully.');
    }
}
