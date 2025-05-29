@extends('layouts.app')

@section('title', 'Registrar Mobiliario')

@section('content')
    <h1>Registrar Mobiliario</h1>
    @include('mobiliarios._form', [
        'route' => route('mobiliarios.store'),
        'method' => 'POST',
        'mobiliario' => null
    ])
@endsection