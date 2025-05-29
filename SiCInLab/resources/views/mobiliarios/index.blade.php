@extends('layouts.app')

@section('title', 'Listado de Mobiliarios')

@section('content')
    <h1>Mobiliarios</h1>

    {{-- Buscador --}}
    @include('mobiliarios._search')

    {{-- Botón para crear --}}
    <a href="{{ route('mobiliarios.create') }}" class="btn btn-success mb-3">Registrar Mobiliario</a>

    {{-- Tabla de datos --}}
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Descripción</th>
                <th>Material</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mobiliarios as $index => $mobiliario)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mobiliario->Nombre }}</td>
                    <td>{{ $mobiliario->Cantidad }}</td>
                    <td>{{ $mobiliario->Descripcion }}</td>
                    <td>{{ $mobiliario->Material }}</td>
                    <td class="d-flex gap-1">
                        <a href="{{ route('mobiliarios.show', $mobiliario->IdMobiliario) }}" title="Ver" class="btn btn-sm btn-info">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="{{ route('mobiliarios.edit', $mobiliario->IdMobiliario) }}" title="Editar" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <form action="{{ route('mobiliarios.destroy', $mobiliario->IdMobiliario) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este equipo?');">
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