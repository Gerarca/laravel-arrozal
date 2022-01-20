<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\QuienesSomos;
use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    public function index() {
        $QuienesSomos = QuienesSomos::all()->sortBy('orden');

        return view('panel.nosotros.quienessomos.index', compact('QuienesSomos'));
    }

    public function create(QuienesSomos $quienesSomos) {
        $orden_maximo = QuienesSomos::get()->count() + 1;

        return view('panel.nosotros.quienessomos.form', compact('quienesSomos', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'imagen' => 'required|image',
            ]);
            $fileName = 'quienesSomos' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->imagen->move(base_path() . '/public/uploads/', $fileName);
            $QuienesSomos = new QuienesSomos();
            $QuienesSomos->descripcion = $request->descripcion;
            $QuienesSomos->mision = $request->mision;
            $QuienesSomos->vision = $request->vision;
            $QuienesSomos->valores = $request->valores;
            $QuienesSomos->imagen = $fileName;
            $QuienesSomos->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('quienessomos.index')->withErrors($e->getMessage());
        }

        return redirect()->route('quienessomos.index', $QuienesSomos)->with('success', 'Informacion almacenado correctamente.')
            ->with('imagen', $fileName);
    }

    public function edit($id) {
        $quienesSomos = QuienesSomos::findOrFail($id);
        $orden_maximo = QuienesSomos::get()->count() + 1;

        return view('panel.nosotros.quienessomos.form', compact('quienesSomos', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $QuienesSomos = QuienesSomos::findOrFail($id);
            $QuienesSomos->fill($request->only('descripcion', 'mision', 'vision', 'valores'))->save();
            if ($request->hasFile('imagen')) {
                $fileName = 'quienesSomos' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
                $request->imagen->move(base_path() . '/public/uploads/', $fileName);
                $QuienesSomos->imagen = $fileName;
                $QuienesSomos->update();
            }
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect()->route('quienessomos.index')->with('success', 'Actualizado con éxito');
    }
}
