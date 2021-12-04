<?php
use Illuminate\Support\Facades\Route;
//Agregamos los controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RentaController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CatalogoController;
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

Route::get('/', function () {
    return view('principal');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('pelicula','App\Http\Controllers\PeliculaController');
    Route::get('api/v1/peliculas','PeliculaController@getPeliculas');

    Route::resource('cliente','App\Http\Controllers\ClienteController');
    Route::get('/v1/clientes','ClienteController@getClientes');

    Route::resource('renta','App\Http\Controllers\RentaController');
    Route::get('/v1/rentas','RentaController@getRentas');

    Route::resource('membresia','App\Http\Controllers\MembresiaController');
    Route::get('/v1/membresias','MembresiaController@getMembresias');
    Route::resource('join', JoinController::class);
    Route::resource('catalogo','App\Http\Controllers\CatalogoController');
});

