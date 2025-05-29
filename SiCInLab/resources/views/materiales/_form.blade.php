<div class="materiales-form">
    <form action="{{ $route }}" method="POST">
        @csrf

        @if($method === 'PUT')
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre del material</label>
            <input type="text" name="Nombre" class="form-control" value="{{ old('Nombre', $material->Nombre ?? '') }}"
            @if(!empty($readonly)) readonly @endif>
        </div>

        <div class="mb-3">
            <label for="Capacidad" class="form-label">Capacidad</label>
            <input type="number" name="Capacidad" class="form-control" value="{{ old('Capacidad', $material->Capacidad ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="IdUnidad" class="form-label">Unidad de medida</label>
            <select id="IdUnidad" name="IdUnidad" class="form-select">
                <option value="">-- Seleccione una unidad --</option>
                @foreach ($unidades as $unidad)
                    <option value="{{ $unidad->IdUnidad }}"
                        {{ old('IdUnidad', $material->IdUnidad ?? '') == $unidad->IdUnidad ? 'selected' : '' }}>
                        {{ $unidad->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="Cantidad" class="form-label">Cantidad</label>
            <input type="text" name="Cantidad" class="form-control" value="{{ old('Cantidad', $material->Cantidad ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="Marca" class="form-label">Marca</label>
            <input type="text" name="Marca" class="form-control" value="{{ old('Marca', $material->Marca ?? '') }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('materiales.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>