<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCarrito;
use App\Models\CarritoCompras;
use App\Models\Producto;

class ItemCarritoController extends Controller
{
    public function index()
    {
        $items = ItemCarrito::with(['carrito', 'producto'])->get();
        return view('carrito-items.index', compact('items'));
    }

    public function create()
    {
        $carritos = CarritoCompras::with('usuario')->get();
        $productos = Producto::all();

        return view('carrito-items.create', compact('carritos', 'productos'));
    }

    public function store(Request $request)
    {
        ItemCarrito::create($request->all());

        return redirect()->route('carrito-items.index')
            ->with('success', 'Producto agregado al carrito');
    }

    public function show(string $id)
    {
        $item = ItemCarrito::with(['carrito', 'producto'])->findOrFail($id);
        return view('carrito-items.show', compact('item'));
    }

    public function edit(string $id)
    {
        $item = ItemCarrito::findOrFail($id);
        $carritos = CarritoCompras::all();
        $productos = Producto::all();

        return view('carrito-items.edit', compact('item', 'carritos', 'productos'));
    }

    public function update(Request $request, string $id)
    {
        $item = ItemCarrito::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('carrito-items.index')
            ->with('success', 'Item actualizado');
    }

    public function destroy(string $id)
    {
        $item = ItemCarrito::findOrFail($id);
        $item->delete();

        return redirect()->route('carrito-items.index')
            ->with('success', 'Item eliminado');
    }
}