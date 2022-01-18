<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NoticiaController extends Controller
{
    public function index() {
        $Noticias = Noticia::all()->sortBy('orden');

        return view('panel.noticias.index', compact('Noticias'));
    }

    public function create(Noticia $Noticia) {
        $orden_maximo = Noticia::get()->count() + 1;

        return view('panel.noticias.form', compact('Noticia', 'orden_maximo'));
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
            $Noticia->titulo = $request->titulo;
            $Noticia->enlace = $request->enlace;
            $Noticia->fecha = Carbon::now()->toTimeString();
            $Noticia->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('noticia.index')->withErrors($e->getMessage());
        }

        return redirect()->route('noticia.index', $Noticia)->with('success', 'Noticia almacenado correctamente.')
            ->with('imagen', $fileName);
    }

    public function edit($id) {
        $Noticia = Noticia::findOrFail($id);
        $orden_maximo = Noticia::get()->count() + 1;

        return view('panel.noticias.form', compact('Noticia', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $Noticia = Noticia::findOrFail($id);
            $Noticia->fill($request->only('titulo', 'enlace', Carbon::now()->toTimeString() ))->save();
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

        return redirect()->route('noticia.index')->with('success', 'Actualizado con éxito');
    }

    public function destroy(Noticia $Noticia) {
        $Noticia->delete();

        return redirect()->route('noticia.index')->with('success', 'Eliminado con éxito');
    }
}
