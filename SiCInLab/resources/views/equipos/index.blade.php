@extends('layouts.app')

@section('title', 'Listado de Equipos')

@section('content')
    <h1>Equipos</h1>

    {{-- Buscador --}}
    @include('equipos._search')

    {{-- Botón para crear --}}
    <a href="{{ route('equipos.create') }}" class="btn btn-success mb-3">Registrar Equipos</a>

    {{-- Tabla de datos --}}
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Descripción</th>
                <th>Tipo</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($equipos as $index => $equipo)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $equipo->Nombre }}</td>
                    <td>{{ $equipo->Cantidad }}</td>
                    <td>{{ $equipo->Descripcion }}</td>
                    <td>{{ $equipo->TipoEquipo }}</td>
                    <td class="d-flex gap-1">
                        <a href="{{ route('equipos.show', $equipo->IdEquipo) }}" title="Ver" class="btn btn-sm btn-info">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="{{ route('equipos.edit', $equipo->IdEquipo) }}" title="Editar" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <form action="{{ route('equipos.destroy', $equipo->IdEquipo) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este equipo?');">
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