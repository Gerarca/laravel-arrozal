<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\ArrozalesTexto;
use App\Models\ArrozalesImagene;
use App\Models\ArrozalesVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ArrozalesImagenesController extends Controller
{
    public function index() {
        $ArrozalesTextos = ArrozalesTexto::all()->sortBy('orden');
        $ArrozalesVideos = ArrozalesVideo::all()->sortBy('orden');
        $ArrozalesImagenes = ArrozalesImagene::all()->sortBy('orden');

        return view('panel.arrozales.index', compact('ArrozalesTextos','ArrozalesVideos','ArrozalesImagenes'));
    }

    public function create(ArrozalesImagene $arrozalesimagen) {
        $orden_maximo = ArrozalesImagene::get()->count() + 1;

        return view('panel.arrozales.formimagenes', compact('arrozalesimagen', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'imagen' => 'required|image',
            ]);
            $fileName = 'arrozales' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->imagen->move(base_path() . '/public/uploads/', $fileName);
            $arrozalesimagen = new ArrozalesImagene();
            $arrozalesimagen->imagen = $fileName;
            $arrozalesimagen->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('arrozales.index')->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('arrozales.index', $arrozalesimagen)->with('success', 'Imagen almacenado correctamente.')
            ->with('imagen', $fileName);
        }else{
            return redirect()->route('arrozales.index', $arrozalesimagen)->with('success', 'Image stored successfully.')
            ->with('imagen', $fileName);
        }
    }

    public function edit($id) {
        $arrozalesimagen = ArrozalesImagene::findOrFail($id);
        $orden_maximo = ArrozalesImagene::get()->count() + 1;

        return view('panel.arrozales.formimagenes', compact('arrozalesimagen', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $arrozalesimagen = ArrozalesImagene::findOrFail($id);
            if ($request->hasFile('imagen')) {
                $fileName = 'arrozales' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
                $request->imagen->move(base_path() . '/public/uploads/', $fileName);
                $arrozalesimagen->imagen = $fileName;
                $arrozalesimagen->update();
            }
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }
        if( App::getLocale() == 'es' ){
            return redirect()->route('arrozales.index')->with('success', 'Actualizado con éxito');
        }else{
            return redirect()->route('arrozales.index')->with('success', 'Successfully upgraded');;
        }
    }

    public function destroy($id) {
        $arrozalesimagen = ArrozalesImagene::find($id);
        $arrozalesimagen->delete();

        if( App::getLocale() == 'es' ){
            return redirect()->route('arrozales.index')->with('success', 'Eliminado con éxito');
        }else{
            return redirect()->route('arrozales.index')->with('success', 'Successfully Removed');
        }
    }
}
