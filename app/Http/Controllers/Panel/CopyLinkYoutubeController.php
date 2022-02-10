<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CopyLinkYoutubeController extends Controller
{
    public function index(){
        return view('panel.nuestrahistoria.copiarlinkvideo');
    }
}
