@extends('layouts.app')

@section('title', 'Detalle del Material')

@section('content')
    <div class="materiales-show">
        <h1>{{ $material->Nombre }}</h1>

        <div class="mb-3">
            <a href="{{ route('materiales.edit', $material->IdMaterial) }}" class="btn btn-primary">Actualizar</a>

            <form action="{{ route('materiales.destroy', $material->IdMaterial) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro que deseas eliminar este elemento?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $material->IdMaterial }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $material->Nombre }}</td>
            </tr>
            <tr>
                <th>Capacidad</th>
                <td>{{ $material->Capacidad }} {{ $material->unidad->Nombre }}</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>{{ $material->Cantidad }}</td>
            </tr>
            <tr>
                <th>Marca</th>
                <td>{{ $material->Marca }}</td>
            </tr>
        </table>

        <a href="{{ route('materiales.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection