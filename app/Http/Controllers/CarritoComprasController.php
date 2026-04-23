<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarritoCompras;
use App\Models\Usuario;

class CarritoComprasController extends Controller
{
    public function index()
    {
        $carritos = CarritoCompras::with('usuario')->get();
        return view('carrito-compras.index', compact('carritos'));
    }

    public function create()
    {
        $usuarios = Usuario::all();
        return view('carrito-compras.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuarioID' => 'required|exists:usuarios,usuarioID',
            'total' => 'nullable|numeric|min:0',
        ]);

        CarritoCompras::create([
            'usuarioID' => $request->usuarioID,
            'total' => $request->total ?? 0
        ]);

        return redirect()->route('carrito-compras.index')
            ->with('success', 'Carrito creado correctamente');
    }

    public function show(string $id)
    {
        $carrito = CarritoCompras::with(['usuario', 'items.producto'])
            ->findOrFail($id);

        return view('carrito-compras.show', compact('carrito'));
    }

    public function edit(string $id)
    {
        $carrito = CarritoCompras::findOrFail($id);
        $usuarios = Usuario::all();

        return view('carrito-compras.edit', compact('carrito', 'usuarios'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'usuarioID' => 'required|exists:usuarios,usuarioID',
            'total' => 'nullable|numeric|min:0',
        ]);

        $carrito = CarritoCompras::findOrFail($id);

        $carrito->update([
            'usuarioID' => $request->usuarioID,
            'total' => $request->total
        ]);

        return redirect()->route('carrito-compras.index')
            ->with('success', 'Carrito actualizado correctamente');
    }

    public function destroy(string $id)
    {
        $carrito = CarritoCompras::findOrFail($id);
        $carrito->delete();

        return redirect()->route('carrito-compras.index')
            ->with('success', 'Carrito eliminado correctamente');
    }
}