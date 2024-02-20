<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::all();
        return view('compras.index', compact('compras'));
    }

    public function create()
    {
        return view('compras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'proveedor' => 'required',
            'producto' => 'required',
            'descripcion' => 'required',
        ]);

        Compra::create($request->all());

        return redirect('/registro/compras')->with('success', 'Compra creada exitosamente');
    }

    public function show($id)
    {
        $compra = Compra::find($id);
        return view('compras.show', compact('compra'));
    }

    public function edit($id)
    {
        $compra = Compra::find($id);
        return view('compras.edit', compact('compra'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'proveedor' => 'required',
            'producto' => 'required',
            'descripcion' => 'required',
        ]);

        $compra = Compra::find($id);
        $compra->update($request->all());

        return redirect('/registro/compras')->with('success', 'Compra actualizada exitosamente');
    }
}

