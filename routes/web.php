<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect('/', config('app.url') . '/inicio');
Route::get('/inicio', [FrontController::class, 'index'])->name('front.index');
Route::get('/noticias', [FrontController::class, 'noticias'])->name('front.noticias');
Route::get('/postNoticias', [FrontController::class, 'postNoticias'])->name('front.postNoticias');




