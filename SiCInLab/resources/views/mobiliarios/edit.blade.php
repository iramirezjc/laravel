@extends('layouts.app')

@section('title', 'Modificar Mobiliario')

@section('content')
    <h1>Editar Mobiliario</h1>
    @include('mobiliarios._form', [
        'route' => route('mobiliarios.update', $mobiliario->IdMobiliario),
        'method' => 'PUT',
        'mobiliario' => $mobiliario
    ])
@endsection