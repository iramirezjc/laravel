<div class="equipos-form">
    <form action="{{ $route }}" method="POST">
        @csrf

        @if($method === 'PUT')
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre del equipo</label>
            <input type="text" name="Nombre" class="form-control" value="{{ old('Nombre', $equipo->Nombre ?? '') }}"
            @if(!empty($readonly)) readonly @endif>
        </div>

        <div class="mb-3">
            <label for="Cantidad" class="form-label">Cantidad</label>
            <input type="number" name="Cantidad" class="form-control" value="{{ old('Cantidad', $equipo->Cantidad ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripción</label>
            <input type="text" name="Descripcion" class="form-control" value="{{ old('Descripcion', $equipo->Descripcion ?? '') }}">
        </div>

        <div class="mb-3">
            <label for="TipoEquipo" class="form-label">Tipo de equipo</label>
            <input type="text" name="TipoEquipo" class="form-control" value="{{ old('TipoEquipo', $equipo->TipoEquipo ?? '') }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>