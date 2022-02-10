<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\ArrozalesTexto;
use App\Models\ArrozalesImagene;
use App\Models\ArrozalesVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        if( App::getLocale() == 'es' ){
            return redirect()->route('arrozales.index')->with('success', 'Informacion almacenado correctamente.');
        }else{
            return redirect()->route('arrozales.index')->with('success', 'Stored Successfully');
        }
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

        if( App::getLocale() == 'es' ){
            return redirect()->route('arrozales.index')->with('success', 'Actualizado con éxito');
        }else{
            return redirect()->route('arrozales.index')->with('success', 'Successfully upgraded');
        }
    }

    public function destroy(ArrozalesVideo $arrozalesvideo) {
        $arrozalesvideo->delete();

        if( App::getLocale() == 'es' ){
            return redirect()->route('arrozales.index')->with('success', 'Eliminado con éxito');
        }else{
            return redirect()->route('arrozales.index')->with('success', 'Successfully Removed');
        }
    }
}
