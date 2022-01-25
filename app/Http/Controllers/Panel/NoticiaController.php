<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index() {
        $Noticias = Noticia::all()->sortBy('orden');

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
            ]);
            $fileName = 'Noticia' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->imagen->move(base_path() . '/public/uploads/', $fileName);
            $Noticia = new Noticia();
            $Noticia->imagen = $fileName;
            $Noticia->fuente = $request->fuente;
            $Noticia->titulo = $request->titulo;
            $Noticia->enlace = $request->enlace;
            $Noticia->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('noticias.index')->withErrors($e->getMessage());
        }

        return redirect()->route('noticias.index', $Noticia)->with('success', 'Noticia almacenado correctamente.')
            ->with('imagen', $fileName);
    }

    public function edit($id) {
        $noticia = Noticia::findOrFail($id);
        $orden_maximo = Noticia::get()->count() + 1;

        return view('panel.noticias.form', compact('noticia', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $Noticia = Noticia::findOrFail($id);
            $Noticia->fill($request->only('titulo', 'enlace', 'fuente' ))->save();
            if ($request->hasFile('imagen')) {
                $fileName = 'Noticia' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
                $request->imagen->move(base_path() . '/public/uploads/', $fileName);
                $Noticia->imagen = $fileName;
                $Noticia->update();
            }
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect()->route('noticias.index')->with('success', 'Actualizado con éxito');
    }

    public function destroy(Noticia $Noticia) {
        $Noticia->delete();

        return redirect()->route('noticias.index')->with('success', 'Eliminado con éxito');
    }
}
