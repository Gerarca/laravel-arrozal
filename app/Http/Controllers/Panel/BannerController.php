<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller {
    public function index() {
        $banners = Banner::all()->sortBy('orden');

        return view('panel.banner.index', compact('banners'));
    }

    public function create(Banner $banner) {
        $orden_maximo = Banner::get()->count() + 1;

        return view('panel.banner.form', compact('banner', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'imagen' => 'required|image',
            ]);
            $fileName = 'banner' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->imagen->move(base_path() . '/public/uploads/', $fileName);
            $banner = new Banner();
            $banner->imagen = $fileName;
            $banner->titulo = $request->titulo;
            $banner->subtitulo = $request->subtitulo;
            $banner->enlace = $request->enlace;
            $banner->boton = $request->boton;
            $banner->orden = $request->orden;
            $banner->visible = $request['visible'] ? '1' : '0';
            $banner->user_id = \Auth::user()->id;
            $banner->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('banner.index')->withErrors($e->getMessage());
        }

        return redirect()->route('banner.index', $banner)->with('success', 'Banner almacenado correctamente.')
            ->with('imagen', $fileName);
    }

    public function edit($id) {
        $banner = Banner::findOrFail($id);
        $orden_maximo = Banner::get()->count() + 1;

        return view('panel.banner.form', compact('banner', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $banner = Banner::findOrFail($id);
            $request['visible'] = $request['visible'] ? '1' : '0';
            $banner->fill($request->only('titulo', 'subtitulo', 'enlace', 'boton', 'orden', 'visible'))->save();
            if ($request->hasFile('imagen')) {
                $fileName = 'banner' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
                $request->imagen->move(base_path() . '/public/uploads/', $fileName);
                $banner->imagen = $fileName;
                $banner->update();
            }
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        return redirect()->route('banner.index')->with('success', 'Actualizado con éxito');
    }

    public function destroy(Banner $banner) {
        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Eliminado con éxito');
    }
}
