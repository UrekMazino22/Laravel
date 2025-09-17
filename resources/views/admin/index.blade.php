@extends('layouts.app')

@section('content')
    <h2>Panel de Administración</h2>

    <div class="admin-grid">
        <a class="btn-card" href="{{ route('productos.index') }}">
            <h3> Gestión de Productos📦</h3>
        </a>

        <a class="btn-card" href="{{ route('clientes.index') }}">
            <h3>Gestión de Clientes👥</h3>
        </a>

        <a class="btn-card" href="{{ route('informes.index') }}">
            <h3>Informes de Ventas📊</h3>
        </a>
    </div>
@endsection
