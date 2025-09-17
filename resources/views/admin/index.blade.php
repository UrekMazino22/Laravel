@extends('layouts.app')

@section('content')
    <h2>Panel de Administración</h2>
    <ul>
        <li><a class="btn btn-primary" href="{{ route('productos.index') }}">Gestión de Productos</a></li>
        <li><a class="btn btn-primary" href="{{ route('clientes.index') }}">Gestión de Clientes</a></li>
        <li><a class="btn btn-primary" href="{{ route('informes.index') }}">Informes de Ventas</a></li>
    </ul>
@endsection
