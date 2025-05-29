<div class="equipos-search">
    <form method="GET" action="{{ route('equipos.index') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="buscar" class="form-control" placeholder="Buscar por nombre..." value="{{ request('Nombre') }}">
            <button class="btn btn-outline-primary">Buscar</button>
        </div>
    </form>
</div>
