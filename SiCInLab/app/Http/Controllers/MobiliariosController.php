<?php

namespace App\Http\Controllers;

use App\Models\Mobiliario;
use Illuminate\Http\Request;

class MobiliariosController extends Controller
{
    //
    public function index(Request $request) {
        $query = Mobiliario::query();
        
        if ($request->filled('buscar')) {
            $query->where('Nombre', 'like', '%' . $request->buscar . '%');
        }
        $mobiliarios = $query->get();

        return view('mobiliarios.index', [ 'mobiliarios' => $mobiliarios ]);
    }

    public function show($IdMobiliario) {
        $mobiliario = Mobiliario::findOrFail($IdMobiliario);

        return view('mobiliarios.show', ['mobiliario' => $mobiliario]);
    }

    public function create() {
        return view('mobiliarios.create');
    }

    public function store(Request $request) {
        Mobiliario::create($this->validarMobiliario($request));

        return redirect()->route('mobiliarios.index')->with('success', 'Mobiliario registrado correctamente.');
    }

    public function edit($IdMobiliario) {
        $mobiliario = Mobiliario::findOrFail($IdMobiliario);

        return view('mobiliarios.edit', ['mobiliario' => $mobiliario]);
    }

    public function update(Request $request, $IdMobiliario) {
        $mobiliario = Mobiliario::findOrFail($IdMobiliario);
        $mobiliario->update($this->validarMobiliario($request));

        return redirect()->route('mobiliarios.index')->with('succes', 'Mobiliarios actualizado correctamente');
    }

    public function destroy($IdMobiliario) {
        $mobiliario = Mobiliario::findOrFail($IdMobiliario);
        $mobiliario->delete();

        return redirect()->route('mobiliarios.index')->with('success', 'Mobiliario eliminado correctamente.');
    }
    
    private function validarMobiliario(Request $request) {
        return $request-> validate([
            'Nombre' => 'required|string|max:50',
            'Cantidad' => 'required|integer',
            'Descripcion' => 'required|string|max:200',
            'Material' => 'required|string|max:50',
        ]);
    }
}
