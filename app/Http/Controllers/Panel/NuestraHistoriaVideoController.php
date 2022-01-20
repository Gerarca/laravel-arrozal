<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\NuestraHistoria;
use App\Models\NuestraHistoriaVideo;
use Illuminate\Http\Request;

class NuestraHistoriaVideoController extends Controller
{
    public function index() {
        $NuestraHistoria = NuestraHistoria::all()->sortBy('orden');
        $NuestraHistoriaVideo = NuestraHistoriaVideo::all()->sortBy('orden');

        return view('panel.nuestrahistoria.index', compact('NuestraHistoria', 'NuestraHistoriaVideo'));
    }

    public function create(NuestraHistoriaVideo $nuestrahistoriavideo) {
        $orden_maximo = NuestraHistoriaVideo::get()->count() + 1;

        return view('panel.nuestrahistoria.formnuestrahistoriavideo', compact('nuestrahistoriavideo', 'orden_maximo'));
    }


    public function store(Request $request) {
        try {
            $request->validate([
                'enlace' => 'required',
            ]);
            $NuestraHistoriaVideo = new NuestraHistoriaVideo();
            $NuestraHistoriaVideo->enlace = $request->enlace;
            $NuestraHistoriaVideo->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('nuestrahistoria.index')->withErrors($e->getMessage());
        }

        return redirect()->route('nuestrahistoria.index')->with('success', 'Informacion almacenado correctamente.');
    }

    public function edit($id) {
        $nuestrahistoriavideo = NuestraHistoriaVideo::findOrFail($id);
        $orden_maximo = NuestraHistoriaVideo::get()->count() + 1;

        return view('panel.nuestrahistoria.formnuestrahistoriavideo', compact('nuestrahistoriavideo', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $request->validate([
                'enlace' => 'required',
            ]);
            $NuestraHistoriaVideo = NuestraHistoriaVideo::findOrFail($id);
            $NuestraHistoriaVideo->enlace = $request->enlace;
            $NuestraHistoriaVideo->update();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect()->route('nuestrahistoria.index')->with('success', 'Actualizado con éxito');
    }

    public function destroy(NuestraHistoriaVideo $nuestrahistoriavideo) {
        $nuestrahistoriavideo->delete();

        return redirect()->route('nuestrahistoria.index')->with('success', 'Eliminado con éxito');
    }
}
