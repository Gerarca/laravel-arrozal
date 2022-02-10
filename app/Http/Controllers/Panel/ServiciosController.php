<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class ServiciosController extends Controller
{
    public function index() {

        if( App::getLocale() == 'es' ){
            $Servicios = Servicio::all()->sortBy('orden');
        }else{
            $Servicios = Servicio::get(['id','titulo_en as titulo', 'texto_en as texto', 'imagen_en as imagen']);
        }

        return view('panel.servicios.index', compact('Servicios'));
    }

    public function create(Servicio $servicio) {
        $orden_maximo = Servicio::get()->count() + 1;

        return view('panel.servicios.form', compact('servicio', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'imagen' => 'required|image',
                'imagen_en' => 'required|image',
            ]);
            $fileName = 'servicios' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->imagen->move(base_path() . '/public/uploads/', $fileName);
            $fileName_en = 'servicios_en' . '-' . time() . '.' . $request->file('imagen_en')->getClientOriginalExtension();
            $request->imagen_en->move(base_path() . '/public/uploads/', $fileName_en);
            $Servicios = new Servicio();
            $Servicios->imagen = $fileName;
            $Servicios->titulo = $request->titulo;
            $Servicios->texto = $request->texto;
            $Servicios->imagen_en = $fileName_en;
            $Servicios->titulo_en = $request->titulo_en;
            $Servicios->texto_en = $request->texto_en;
            $Servicios->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('servicios.index')->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('servicios.index', $Servicios)->with('success', 'Servicio almacenado correctamente.')
            ->with('imagen', $fileName);
        }else{
            return redirect()->route('servicios.index', $Servicios)->with('success', 'Service stored successfully.')
            ->with('imagen', $fileName);
        }
    }

    public function edit($id) {
        $servicio = Servicio::findOrFail($id);
        $orden_maximo = Servicio::get()->count() + 1;

        return view('panel.servicios.form', compact('servicio', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $Servicios = Servicio::findOrFail($id);
            $Servicios->fill($request->only('titulo', 'texto', 'titulo_en', 'texto_en'))->save();
            if ($request->hasFile('imagen')) {
                $fileName = 'servicios' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
                $request->imagen->move(base_path() . '/public/uploads/', $fileName);
                $Servicios->imagen = $fileName;
                $Servicios->update();
            }
            if ($request->hasFile('imagen_en')) {
                $fileName_en = 'servicios_en' . '-' . time() . '.' . $request->file('imagen_en')->getClientOriginalExtension();
                $request->imagen_en->move(base_path() . '/public/uploads/', $fileName_en);
                $Servicios->imagen_en = $fileName_en;
                $Servicios->update();
            }
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }
        if( App::getLocale() == 'es' ){
            return redirect()->route('servicios.index')->with('success', 'Actualizado con éxito');
        }else{
            return redirect()->route('servicios.index')->with('success', 'Successfully upgraded');
        }
    }

    public function destroy(Servicio $servicio) {
        $servicio->delete();

        if( App::getLocale() == 'es' ){
            return redirect()->route('servicios.index')->with('success', 'Eliminado con éxito');
        }else{
            return redirect()->route('servicios.index')->with('success', 'Successfully Removed');;
        }
    }
}
