<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  Illuminate\Support\Facades\App;
use App\Models\Contacto;


class ContactoController extends Controller
{
    public function index()
    {
        if( App::getLocale() == 'es' ){
            $contacto = Contacto::all();
        }else{
            $contacto = Contacto::get(['id', 'direccion_en as direccion', 'telefono', 'email', 'horario_en as horario', 'instagram', 'facebook', 'linkedin']);
        }
        return view('panel.contacto.index', compact('contacto'));
    }

    public function create(Contacto $contacto)
    {
        return view('panel.contacto.form', compact('contacto'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'direccion'=> 'required',
            'direccion_en'=> 'required',
            'telefono'=> 'required',
            'email'=> 'required',
            'horario'=> 'required',
            'horario_en'=> 'required',
            'instagram'=> 'required',
            'facebook'=> 'required',
            'linkedin'=> 'required'
        ]);

        $contacto = new Contacto();
        $contacto->direccion = $request->direccion;
        $contacto->direccion_en = $request->direccion_en;
        $contacto->telefono = $request->telefono;
        $contacto->email = $request->email;
        $contacto->horario = $request->horario;
        $contacto->horario_en = $request->horario_en;
        $contacto->instagram = $request->instagram;
        $contacto->facebook = $request->facebook;
        $contacto->linkedin = $request->linkedin;
        $contacto->save();

        if( App::getLocale() == 'es' ){
            return redirect()->route('contacto.index', $contacto)->with('success', 'Informacion almacenado correctamente.');
        }else{
            return redirect()->route('contacto.index', $contacto)->with('success', 'information stored successfully.');
        }
    }

    public function edit($id)
    {
        $contacto = Contacto::findOrFail($id);
        return view('panel.contacto.form', compact('contacto'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'direccion'=> 'required',
            'direccion_en'=> 'required',
            'telefono'=> 'required',
            'email'=> 'required',
            'horario'=> 'required',
            'horario_en'=> 'required',
            'instagram'=> 'required',
            'facebook'=> 'required',
            'linkedin'=> 'required'
        ]);
        $contacto = Contacto::findOrFail($id);

        $contacto->fill($request->only('direccion', 'direccion_en', 'telefono', 'email', 'horario', 'horario_en', 'instagram', 'facebook', 'linkedin'))->save();

        if( App::getLocale() == 'es' ){
            return redirect()->route('contacto.index', $contacto)->with('success', 'Informacion Actualizada correctamente.');
        }else{
            return redirect()->route('contacto.index', $contacto)->with('success', 'Successfully upgraded.');
        }
    }
}
