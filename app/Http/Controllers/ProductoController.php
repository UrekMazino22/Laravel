<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('admin.productos.index', compact('productos'));
    }

    public function create()
    {
        return view('admin.productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer'
        ]);

        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('admin.productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito.');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        if ($producto->detalleVentas()->exists()) {
            return redirect()->route('productos.index')->with('error', 'No se puede eliminar un producto con ventas.');
        }

        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito.');
    }
}
