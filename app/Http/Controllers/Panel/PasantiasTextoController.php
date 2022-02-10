<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\PasantiasTexto;
use App\Models\PasantiasImagene;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class PasantiasTextoController extends Controller
{
    public function index() {

        if( App::getLocale() == 'es' ){
            $PasantiasTextos = PasantiasTexto::all()->sortBy('orden');
        }else{
            $PasantiasTextos = PasantiasTexto::get(['id','texto_en as texto']);
        }
        $PasantiasImagenes = PasantiasImagene::all()->sortBy('orden');

        return view('panel.pasantias.index', compact('PasantiasTextos','PasantiasImagenes'));
    }

    public function create(PasantiasTexto $pasantiasTexto) {
        $orden_maximo = PasantiasTexto::get()->count() + 1;

        return view('panel.pasantias.formtexto', compact('pasantiasTexto', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'texto' => 'required',
                'texto_en' => 'required',
            ]);
            $pasantiasTexto = new PasantiasTexto();
            $pasantiasTexto->texto = $request->texto;
            $pasantiasTexto->texto_en = $request->texto_en;
            $pasantiasTexto->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('pasantias.index')->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('pasantias.index', $pasantiasTexto)->with('success', 'Texto almacenado correctamente.');
        }else{
            return redirect()->route('pasantias.index', $pasantiasTexto)->with('success', 'Text stored successfully.');
        }
    }

    public function edit($id) {
        $pasantiasTexto = PasantiasTexto::findOrFail($id);
        $orden_maximo = PasantiasTexto::get()->count() + 1;

        return view('panel.pasantias.formtexto', compact('pasantiasTexto', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $pasantiasTexto = PasantiasTexto::findOrFail($id);
            $pasantiasTexto->fill($request->only('texto','texto_en'))->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('pasantias.index')->with('success', 'Actualizado con éxito');
        }else{
            return redirect()->route('pasantias.index')->with('success', 'Successfully upgradedo');
        }
    }

    public function destroy(PasantiasTexto $pasantiasTexto) {
        $pasantiasTexto->delete();

        if( App::getLocale() == 'es' ){
            return redirect()->route('pasantias.index')->with('success', 'Eliminado con éxito');
        }else{
            return redirect()->route('pasantias.index')->with('success', 'Successfully Removed');
        }
    }
}
