<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class InformeController extends Controller
{
    public function index()
    {
        $ventas = Venta::with('cliente', 'detalles.producto')->get();
        return view('admin.informes.index', compact('ventas'));
    }

    public function filtrar(Request $request)
    {
        $ventas = Venta::with('cliente', 'detalles.producto')
            ->when($request->fecha_inicio, fn($q) => $q->whereDate('created_at', '>=', $request->fecha_inicio))
            ->when($request->fecha_fin, fn($q) => $q->whereDate('created_at', '<=', $request->fecha_fin))
            ->get();

        return view('admin.informes.index', compact('ventas'));
    }
}
