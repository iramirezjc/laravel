@extends('layouts.app')

@section('title', 'Modificar el Equipo')

@section('content')
    <h1>Editar equipo</h1>

    @include('equipos._form', [
        'route' => route('equipos.update', $equipo->IdEquipo),
        'method' => 'PUT',
        'equipo' => $equipo
    ])
@endsection