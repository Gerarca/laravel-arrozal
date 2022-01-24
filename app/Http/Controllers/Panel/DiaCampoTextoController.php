<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\DiaCampoTexto;
use App\Models\DiaCampoImagenes;
use Illuminate\Http\Request;

class DiaCampoTextoController extends Controller
{
    public function index() {
        $DiaCampoTextos = DiaCampoTexto::all()->sortBy('orden');
        $DiaCampoImagenes = DiaCampoImagenes::all()->sortBy('orden');

        return view('panel.diacampo.index', compact('DiaCampoTextos','DiaCampoImagenes'));
    }

    public function create(DiaCampoTexto $diacampotexto) {
        $orden_maximo = DiaCampoTexto::get()->count() + 1;

        return view('panel.diacampo.formtexto', compact('diacampotexto', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'texto' => 'required',
            ]);
            $diacampotexto = new DiaCampoTexto();
            $diacampotexto->texto = $request->texto;
            $diacampotexto->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('diacampo.index')->withErrors($e->getMessage());
        }

        return redirect()->route('diacampo.index', $diacampotexto)->with('success', 'Texto almacenado correctamente.');
    }

    public function edit($id) {
        $diacampotexto = DiaCampoTexto::findOrFail($id);
        $orden_maximo = DiaCampoTexto::get()->count() + 1;

        return view('panel.diacampo.formtexto', compact('diacampotexto', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $diacampotexto = DiaCampoTexto::findOrFail($id);
            $diacampotexto->fill($request->only('texto'))->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect()->route('diacampo.index')->with('success', 'Actualizado con éxito');
    }

    public function destroy(DiaCampoTexto $diacampotexto) {
        $diacampotexto->delete();

        return redirect()->route('diacampo.index')->with('success', 'Eliminado con éxito');
    }
}
