<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;
use App\Models\SelloDiscografico;

class ArtistaController extends Controller
{
    // LISTAR
    public function index()
    {
        $artistas = Artista::all();
        return view('artistas.index', compact('artistas'));
    }

    // FORM CREAR
    public function create()
    {
        $sellos = SelloDiscografico::all();
        return view('artistas.create', compact('sellos'));
    }

    // GUARDAR
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'nacionalidad' => 'required|string|max:255',
            'selloDiscograficoID' => 'required|integer'
        ]);

        Artista::create($request->all());

        return redirect()->route('artistas.index')
                         ->with('success', 'Artista creado correctamente');
    }

    // MOSTRAR
    public function show($id)
    {
        $artista = Artista::findOrFail($id);
        return view('artistas.show', compact('artista'));
    }

    // FORM EDITAR
    public function edit($id)
    {
        $artista = Artista::findOrFail($id);
        $sellos = SelloDiscografico::all();

        return view('artistas.edit', compact('artista', 'sellos'));
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $artista = Artista::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'nacionalidad' => 'required|string|max:255',
            'selloDiscograficoID' => 'required|integer'
        ]);

        $artista->update($request->all());

        return redirect()->route('artistas.index')
                         ->with('success', 'Artista actualizado correctamente');
    }

    // ELIMINAR
    public function destroy($id)
    {
        Artista::destroy($id);

        return redirect()->route('artistas.index')
                         ->with('success', 'Artista eliminado correctamente');
    }
}