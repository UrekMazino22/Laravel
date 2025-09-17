@extends('layouts.app')

@section('content')
    <h2>Gestión de Clientes</h2>
    <a href="{{ route('clientes.create') }}" class="btn btn-success">+ Nuevo Cliente</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->tipo_documento }} {{ $c->numero_documento }}</td>
                    <td>{{ $c->nombre }}</td>
                    <td>{{ $c->ciudad }}</td>
                    <td>{{ $c->telefono }}</td>
                    <td>
                        <a href="{{ route('clientes.edit', $c->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('clientes.destroy', $c->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar cliente?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
