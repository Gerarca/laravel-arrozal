<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\DiaCampoTexto;
use App\Models\DiaCampoImagenes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class DiaCampoTextoController extends Controller
{
    public function index() {

        if( App::getLocale() == 'es' ){
            $DiaCampoTextos = DiaCampoTexto::all()->sortBy('orden');
        }else{
            $DiaCampoTextos = DiaCampoTexto::get(['id','texto_en as texto']);
        }
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
                'texto_en' => 'required',
            ]);
            $diacampotexto = new DiaCampoTexto();
            $diacampotexto->texto = $request->texto;
            $diacampotexto->texto_en = $request->texto_en;
            $diacampotexto->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('diacampo.index')->withErrors($e->getMessage());
        }
        if( App::getLocale() == 'es' ){
            return redirect()->route('diacampo.index', $diacampotexto)->with('success', 'Texto almacenado correctamente.');
        }else{
            return redirect()->route('diacampo.index', $diacampotexto)->with('success', 'Text stored successfully.');
        }
    }

    public function edit($id) {
        $diacampotexto = DiaCampoTexto::findOrFail($id);
        $orden_maximo = DiaCampoTexto::get()->count() + 1;

        return view('panel.diacampo.formtexto', compact('diacampotexto', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $diacampotexto = DiaCampoTexto::findOrFail($id);
            $diacampotexto->fill($request->only('texto','texto_en'))->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }
        if( App::getLocale() == 'es' ){
            return redirect()->route('diacampo.index')->with('success', 'Actualizado con éxito');
        }else{
            return redirect()->route('diacampo.index')->with('success', 'Successfully upgraded');
        }
    }

    public function destroy(DiaCampoTexto $diacampotexto) {
        $diacampotexto->delete();

        if( App::getLocale() == 'es' ){
            return redirect()->route('diacampo.index')->with('success', 'Eliminado con éxito');
        }else{
            return redirect()->route('diacampo.index')->with('success', 'Successfully Removed');
        }

    }
}
