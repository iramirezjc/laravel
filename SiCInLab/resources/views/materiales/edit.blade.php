@extends('layouts.app')

@section('title', 'Modificar Material')

@section('content')
    <h1>Editar Material</h1>
    @include('materiales._form', [
        'route' => route('materiales.update', $material->IdMaterial),
        'method' => 'PUT',
        'material' => $material
    ])
@endsection