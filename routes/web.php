<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::post('/contacto', [FrontController::class, 'sendContacto'])->name('front.contacto');
/*
Route::group(['namespace' => 'App\Http\Controllers\Panel', 'prefix' => 'panel'], function () {
    Route::resource('banner', 'BannerController', ['except' => ['show']]);
    Route::resource('noticias', 'NoticiaController', ['except' => ['show']]);
});
*/

Auth::routes(['register' => false]);
Route::get('/panel', [App\Http\Controllers\HomeController::class, 'index'])->name('panel');
    Route::middleware('auth')->group(function () {
        Route::get('{page}', ['as' => 'page.index', 'uses' => [App\Http\Controllers\PageController::class, 'index']]);
        Route::group(['namespace' => 'App\Http\Controllers\Panel', 'prefix' => 'panel'], function () {
            Route::resource('banner', 'BannerController', ['except' => ['show']]);
            Route::resource('noticias', 'NoticiaController', ['except' => ['show']]);
            Route::get('editar_perfil', 'UserController@editar_perfil')->name('editar_perfil');
        });
    });
