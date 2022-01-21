<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index() {
        $Servicios = Servicio::all()->sortBy('orden');

        return view('panel.servicios.index', compact('Servicios'));
    }

    public function create(Servicio $servicio) {
        $orden_maximo = Servicio::get()->count() + 1;

        return view('panel.servicios.form', compact('servicio', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'imagen' => 'required|image',
            ]);
            $fileName = 'servicios' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->imagen->move(base_path() . '/public/uploads/', $fileName);
            $Servicios = new Servicio();
            $Servicios->imagen = $fileName;
            $Servicios->titulo = $request->titulo;
            $Servicios->texto = $request->texto;
            $Servicios->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('servicios.index')->withErrors($e->getMessage());
        }

        return redirect()->route('servicios.index', $Servicios)->with('success', 'Servicio almacenado correctamente.')
            ->with('imagen', $fileName);
    }

    public function edit($id) {
        $servicio = Servicio::findOrFail($id);
        $orden_maximo = Servicio::get()->count() + 1;

        return view('panel.servicios.form', compact('servicio', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $Servicios = Servicio::findOrFail($id);
            $Servicios->fill($request->only('titulo', 'texto'))->save();
            if ($request->hasFile('imagen')) {
                $fileName = 'servicios' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
                $request->imagen->move(base_path() . '/public/uploads/', $fileName);
                $Servicios->imagen = $fileName;
                $Servicios->update();
            }
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect()->route('servicios.index')->with('success', 'Actualizado con éxito');
    }

    public function destroy(Servicio $servicio) {
        $servicio->delete();

        return redirect()->route('servicios.index')->with('success', 'Eliminado con éxito');
    }
}
