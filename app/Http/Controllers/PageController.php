<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display all the static pages when authenticated
     *
     * @return \Illuminate\View\View
     */
    public function index(string $page) {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        return abort(404);
    }
}
