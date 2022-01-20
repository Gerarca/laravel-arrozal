<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\DondeEstamo;
use Illuminate\Http\Request;

class DondeEstamosController extends Controller
{
    public function index() {
        $DondeEstamos = DondeEstamo::all()->sortBy('orden');

        return view('panel.nosotros.dondeestamos.index', compact('DondeEstamos'));
    }

    public function create(DondeEstamo $DondeEstamos) {
        $orden_maximo = DondeEstamo::get()->count() + 1;

        return view('panel.nosotros.dondeestamos.form', compact('DondeEstamos', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'texto' => 'required',
            ]);
            $DondeEstamos = new DondeEstamo();
            $DondeEstamos->texto = $request->texto;
            $DondeEstamos->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('dondeestamos.index')->withErrors($e->getMessage());
        }

        return redirect()->route('dondeestamos.index')->with('success', 'Banner almacenado correctamente.');
    }

    public function edit($id) {
        $DondeEstamos = DondeEstamo::findOrFail($id);
        $orden_maximo = DondeEstamo::get()->count() + 1;

        return view('panel.nosotros.dondeestamos.form', compact('DondeEstamos', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $DondeEstamos = DondeEstamo::findOrFail($id);
            $DondeEstamos->fill($request->only('texto'))->save();
            $DondeEstamos->update();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect()->route('dondeestamos.index')->with('success', 'Actualizado con éxito');
    }

    public function destroy(DondeEstamo $DondeEstamos) {
        $DondeEstamos->delete();

        return redirect()->route('dondeestamos.index')->with('success', 'Eliminado con éxito');
    }
}
