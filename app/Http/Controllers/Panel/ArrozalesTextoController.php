<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\ArrozalesTexto;
use App\Models\ArrozalesImagene;
use App\Models\ArrozalesVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ArrozalesTextoController extends Controller
{
    public function index() {

        if( App::getLocale() == 'es' ){
            $ArrozalesTextos = ArrozalesTexto::all()->sortBy('orden');
        }else{
            $ArrozalesTextos = ArrozalesTexto::get(['id','texto_en as texto']);
        }
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
                'texto_en' => 'required',
            ]);
            $arrozalestexto = new ArrozalesTexto();
            $arrozalestexto->texto = $request->texto;
            $arrozalestexto->texto_en = $request->texto_en;
            $arrozalestexto->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('arrozales.index')->withErrors($e->getMessage());
        }
        if( App::getLocale() == 'es' ){
            return redirect()->route('arrozales.index', $arrozalestexto)->with('success', 'Texto almacenado correctamente.');
        }else{
            return redirect()->route('arrozales.index', $arrozalestexto)->with('success', 'Stored successfully.');
        }
    }

    public function edit($id) {
        $arrozalestexto = ArrozalesTexto::findOrFail($id);
        $orden_maximo = ArrozalesTexto::get()->count() + 1;

        return view('panel.arrozales.formtexto', compact('arrozalestexto', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $arrozalestexto = ArrozalesTexto::findOrFail($id);
            $arrozalestexto->fill($request->only('texto','texto_en'))->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('arrozales.index')->with('success', 'Actualizado con éxito');
        }else{
            return redirect()->route('arrozales.index')->with('success', 'Successfully Upgraded');
        }
    }

    public function destroy(ArrozalesTexto $arrozalestexto) {
        $arrozalestexto->delete();

        if( App::getLocale() == 'es' ){
            return redirect()->route('arrozales.index')->with('success', 'Eliminado con éxito');
        }else{
            return redirect()->route('arrozales.index')->with('success', 'Successfully Removed');
        }
    }
}
