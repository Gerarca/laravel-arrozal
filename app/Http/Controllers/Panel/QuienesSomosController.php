<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\QuienesSomos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class QuienesSomosController extends Controller
{
    public function index() {

        if( App::getLocale() == 'es' ){
            $QuienesSomos = QuienesSomos::all()->sortBy('orden');
        }else{
            $QuienesSomos = QuienesSomos::get(['id','descripcion_en as descripcion', 'mision_en as mision', 'vision_en as vision', 'valores_en as valores', 'imagen_en as imagen']);
        }

        return view('panel.nosotros.quienessomos.index', compact('QuienesSomos'));
    }

    public function create(QuienesSomos $quienesSomos) {
        $orden_maximo = QuienesSomos::get()->count() + 1;

        return view('panel.nosotros.quienessomos.form', compact('quienesSomos', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'imagen' => 'required|image',
                'imagen_en' => 'required|image',
            ]);
            $fileName = 'quienesSomos' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $request->imagen->move(base_path() . '/public/uploads/', $fileName);
            $fileName_en = 'quienesSomos_en' . '-' . time() . '.' . $request->file('imagen_en')->getClientOriginalExtension();
            $request->imagen_en->move(base_path() . '/public/uploads/', $fileName_en);
            $QuienesSomos = new QuienesSomos();
            $QuienesSomos->descripcion = $request->descripcion;
            $QuienesSomos->mision = $request->mision;
            $QuienesSomos->vision = $request->vision;
            $QuienesSomos->valores = $request->valores;
            $QuienesSomos->imagen = $fileName;
            $QuienesSomos->descripcion_en = $request->descripcion_en;
            $QuienesSomos->mision_en = $request->mision_en;
            $QuienesSomos->vision_en = $request->vision_en;
            $QuienesSomos->valores_en = $request->valores_en;
            $QuienesSomos->imagen_en = $fileName_en;
            $QuienesSomos->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('quienessomos.index')->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('quienessomos.index', $QuienesSomos)->with('success', 'Informacion almacenado correctamente.')
            ->with('imagen', $fileName);
        }else{
            return redirect()->route('quienessomos.index', $QuienesSomos)->with('success', 'Stored successfully.')
            ->with('imagen', $fileName);;
        }
    }

    public function edit($id) {
        $quienesSomos = QuienesSomos::findOrFail($id);
        $orden_maximo = QuienesSomos::get()->count() + 1;

        return view('panel.nosotros.quienessomos.form', compact('quienesSomos', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $QuienesSomos = QuienesSomos::findOrFail($id);
            $QuienesSomos->fill($request->only('descripcion', 'mision', 'vision', 'valores', 'descripcion_en', 'mision_en', 'vision_en', 'valores_en'))->save();
            if ($request->hasFile('imagen') ) {
                $fileName = 'quienesSomos' . '-' . time() . '.' . $request->file('imagen')->getClientOriginalExtension();
                $request->imagen->move(base_path() . '/public/uploads/', $fileName);
                $QuienesSomos->imagen = $fileName;
                $QuienesSomos->update();
            }
            if ($request->hasFile('imagen_en') ) {
                $fileName_en = 'quienesSomos_en' . '-' . time() . '.' . $request->file('imagen_en')->getClientOriginalExtension();
                $request->imagen_en->move(base_path() . '/public/uploads/', $fileName_en);
                $QuienesSomos->imagen_en = $fileName_en;
                $QuienesSomos->update();
            }
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('quienessomos.index')->with('success', 'Actualizado con éxito');
        }else{
            return redirect()->route('quienessomos.index')->with('success', 'Successfully upgraded');
        }
    }
}
