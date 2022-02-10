<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\NuestraHistoria;
use App\Models\NuestraHistoriaVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class NuestraHistoriaController extends Controller
{
    public function index() {

        if( App::getLocale() == 'es' ){
            $NuestraHistoria = NuestraHistoria::all()->sortBy('orden');
        }else{
            $NuestraHistoria = NuestraHistoria::get(['id','titulo_en as titulo', 'texto_en as texto', 'imagen_en as imagen']);
        }
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
                'imagen_en' => 'required|image',
            ]);
            $fileName = 'nuestrahistoria' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->imagen->move(base_path() . '/public/uploads/', $fileName);
            $fileName_en = 'nuestrahistoria_en' . '-' . time() . '.' . $request->file('imagen_en')->getClientOriginalExtension();
            $request->imagen_en->move(base_path() . '/public/uploads/', $fileName_en);
            $NuestraHistoria = new NuestraHistoria();
            $NuestraHistoria->titulo = $request->titulo;
            $NuestraHistoria->texto = $request->texto;
            $NuestraHistoria->imagen = $fileName;
            $NuestraHistoria->titulo_en = $request->titulo_en;
            $NuestraHistoria->texto_en = $request->texto_en;
            $NuestraHistoria->imagen_en = $fileName_en;
            $NuestraHistoria->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('nuestrahistoria.index')->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('nuestrahistoria.index')->with('success', 'Informacion almacenado correctamente.')
            ->with('imagen', $fileName);
        }else{
            return redirect()->route('nuestrahistoria.index')->with('success', 'Stored successfully.')
            ->with('imagen', $fileName);
        }
    }

    public function edit($id) {
        $nuestrahistoria = NuestraHistoria::findOrFail($id);
        $orden_maximo = NuestraHistoria::get()->count() + 1;

        return view('panel.nuestrahistoria.formnuestrahistoria', compact('nuestrahistoria', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $NuestraHistoria = NuestraHistoria::findOrFail($id);
            $NuestraHistoria->fill($request->only('titulo', 'texto','titulo_en', 'texto_en'))->save();
            if ($request->hasFile('imagen') ) {
                $fileName = 'Nuestrahistoria' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
                $request->imagen->move(base_path() . '/public/uploads/', $fileName);
                $NuestraHistoria->imagen = $fileName;
                $NuestraHistoria->update();
            }
            if ($request->hasFile('imagen_en') ) {
                $fileName_en = 'Nuestrahistoria_en' . '-' . time() . '.' . $request->file('imagen_en')->getClientOriginalExtension();
                $request->imagen_en->move(base_path() . '/public/uploads/', $fileName_en);
                $NuestraHistoria->imagen_en = $fileName_en;
                $NuestraHistoria->update();
            }
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('nuestrahistoria.index', $NuestraHistoria)->with('success', 'Actualizado con éxito');
        }else{
            return redirect()->route('nuestrahistoria.index', $NuestraHistoria)->with('success', 'Successfully upgraded');
        }
    }

    public function destroy(NuestraHistoria $NuestraHistoria) {
        $NuestraHistoria->delete();

        if( App::getLocale() == 'es' ){
            return redirect()->route('nuestrahistoria.index')->with('success', 'Eliminado con éxito');
        }else{
            return redirect()->route('nuestrahistoria.index')->with('success', 'Successfully Removed');
        }
    }
}
