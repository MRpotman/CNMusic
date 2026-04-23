<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Artista;
use App\Models\Genero;
use App\Models\TipoProducto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with(['artista', 'genero', 'tipoProducto'])->get();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $artistas = Artista::all();
        $generos = Genero::all();
        $tipos = TipoProducto::all();

        return view('productos.create', compact('artistas', 'generos', 'tipos'));
    }

    public function store(Request $request)
    {
    $request->validate([
        'nombre' => 'required',
        'album' => 'required',
        'precio' => 'required|numeric',
        'stock' => 'required|integer',
        'fechaLanzamiento' => 'required|date',
        'artistaID' => 'required',
        'generoID' => 'required',
        'tipoProductoID' => 'required',
    ]);

    Producto::create([
        'nombre' => $request->nombre,
        'album' => $request->album,
        'precio' => $request->precio,
        'stock' => $request->stock,
        'fechaLanzamiento' => $request->fechaLanzamiento,
        'artistaID' => $request->artistaID,
        'generoID' => $request->generoID,
        'tipoProductoID' => $request->tipoProductoID,
    ]);

    return redirect()->route('productos.index')
        ->with('success', 'Producto creado');
    }

    public function show(string $id)
    {
        $producto = Producto::with(['artista', 'genero', 'tipoProducto'])
            ->findOrFail($id);

        return view('productos.show', compact('producto'));
    }

    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);

        $artistas = Artista::all();
        $generos = Genero::all();
        $tipos = TipoProducto::all();

        return view('productos.edit', compact('producto', 'artistas', 'generos', 'tipos'));
    }

    public function update(Request $request, string $id)
    {
    $request->validate([
        'nombre' => 'required',
        'album' => 'required',
        'precio' => 'required|numeric',
        'stock' => 'required|integer',
        'fechaLanzamiento' => 'required|date',
        'artistaID' => 'required',
        'generoID' => 'required',
        'tipoProductoID' => 'required',
    ]);

    $producto = Producto::findOrFail($id);

    $producto->update([
        'nombre' => $request->nombre,
        'album' => $request->album,
        'precio' => $request->precio,
        'stock' => $request->stock,
        'fechaLanzamiento' => $request->fechaLanzamiento,
        'artistaID' => $request->artistaID,
        'generoID' => $request->generoID,
        'tipoProductoID' => $request->tipoProductoID,
    ]);

    return redirect()->route('productos.index')
        ->with('success', 'Producto actualizado');
    }

    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminado');
    }
}