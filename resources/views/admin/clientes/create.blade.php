@extends('layouts.app')

@section('content')
    <h2>Nuevo Cliente</h2>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label>Tipo Documento:</label>
        <input type="text" name="tipo_documento" required><br><br>

        <label>Número Documento:</label>
        <input type="text" name="numero_documento" required><br><br>

        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Dirección:</label>
        <input type="text" name="direccion"><br><br>

        <label>Ciudad:</label>
        <input type="text" name="ciudad"><br><br>

        <label>Cédula:</label>
        <input type="text" name="cedula"><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono"><br><br>

        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection
