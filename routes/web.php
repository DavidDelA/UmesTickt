<?php

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
    return view('welcome');
});
Route :: resource('admi','AdmiController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Paginas solo para Administradores
Route::group(['middleware'=>'App\Http\Middleware\AdminMiddleware'], function(){
    Route::resource('tiposTicket','TiposTicketController',['except' => 'show,index']);
    Route :: resource ('Eventos','EventosController');
});