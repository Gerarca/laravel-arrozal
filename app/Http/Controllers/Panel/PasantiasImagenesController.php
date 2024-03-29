<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\PasantiasTexto;
use App\Models\PasantiasImagene;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PasantiasImagenesController extends Controller
{
    public function index() {
        $PasantiasTextos = PasantiasTexto::all()->sortBy('orden');
        $PasantiasImagenes = PasantiasImagene::all()->sortBy('orden');

        return view('panel.pasantias.index', compact('PasantiasTextos','PasantiasImagenes'));
    }

    public function create(PasantiasImagene $pasantiasImagen) {
        $orden_maximo = PasantiasImagene::get()->count() + 1;

        return view('panel.pasantias.formimagenes', compact('pasantiasImagen', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'imagen' => 'required|image',
            ]);
            $fileName = 'pasantias' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->imagen->move(base_path() . '/public/uploads/', $fileName);
            $pasantiasImagen = new PasantiasImagene();
            $pasantiasImagen->imagen = $fileName;
            $pasantiasImagen->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('pasantias.index')->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('pasantias.index', $pasantiasImagen)->with('success', 'Imagen almacenado correctamente.')
            ->with('imagen', $fileName);
        }else{
            return redirect()->route('pasantias.index', $pasantiasImagen)->with('success', 'Image stored successfully.')
            ->with('imagen', $fileName);
        }
    }

    public function edit($id) {
        $pasantiasImagen = PasantiasImagene::findOrFail($id);
        $orden_maximo = PasantiasImagene::get()->count() + 1;

        return view('panel.pasantias.formimagenes', compact('pasantiasImagen', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $pasantiasImagen = PasantiasImagene::findOrFail($id);
            if ($request->hasFile('imagen')) {
                $fileName = 'pasantias' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
                $request->imagen->move(base_path() . '/public/uploads/', $fileName);
                $pasantiasImagen->imagen = $fileName;
                $pasantiasImagen->update();
            }
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('pasantias.index')->with('success', 'Actualizado con éxito');
        }else{
            return redirect()->route('pasantias.index')->with('success', 'Successfully upgraded');
        }
    }

    public function destroy(PasantiasImagene $pasantiasImagen) {
        $pasantiasImagen->delete();

        if( App::getLocale() == 'es' ){
            return redirect()->route('pasantias.index')->with('success', 'Eliminado con éxito');
        }else{
            return redirect()->route('pasantias.index')->with('success', 'Successfully Removed');
        }
    }
}
