<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelloDiscografico;

class SelloDiscograficoController extends Controller
{
    public function index()
    {
        $sellos = SelloDiscografico::all();
        return view('sellos.index', compact('sellos'));
    }

    public function create()
    {
        return view('sellos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        SelloDiscografico::create($request->all());

        return redirect()->route('sellos.index')
                         ->with('success', 'Sello creado correctamente');
    }

    public function show(string $id)
    {
        $sello = SelloDiscografico::findOrFail($id);
        return view('sellos.show', compact('sello'));
    }

    public function edit(string $id)
    {
        $sello = SelloDiscografico::findOrFail($id);
        return view('sellos.edit', compact('sello'));
    }

    public function update(Request $request, string $id)
    {
        $sello = SelloDiscografico::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        $sello->update($request->all());

        return redirect()->route('sellos.index')
                         ->with('success', 'Sello actualizado');
    }

    public function destroy(string $id)
    {
        $sello = SelloDiscografico::findOrFail($id);
        $sello->delete();

        return redirect()->route('sellos.index')
                         ->with('success', 'Sello eliminado');
    }
}