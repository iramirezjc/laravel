@extends('layouts.app')

@section('title', 'Registrar Equipo')

@section('content')
    <h1>Registrar equipo</h1>

    @include('equipos._form', [
        'route' => route('equipos.store'),
        'method' => 'POST',
        'equipo' => null
    ])
@endsection