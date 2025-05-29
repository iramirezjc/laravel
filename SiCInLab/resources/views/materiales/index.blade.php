@extends('layouts.app')

@section('title', 'Listado de Materiales')

@section('content')
    <h1>Materiales</h1>

    {{-- Buscador --}}
    @include('materiales._search')

    {{-- Boton Crear--}}
    <a href="{{ route('materiales.create') }}" class="btn btn-success mb-3">Registrar Mobiliario</a>

    {{-- Tabla de datos --}}
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Capacidad</th>
                <th>Cantidad</th>
                <th>Marca</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($materiales as $index => $material)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $material->Nombre }}</td>
                    <td>{{ $material->Capacidad }} {{ $material->unidad->Nombre }}</td>
                    <td>{{ $material->Cantidad }}</td>
                    <td>{{ $material->Marca }}</td>
                    <td class="d-flex gap-1">
                        <a href="{{ route('materiales.show', $material->IdMaterial) }}" title="Ver" class="btn btn-sm btn-info">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="{{ route('materiales.edit', $material->IdMaterial) }}" title="Editar" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <form action="{{ route('materiales.destroy', $material->IdMaterial) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este equipo?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Eliminar" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">No se encontraron equipos.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection