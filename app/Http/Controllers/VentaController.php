<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        return view('venta.index', compact('ventas'));
    }

    public function create()
    {
        return view('venta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente' => 'required',
            'producto' => 'required',
            'descripcion' => 'required',
        ]);

        Venta::create($request->all());

        return redirect('/registro/ventas')->with('success', 'Venta creada exitosamente');
    }

    public function show($id)
    {
        $venta = Venta::find($id);
        return view('venta.show', compact('venta'));
    }

    public function edit($id)
    {
        $venta = Venta::find($id);
        return view('venta.edit', compact('venta'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cliente' => 'required',
            'producto' => 'required',
            'descripcion' => 'required',
        ]);

        Venta::find($id)->update($request->all());

        return redirect('/registro/ventas')->with('success', 'Venta actualizada exitosamente');
    }

    public function destroy($id)
    {
        Venta::find($id)->delete();

        return redirect('/registro/ventas')->with('success', 'Venta eliminada exitosamente');
    }
}
