<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Unidad;
use Illuminate\Http\Request;

class MaterialesController extends Controller
{
    //
    public function index(Request $request) {
        $query = Material::query();

        if ($request->filled('buscar')) {
            $query->where('Nombre', 'like', '%' . $request->buscar . '%');
        }
        $materiales = $query->get();


        return view('materiales.index', [ 'materiales' => $materiales ]);
    }

    public function create() {
        $unidades = Unidad::all();

        return view('materiales.create', compact('unidades'));
    }

    public function store(Request $request) {
        Material::create($this->validarMaterial($request));

        return redirect()->route('materiales.index')->with('success', 'Material registrado correctamente.');
    }

    public function show($IdMaterial) {
        $material = Material::findOrFail($IdMaterial);

        return view('materiales.show', compact('material'));
    }

    public function edit($IdMaterial) {
        $material = Material::findOrFail($IdMaterial);
        $unidades = Unidad::all();

        return view('materiales.edit', [
            'material' => $material,
            'unidades' => $unidades,
        ]);
    }

    public function update(Request $request, $IdMaterial) {
        $material = Material::findOrFail($IdMaterial);
        $material->update($this->validarMaterial($request));

        return redirect()->route('materiales.index')->with('success', 'Material actualizado correctamente.');
    }

    public function destroy($IdMaterial) {
        $material = Material::findOrFail($IdMaterial);
        $material->delete();

        return redirect()->route('materiales.index')->with('success', 'Material eliminado correctamente.');
    }

    public function validarMaterial(Request $request) {
        return $request->validate([
            'Nombre' => 'required|string|max:50',
            'Capacidad' => 'required|integer',
            'Cantidad' => 'required|integer',
            'Marca' => 'required|string|max:50',
            'IdUnidad' => 'required|exists:UNIDADES,IdUnidad',
        ]);
    }
}
