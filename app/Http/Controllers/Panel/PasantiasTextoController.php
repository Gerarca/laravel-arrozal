<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\PasantiasTexto;
use App\Models\PasantiasImagene;
use Illuminate\Http\Request;

class PasantiasTextoController extends Controller
{
    public function index() {
        $PasantiasTextos = PasantiasTexto::all()->sortBy('orden');
        $PasantiasImagenes = PasantiasImagene::all()->sortBy('orden');

        return view('panel.pasantias.index', compact('PasantiasTextos','PasantiasImagenes'));
    }

    public function create(PasantiasTexto $pasantiasTexto) {
        $orden_maximo = PasantiasTexto::get()->count() + 1;

        return view('panel.pasantias.formtexto', compact('pasantiasTexto', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'texto' => 'required',
            ]);
            $pasantiasTexto = new PasantiasTexto();
            $pasantiasTexto->texto = $request->texto;
            $pasantiasTexto->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('pasantias.index')->withErrors($e->getMessage());
        }

        return redirect()->route('pasantias.index', $pasantiasTexto)->with('success', 'Texto almacenado correctamente.');
    }

    public function edit($id) {
        $pasantiasTexto = PasantiasTexto::findOrFail($id);
        $orden_maximo = PasantiasTexto::get()->count() + 1;

        return view('panel.pasantias.formtexto', compact('pasantiasTexto', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $pasantiasTexto = PasantiasTexto::findOrFail($id);
            $pasantiasTexto->fill($request->only('texto'))->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect()->route('pasantias.index')->with('success', 'Actualizado con éxito');
    }

    public function destroy(PasantiasTexto $pasantiasTexto) {
        $pasantiasTexto->delete();

        return redirect()->route('pasantias.index')->with('success', 'Eliminado con éxito');
    }
}
