@extends('layouts.app')

@section('content')
    <h2>Punto de Venta (POS)</h2>

    <form action="{{ route('pos.venta') }}" method="POST">
        @csrf

        <label>Cliente:</label>
        <select name="cliente_id">
            <option value="">Cliente de Mostrador</option>
            @foreach($clientes as $c)
                <option value="{{ $c->id }}">{{ $c->nombre }}</option>
            @endforeach
        </select><br><br>

        <h3>Productos</h3>
        @foreach($productos as $p)
            <div style="margin-bottom:10px;">
                <label>{{ $p->nombre }} (${{ $p->precio }}) - Stock: {{ $p->stock }}</label>
                <input type="number" name="productos[{{ $loop->index }}][cantidad]" placeholder="Cantidad" min="0">
                <input type="hidden" name="productos[{{ $loop->index }}][id]" value="{{ $p->id }}">
            </div>
        @endforeach

        <button type="submit" class="btn btn-success">Registrar Venta</button>
    </form>
@endsection
