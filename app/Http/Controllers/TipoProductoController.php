<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoProducto;

class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = TipoProducto::all();
        return view('tipos.index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TipoProducto::create($request->all());
        return redirect()->route('tipos.index')->with('success', 'Tipo de producto creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipo = TipoProducto::findOrFail($id);
        return view('tipos.show', compact('tipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipo = TipoProducto::findOrFail($id);
        return view('tipos.edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipo = TipoProducto::findOrFail($id);
        $tipo->update($request->all());

        return redirect()->route('tipos.index')->with('success', 'Tipo actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipo = TipoProducto::findOrFail($id);
        $tipo->delete();

        return redirect()->route('tipos.index')->with('success', 'Tipo eliminado');
    }
}
