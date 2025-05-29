@extends('layouts.app')

@section('title', 'Detalle del Mobiliario')

@section('content')
    <div class="equipos-show">
        <h1>{{ $mobiliario->Nombre }}</h1>

        <div class="mb-3">
            <a href="{{ route('mobiliarios.edit', $mobiliario->IdMobiliario) }}" class="btn btn-primary">Actualizar</a>

            <form action="{{ route('mobiliarios.destroy', $mobiliario->IdMobiliario) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro que deseas eliminar este elemento?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $mobiliario->IdMobiliario }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $mobiliario->Nombre }}</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>{{ $mobiliario->Cantidad }}</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>{{ $mobiliario->Descripcion }}</td>
            </tr>
            <tr>
                <th>Material</th>
                <td>{{ $mobiliario->Material }}</td>
            </tr>
        </table>

        <a href="{{ route('mobiliarios.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
