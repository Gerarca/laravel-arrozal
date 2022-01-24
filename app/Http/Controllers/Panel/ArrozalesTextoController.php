<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\ArrozalesTexto;
use App\Models\ArrozalesImagene;
use App\Models\ArrozalesVideo;
use Illuminate\Http\Request;

class ArrozalesTextoController extends Controller
{
    public function index() {
        $ArrozalesTextos = ArrozalesTexto::all()->sortBy('orden');
        $ArrozalesVideos = ArrozalesVideo::all()->sortBy('orden');
        $ArrozalesImagenes = ArrozalesImagene::all()->sortBy('orden');

        return view('panel.arrozales.index', compact('ArrozalesTextos','ArrozalesVideos','ArrozalesImagenes'));
    }

    public function create(ArrozalesTexto $arrozalestexto) {
        $orden_maximo = ArrozalesTexto::get()->count() + 1;

        return view('panel.arrozales.formtexto', compact('arrozalestexto', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'texto' => 'required',
            ]);
            $arrozalestexto = new ArrozalesTexto();
            $arrozalestexto->texto = $request->texto;
            $arrozalestexto->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('arrozales.index')->withErrors($e->getMessage());
        }

        return redirect()->route('arrozales.index', $arrozalestexto)->with('success', 'Texto almacenado correctamente.');
    }

    public function edit($id) {
        $arrozalestexto = ArrozalesTexto::findOrFail($id);
        $orden_maximo = ArrozalesTexto::get()->count() + 1;

        return view('panel.arrozales.formtexto', compact('arrozalestexto', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $arrozalestexto = ArrozalesTexto::findOrFail($id);
            $arrozalestexto->fill($request->only('texto'))->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect()->route('arrozales.index')->with('success', 'Actualizado con éxito');
    }

    public function destroy(ArrozalesTexto $arrozalestexto) {
        $arrozalestexto->delete();

        return redirect()->route('arrozales.index')->with('success', 'Eliminado con éxito');
    }
}
