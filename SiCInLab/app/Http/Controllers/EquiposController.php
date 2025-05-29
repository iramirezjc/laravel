<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquiposController extends Controller {
    /**
     * Vista principal con el listado de todos los Equipos Guardados
     * @param $request información que llega desde el navegador o cliente al servidor
     */
    public function index(Request $request) {
        $query = Equipo::query();
        
        if ($request->filled('buscar')) {
            $query->where('Nombre', 'like', '%' . $request->buscar . '%');
        }
        $equipos = $query->get();

        return view('equipos.index', [ 'equipos' => $equipos ]);
    }
    /**
     * Formulario para registrar un nuevo Equipo
     */
    public function create() {
        return view('equipos.create');
    }
    /**
     * Funcion para almacenar un nuevo equipo, es llamada desde la vista create
     */
    public function store(Request $request) {
        Equipo::create($this->validarEquipo($request));

        return redirect()->route('equipos.index')->with('success', 'Equipo registrado correctamente.');
    }
    /**
     * Función para ver el detalle de un solo Equipo
     * @param $IdEquipo empleado para localizar el equipo
     */
    public function show($IdEquipo) {
        $equipo = Equipo::findOrFail($IdEquipo);

        return view('equipos.show', [ 'equipo' => $equipo ]);
    }
    /**
     * Formuario para ver el detalle del Equipo que se va a modificar
     *  @param $IdEquipo empleado para localizar el equipo
     */
    public function edit($IdEquipo) {
        $equipo = Equipo::findOrFail($IdEquipo);

        return view('equipos.edit', compact('equipo'));
    }
    /**
     * Funcion que modífica el registro del Equipo seleccionado
     *  @param $IdEquipo empleado para localizar el equipo
     */
    public function update(Request $request, $IdEquipo) {
        $equipo = Equipo::findOrFail($IdEquipo);
        $equipo->update($this->validarEquipo($request));

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado correctamente.');
    }
    /**
     * Elimina un Equipo de la base de datos
     *  @param $IdEquipo empleado para localizar el equipo
     */
    public function destroy($IdEquipo) {
        $equipo = Equipo::findOrFail($IdEquipo);
        $equipo->delete();

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado correctamente.');
    }
    /**
     * Funcion para validar que los datos recibidos cumplen con
     * las restricciones de la base de datos
     */
    private function validarEquipo(Request $request) {
        return $request-> validate([
            'Nombre' => 'required|string|max:50',
            'Cantidad' => 'required|integer',
            'Descripcion' => 'required|string|max:200',
            'TipoEquipo' => 'required|string|max:30',
        ]);
    }
}

