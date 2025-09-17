@extends('layouts.app')

@section('content')
    <h2>Editar Producto</h2>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $producto->nombre }}" required><br><br>

        <label>Descripción:</label>
        <input type="text" name="descripcion" value="{{ $producto->descripcion }}"><br><br>

        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" required><br><br>

        <label>Stock:</label>
        <input type="number" name="stock" value="{{ $producto->stock }}" required><br><br>

        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@endsection
