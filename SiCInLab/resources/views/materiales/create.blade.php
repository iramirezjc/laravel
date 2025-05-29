@extends('layouts.app')

@section('title', 'Registrar Material')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
    <h1>Registro de Material</h1>
    @include('materiales._form', [
        'route' => route('materiales.store'),
        'method' => 'POST',
        'material' => null,
    ])
@endsection