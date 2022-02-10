<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\DiaCampoTexto;
use App\Models\DiaCampoImagenes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class DiaCampoImagenesController extends Controller
{
    public function index() {
        $DiaCampoTextos = DiaCampoTexto::all()->sortBy('orden');
        $DiaCampoImagenes = DiaCampoImagenes::all()->sortBy('orden');

        return view('panel.diacampo.index', compact('DiaCampoTextos','DiaCampoImagenes'));
    }

    public function create(DiaCampoImagenes $diacampoimagen) {
        $orden_maximo = DiaCampoImagenes::get()->count() + 1;

        return view('panel.diacampo.formimagenes', compact('diacampoimagen', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'imagen' => 'required|image',
            ]);
            $fileName = 'diacampo' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->imagen->move(base_path() . '/public/uploads/', $fileName);
            $diacampoimagen = new DiaCampoImagenes();
            $diacampoimagen->imagen = $fileName;
            $diacampoimagen->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('diacampo.index')->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('diacampo.index', $diacampoimagen)->with('success', 'Imagen almacenado correctamente.')
            ->with('imagen', $fileName);
        }else{
            return redirect()->route('diacampo.index', $diacampoimagen)->with('success', 'Image stored successfully.')
            ->with('imagen', $fileName);
        }
    }

    public function edit($id) {
        $diacampoimagen = DiaCampoImagenes::findOrFail($id);
        $orden_maximo = DiaCampoImagenes::get()->count() + 1;

        return view('panel.diacampo.formimagenes', compact('diacampoimagen', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $diacampoimagen = DiaCampoImagenes::findOrFail($id);
            if ($request->hasFile('imagen')) {
                $fileName = 'diacampo' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
                $request->imagen->move(base_path() . '/public/uploads/', $fileName);
                $diacampoimagen->imagen = $fileName;
                $diacampoimagen->update();
            }
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

    public function destroy(DiaCampoImagenes $diacampoimagen) {
        $diacampoimagen->delete();

        if( App::getLocale() == 'es' ){
            return redirect()->route('diacampo.index')->with('success', 'Eliminado con éxito');
        }else{
            return redirect()->route('diacampo.index')->with('success', 'Successfully Removed');
        }
    }
}
