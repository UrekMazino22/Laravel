<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Cliente;
use App\Models\Venta;
use App\Models\DetalleVenta;

class POSController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        $clientes = Cliente::all();
        return view('pos.index', compact('productos', 'clientes'));
    }

    public function registrarVenta(Request $request)
    {
        $request->validate([
            'productos' => 'required|array',
            'productos.*.id' => 'required|exists:productos,id',
            'productos.*.cantidad' => 'required|integer|min:1'
        ]);

        $clienteId = $request->cliente_id ?? Cliente::firstOrCreate(
            ['numero_documento' => '0000'],
            [
                'tipo_documento' => 'CC',
                'nombre' => 'Cliente de Mostrador',
                'direccion' => '',
                'ciudad' => '',
                'cedula' => '0000',
                'telefono' => ''
            ]
        )->id;

        $venta = Venta::create([
            'cliente_id' => $clienteId,
            'total' => 0
        ]);

        $total = 0;
        foreach ($request->productos as $item) {
            $producto = Producto::find($item['id']);
            $cantidad = $item['cantidad'];
            $subtotal = $producto->precio * $cantidad;

            DetalleVenta::create([
                'venta_id' => $venta->id,
                'producto_id' => $producto->id,
                'cantidad' => $cantidad,
                'precio_unitario' => $producto->precio,
                'subtotal' => $subtotal
            ]);

            $total += $subtotal;
            $producto->stock -= $cantidad;
            $producto->save();
        }

        $venta->total = $total;
        $venta->save();

        return redirect()->route('pos.index')->with('success', 'Venta registrada correctamente.');
    }
}
