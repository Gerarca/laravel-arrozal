<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\ArrozalesTexto;
use App\Models\ArrozalesImagene;
use App\Models\ArrozalesVideo;
use Illuminate\Http\Request;

class ArrozalesVideoController extends Controller
{
    public function index() {
        $ArrozalesTextos = ArrozalesTexto::all()->sortBy('orden');
        $ArrozalesVideos = ArrozalesVideo::all()->sortBy('orden');
        $ArrozalesImagenes = ArrozalesImagene::all()->sortBy('orden');

        return view('panel.arrozales.index', compact('ArrozalesTextos','ArrozalesVideos','ArrozalesImagenes'));
    }

    public function create(ArrozalesVideo $arrozalesvideo) {
        $orden_maximo = ArrozalesVideo::get()->count() + 1;

        return view('panel.arrozales.formvideo', compact('arrozalesvideo', 'orden_maximo'));
    }


    public function store(Request $request) {
        try {
            $request->validate([
                'enlace' => 'required',
            ]);
            $arrozalesvideo = new ArrozalesVideo();
            $arrozalesvideo->enlace = $request->enlace;
            $arrozalesvideo->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('arrozales.index')->withErrors($e->getMessage());
        }

        return redirect()->route('arrozales.index')->with('success', 'Informacion almacenado correctamente.');
    }

    public function edit($id) {
        $arrozalesvideo = ArrozalesVideo::findOrFail($id);
        $orden_maximo = ArrozalesVideo::get()->count() + 1;

        return view('panel.arrozales.formvideo', compact('arrozalesvideo', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $request->validate([
                'enlace' => 'required',
            ]);
            $arrozalesvideo = ArrozalesVideo::findOrFail($id);
            $arrozalesvideo->enlace = $request->enlace;
            $arrozalesvideo->update();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect()->route('arrozales.index')->with('success', 'Actualizado con éxito');
    }

    public function destroy(ArrozalesVideo $arrozalesvideo) {
        $arrozalesvideo->delete();

        return redirect()->route('arrozales.index')->with('success', 'Eliminado con éxito');
    }
}
