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
Route::get('/noticias/toyear/{year}', [FrontController::class, 'toyear'])->name('front.noticias.toyear');
Route::get('/postNoticias', [FrontController::class, 'postNoticias'])->name('front.postNoticias');
Route::post('/contacto', [FrontController::class, 'sendContacto'])->name('front.contacto');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

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
            Route::get('editar_perfil', 'UserController@editar_perfil')->name('editar_perfil');
            Route::resource('banner', 'BannerController', ['except' => ['show']]);
            Route::resource('noticias', 'NoticiaController', ['except' => ['show']]);
            Route::get('/noticias/toyear/{year}', ['as' => 'noticias.toyear' , 'uses' => 'NoticiaController@toyear']);
            Route::resource('quienessomos', 'QuienesSomosController', ['except' => ['show']]);
            Route::resource('nuestrahistoria', 'NuestraHistoriaController', ['except' => ['show']]);
            Route::resource('nuestrahistoriavideo', 'NuestraHistoriaVideoController', ['except' => ['show']]);
            Route::resource('copylinkyoutube', 'CopyLinkYoutubeController', ['except' => ['show']]);
            Route::resource('dondeestamos', 'DondeEstamosController', ['except' => ['show']]);
            Route::resource('servicios', 'ServiciosController', ['except' => ['show']]);
            Route::resource('pasantias', 'PasantiasTextoController', ['except' => ['show']]);
            Route::resource('pasantiasimagenes', 'PasantiasImagenesController', ['except' => ['show']]);
            Route::resource('diacampo', 'DiaCampoTextoController', ['except' => ['show']]);
            Route::resource('diacampoimagenes', 'DiaCampoImagenesController', ['except' => ['show']]);
            Route::resource('arrozales', 'ArrozalesTextoController', ['except' => ['show']]);
            Route::resource('arrozalesvideo', 'ArrozalesVideoController', ['except' => ['show']]);
            Route::resource('arrozalesimagenes', 'ArrozalesImagenesController', ['except' => ['show']]);
            Route::resource('users', 'UsersController', ['except' => ['show']]);
            Route::resource('contacto', 'ContactoController', ['except' => ['show']]);
        });
    });
