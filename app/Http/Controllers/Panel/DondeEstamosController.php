<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\DondeEstamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class DondeEstamosController extends Controller
{
    public function index() {

        if( App::getLocale() == 'es' ){
            $DondeEstamos = DondeEstamo::all()->sortBy('orden');
        }else{
            $DondeEstamos = DondeEstamo::get(['id','texto_en as texto']);
        }

        return view('panel.nosotros.dondeestamos.index', compact('DondeEstamos'));
    }

    public function create(DondeEstamo $DondeEstamos) {
        $orden_maximo = DondeEstamo::get()->count() + 1;

        return view('panel.nosotros.dondeestamos.form', compact('DondeEstamos', 'orden_maximo'));
    }

    public function store(Request $request) {
        try {
            $request->validate([
                'texto' => 'required',
                'texto_en' => 'required',
            ]);
            $DondeEstamos = new DondeEstamo();
            $DondeEstamos->texto = $request->texto;
            $DondeEstamos->texto_en = $request->texto_en;
            $DondeEstamos->save();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->route('dondeestamos.index')->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('dondeestamos.index')->with('success', 'Banner almacenado correctamente.');
        }else{
            return redirect()->route('dondeestamos.index')->with('success', 'Banner stored successfully.');
        }
    }

    public function edit($id) {
        $DondeEstamos = DondeEstamo::findOrFail($id);
        $orden_maximo = DondeEstamo::get()->count() + 1;

        return view('panel.nosotros.dondeestamos.form', compact('DondeEstamos', 'orden_maximo'));
    }

    public function update(Request $request, $id) {
        try {
            $DondeEstamos = DondeEstamo::findOrFail($id);
            $DondeEstamos->fill($request->only('texto','texto_en'))->save();
            $DondeEstamos->update();
        } catch (\Exception $e) {
            \Log::error($e);

            return redirect()->back()->withErrors($e->getMessage());
        }

        if( App::getLocale() == 'es' ){
            return redirect()->route('dondeestamos.index')->with('success', 'Actualizado con éxito');
        }else{
            return redirect()->route('dondeestamos.index')->with('success', 'Successfully upgraded');
        }
    }

    public function destroy(DondeEstamo $DondeEstamos) {
        $DondeEstamos->delete();

        if( App::getLocale() == 'es' ){
            return redirect()->route('dondeestamos.index')->with('success', 'Eliminado con éxito');
        }else{
            return redirect()->route('dondeestamos.index')->with('success', 'Successfully Removed');
        }
    }
}
