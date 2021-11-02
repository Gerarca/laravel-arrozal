<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function novedades(){
        return view('front.novedades');
    }
    public function postNovedades(){
        return view('front.postNovedades');
    }
}
