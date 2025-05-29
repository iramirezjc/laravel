<div class="mobiliarios-form">
    <form action="{{ $route }}" method="POST">
        @csrf

        @if($method === 'PUT')
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre del Mobiliario</label>
            <input type="text" name="Nombre" class="form-control" value="{{ old('Nombre', $mobiliario->Nombre ?? '') }}"
            @if(!empty($readonly)) readonly @endif>
        </div>

        <div class="mb-3">
            <label for="Cantidad" class="form-label">Cantidad</label>
            <input type="number" name="Cantidad" class="form-control" value="{{ old('Cantidad', $mobiliario->Cantidad ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripción</label>
            <input type="text" name="Descripcion" class="form-control" value="{{ old('Descripcion', $mobiliario->Descripcion ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="Material" class="form-label">Material</label>
            <input type="text" name="Material" class="form-control" value="{{ old('Material', $mobiliario->Material ?? '') }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('mobiliarios.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>