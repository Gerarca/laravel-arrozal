<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function noticias(){
        return view('front.noticias');
    }
    public function postNoticias(){
        return view('front.postNoticias');
    }

    public function sendContacto(Request $request) {
        //dd($request);
        $validator = \Validator::make(
            $request->all(),
            [
                'nombre'               => 'required|max:255',
                'email'                => 'required|email|max:255',
                'telefono'             => 'required|max:255',
                'asunto'               => 'required|max:255',
                'mensaje'              => 'required',
                // 'g-recaptcha-response' => ['required', new ReCaptchaRule()],
            ]
        );
        $asunto = $request->asunto;

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

      
        $color_principal = '#222021';

        $nombre = $request->nombre;
        $email = $request->email;
        $telefono = $request->telefono;
        $mensaje = $request->mensaje;

        if ($request->hasFile('archivo')) {
            $filePathName = \Str::slug($nombre) . '-' . time() . '.' . $request->file('archivo')->getClientOriginalExtension();
            $request->file('archivo')->move(base_path() . '/public/uploads/', $filePathName);
        } else {
            $filePathName = null;
        }

    
        try {
            \Mail::send('emails.contacto_email', [
                'nombre'         => $nombre,
                'email'          => $email,
                'telefono'       => $telefono,
                'mensaje'        => $mensaje,
                'asunto'         => $asunto,
                'logo'           => asset('assets_front/images/logo.jpg'),
                'color'          => $color_principal,
                'nombre_empresa' => 'Arrozal',
            ], function ($message) use ($filePathName) {
                $message->from('secretaria@arrozalsa.com.py', 'Arrozal');
                $message->to('secretaria@arrozalsa.com.py', 'Arrozal')->subject('Arrozal - Contacto');
                $message->bcc('paulo@porta.com.py', 'Porta Desarrollo');

                if (strlen($filePathName) >= 1) {
                    $message->attach(base_path() . '/public/uploads/' . $filePathName);
                }

                $message->getSwiftMessage();
            });
        } catch (\Exception $e) {
            \Log::error($e);
            return back()->withInput()->withErrors('Fallo el envio de correo!');
        }

        return redirect(route('front.index'))->with('status', 'El mensaje se envió de manera correcta!');
    }
}
