@extends('layouts.app')

@section('content')
    <h2>Editar Cliente</h2>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf @method('PUT')
        <label>Tipo Documento:</label>
        <input type="text" name="tipo_documento" value="{{ $cliente->tipo_documento }}" required><br><br>

        <label>Número Documento:</label>
        <input type="text" name="numero_documento" value="{{ $cliente->numero_documento }}" required><br><br>

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $cliente->nombre }}" required><br><br>

        <label>Dirección:</label>
        <input type="text" name="direccion" value="{{ $cliente->direccion }}"><br><br>

        <label>Ciudad:</label>
        <input type="text" name="ciudad" value="{{ $cliente->ciudad }}"><br><br>

        <label>Cédula:</label>
        <input type="text" name="cedula" value="{{ $cliente->cedula }}"><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="{{ $cliente->telefono }}"><br><br>

        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
@endsection
