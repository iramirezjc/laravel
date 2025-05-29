@extends('layouts.app')

@section('title', 'Detalle del Equipo')

@section('content')
    <div class="equipos-show">
        <h1>{{ $equipo->Nombre }}</h1>

        <div class="mb-3">
            <a href="{{ route('equipos.edit', $equipo->IdEquipo) }}" class="btn btn-primary">Actualizar</a>

            <form action="{{ route('equipos.destroy', $equipo->IdEquipo) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro que deseas eliminar este elemento?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $equipo->IdEquipo }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $equipo->Nombre }}</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>{{ $equipo->Cantidad }}</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>{{ $equipo->Descripcion }}</td>
            </tr>
            <tr>
                <th>Tipo</th>
                <td>{{ $equipo->TipoEquipo }}</td>
            </tr>
        </table>

        <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
