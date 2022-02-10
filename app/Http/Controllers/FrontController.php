<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\QuienesSomos;
use App\Models\NuestraHistoria;
use App\Models\NuestraHistoriaVideo;
use App\Models\DondeEstamo;
use App\Models\Servicio;
use App\Models\PasantiasTexto;
use App\Models\PasantiasImagene;
use App\Models\DiaCampoTexto;
use App\Models\DiaCampoImagenes;
use App\Models\ArrozalesTexto;
use App\Models\ArrozalesImagene;
use App\Models\ArrozalesVideo;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;

class FrontController extends Controller
{
    public function index(){

        $banners = Banner::orderBy('orden', 'ASC')->get()->where('visible',1);
        $NuestraHistoriaVideo = NuestraHistoriaVideo::all()->sortBy('orden');
        $PasantiasImagenes = PasantiasImagene::all()->sortBy('orden');
        $DiaCampoImagenes = DiaCampoImagenes::all()->sortBy('orden');
        $ArrozalesVideos = ArrozalesVideo::all()->sortBy('orden');
        $ArrozalesImagenes = ArrozalesImagene::all()->sortBy('orden');

        if( App::getLocale() == 'es' ){
            $quienesSomos = QuienesSomos::all()->sortBy('orden');
            $NuestraHistoria = NuestraHistoria::all()->sortBy('orden');
            $DondeEstamos = DondeEstamo::all()->sortBy('orden');
            $Servicios = Servicio::all()->sortBy('orden');
            $PasantiasTextos = PasantiasTexto::all()->sortBy('orden');
            $DiaCampoTextos = DiaCampoTexto::all()->sortBy('orden');
            $ArrozalesTextos = ArrozalesTexto::all()->sortBy('orden');

        }else{
            $quienesSomos = QuienesSomos::get(['descripcion_en as descripcion', 'mision_en as mision', 'vision_en as vision', 'valores_en as valores', 'imagen_en as imagen']);
            $NuestraHistoria = NuestraHistoria::get(['titulo_en as titulo', 'texto_en as texto', 'imagen_en as imagen']);
            $DondeEstamos = DondeEstamo::get(['texto_en as texto']);
            $Servicios = Servicio::get(['id','titulo_en as titulo', 'texto_en as texto', 'imagen_en as imagen']);
            $PasantiasTextos = PasantiasTexto::get(['texto_en as texto']);
            $DiaCampoTextos = DiaCampoTexto::get(['texto_en as texto']);
            $ArrozalesTextos = ArrozalesTexto::get(['texto_en as texto']);
        }


        return view('front.index', compact('banners','quienesSomos','NuestraHistoria',
        'NuestraHistoriaVideo','DondeEstamos','Servicios','PasantiasTextos','PasantiasImagenes',
        'DiaCampoTextos','DiaCampoImagenes','ArrozalesTextos','ArrozalesVideos','ArrozalesImagenes'));
    }
    public function noticias(){

        if( App::getLocale() == 'es' ){
            $Noticias = Noticia::all()->sortBy('orden');
        }else{
            $Noticias = Noticia::get(['id', 'titulo_en as titulo', 'enlace_en as enlace', 'imagen_en as imagen', 'fuente_en as fuente', 'created_at']);
        }

        $NoticiasAnos = Noticia::get()
                                ->groupBy(function($val) {
                                return Carbon::parse($val->created_at)->format('Y');
                            });
        return view('front.noticias', compact('Noticias','NoticiasAnos'));
    }

    public function toyear($year){
        if( App::getLocale() == 'es' ){
            $Noticias = Noticia::whereYear('created_at', '=' ,$year)->get();
        }else{
            $Noticias = Noticia::whereYear('created_at', '=' ,$year)->get(['id', 'titulo_en as titulo', 'enlace_en as enlace', 'imagen_en as imagen', 'fuente_en as fuente', 'created_at']);
        }
        $NoticiasAnos = Noticia::get()
                                ->groupBy(function($val) {
                                return Carbon::parse($val->created_at)->format('Y');
                            });
        return view('front.noticias', compact('Noticias','NoticiasAnos'));
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
