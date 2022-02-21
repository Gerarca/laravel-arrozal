<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class NoticiaController extends Controller
{
    public function index() {
        if( App::getLocale() == 'es' ){
            $Noticias = Noticia::all()->sortBy('orden');
        }else{
            $Noticias = Noticia::get(['id', 'titulo_en as titulo', 'enlace_en as enlace', 'imagen_en as imagen', 'fuente_en as fuente', 'created_at']);
        }

        return view('panel.noticias.index', compact('Noticias'));
    }

    public function create(Noticia $noticia) {
        $orden_maximo = Noticia::get()->count() + 1;

        return view('panel.noticias.form', compact('noticia', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'imagen' => 'required|image',
                'imagen_en' => 'required|image',
                'year' => 'required'
            ]);
            $fileName = 'Noticia' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->imagen->move(base_path() . '/public/uploads/', $fileName);
            $fileName_en = 'Noticia_en' . '-' . time() . '.' . $request->file('imagen_en')->getClientOriginalExtension();
            $request->imagen_en->move(base_path() . '/public/uploads/', $fileName_en);
            $Noticia = new Noticia();
            $Noticia->imagen = $fileName;
            $Noticia->fuente = $request->fuente;
            $Noticia->titulo = $request->titulo;
            $Noticia->enlace = $request->enlace;
            $Noticia->imagen_en = $fileName_en;
            $Noticia->fuente_en = $request->fuente_en;
            $Noticia->titulo_en = $request->titulo_en;
            $Noticia->enlace_en = $request->enlace_en;
            $Noticia->year = $request->year;
            $Noticia->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('noticias.index')->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('noticias.index', $Noticia)->with('success', 'Noticia almacenado correctamente.')
            ->with('imagen', $fileName);
        }else{
            return redirect()->route('noticias.index', $Noticia)->with('success', 'New stored successfully.')
            ->with('imagen', $fileName);
        }
    }

    public function edit($id) {
        $noticia = Noticia::findOrFail($id);
        $orden_maximo = Noticia::get()->count() + 1;

        return view('panel.noticias.form', compact('noticia', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $Noticia = Noticia::findOrFail($id);
            $Noticia->fill($request->only('titulo', 'enlace', 'fuente', 'titulo_en', 'enlace_en', 'fuente_en', 'year' ))->save();
            if ($request->hasFile('imagen') ) {
                $fileName = 'Noticia' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
                $request->imagen->move(base_path() . '/public/uploads/', $fileName);
                $Noticia->imagen = $fileName;
                $Noticia->update();
            }
            if ($request->hasFile('imagen_en') ) {
                $fileName_en = 'Noticia_en' . '-' . time() . '.' . $request->file('imagen_en')->getClientOriginalExtension();
                $request->imagen_en->move(base_path() . '/public/uploads/', $fileName_en);
                $Noticia->imagen_en = $fileName_en;
                $Noticia->update();
            }
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('noticias.index')->with('success', 'Actualizado con éxito');
        }else{
            return redirect()->route('noticias.index')->with('success', 'Successfully upgraded');
        }
    }

    public function destroy(Noticia $Noticia) {
        $Noticia->delete();

        if( App::getLocale() == 'es' ){
            return redirect()->route('noticias.index')->with('success', 'Eliminado con éxito');
        }else{
            return redirect()->route('noticias.index')->with('success', 'Successfully Removed');
        }
    }
}
