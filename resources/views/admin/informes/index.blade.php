@extends('layouts.app')

@section('content')
    <h2>Informes de Ventas</h2>

    <form method="POST" action="{{ route('informes.filtrar') }}">
        @csrf
        <label>Desde:</label>
        <input type="date" name="fecha_inicio">
        <label>Hasta:</label>
        <input type="date" name="fecha_fin">
        <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID Venta</th>
                <th>Cliente</th>
                <th>Total</th>
                <th>Fecha</th>
                <th>Detalle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->cliente ? $v->cliente->nombre : 'Mostrador' }}</td>
                    <td>${{ $v->total }}</td>
                    <td>{{ $v->created_at }}</td>
                    <td>
                        <ul>
                            @foreach($v->detalles as $d)
                                <li>{{ $d->cantidad }}x {{ $d->producto->nombre }} (${{ $d->subtotal }})</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
