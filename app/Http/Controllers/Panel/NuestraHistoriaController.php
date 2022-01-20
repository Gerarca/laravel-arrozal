<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\NuestraHistoria;
use App\Models\NuestraHistoriaVideo;
use Illuminate\Http\Request;

class NuestraHistoriaController extends Controller
{
    public function index() {
        $NuestraHistoria = NuestraHistoria::all()->sortBy('orden');
        $NuestraHistoriaVideo = NuestraHistoriaVideo::all()->sortBy('orden');

        return view('panel.nuestrahistoria.index', compact('NuestraHistoria', 'NuestraHistoriaVideo'));
    }

    public function create(NuestraHistoria $nuestrahistoria) {
        $orden_maximo = NuestraHistoria::get()->count() + 1;

        return view('panel.nuestrahistoria.formnuestrahistoria', compact('nuestrahistoria', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'imagen' => 'required|image',
            ]);
            $fileName = 'nuestrahistoria' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->imagen->move(base_path() . '/public/uploads/', $fileName);
            $NuestraHistoria = new NuestraHistoria();
            $NuestraHistoria->titulo = $request->titulo;
            $NuestraHistoria->texto = $request->texto;
            $NuestraHistoria->imagen = $fileName;
            $NuestraHistoria->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('nuestrahistoria.index')->withErrors($e->getMessage());
        }

        return redirect()->route('nuestrahistoria.index')->with('success', 'Informacion almacenado correctamente.')
            ->with('imagen', $fileName);
    }

    public function edit($id) {
        $nuestrahistoria = NuestraHistoria::findOrFail($id);
        $orden_maximo = NuestraHistoria::get()->count() + 1;

        return view('panel.nuestrahistoria.formnuestrahistoria', compact('nuestrahistoria', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $NuestraHistoria = NuestraHistoria::findOrFail($id);
            $NuestraHistoria->fill($request->only('titulo', 'texto'))->save();
            if ($request->hasFile('imagen')) {
                $fileName = 'nuestrahistoria' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
                $request->imagen->move(base_path() . '/public/uploads/', $fileName);
                $NuestraHistoria->titulo = $request->titulo;
                $NuestraHistoria->texto = $request->texto;
                $NuestraHistoria->imagen = $fileName;
                $NuestraHistoria->update();
            }
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect()->route('nuestrahistoria.index', $NuestraHistoria)->with('success', 'Actualizado con éxito');
    }

    public function destroy(NuestraHistoria $NuestraHistoria) {
        $NuestraHistoria->delete();

        return redirect()->route('nuestrahistoria.index')->with('success', 'Eliminado con éxito');
    }
}
