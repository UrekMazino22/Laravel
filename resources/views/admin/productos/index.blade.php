@extends('layouts.app')

@section('content')
    <h2>Gestión de Productos</h2>
    <a href="{{ route('productos.create') }}" class="btn btn-success">+ Nuevo Producto</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nombre }}</td>
                    <td>${{ $p->precio }}</td>
                    <td>{{ $p->stock }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $p->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('productos.destroy', $p->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
