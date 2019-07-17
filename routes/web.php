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

Route::get('/login',function(){
    return view('login');
})->name('Login');

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware('auth'); //se le pone el middleware que valida si esta autenticado

//rutas de acciones para el login
Route::post('/entrar','Auth\LoginController@Login')->name('Entrar');
Route::get('/salir','Auth\LoginController@Salir')->name('Salir');

Route::get('/crear',function(){

    $usuario = factory(App\User::class)->create();

    return $usuario;

});
