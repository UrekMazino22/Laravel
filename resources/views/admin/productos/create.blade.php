@extends('layouts.app')

@section('content')
    <h2>Nuevo Producto</h2>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Descripción:</label>
        <input type="text" name="descripcion"><br><br>

        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required><br><br>

        <label>Stock:</label>
        <input type="number" name="stock" required><br><br>

        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection
