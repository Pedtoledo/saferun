<?php

use  App\Events\EventTrigger;

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
Auth::routes();
Route::get('/', function () {
   return view('auth/login');
     
});

Route::get('/telefone','HomeController@telefone');

Route::get('contato', 'SiteController@contato')->name('contato');
Route::post('comentar', 'SiteController@comentar')->name('comentar');
Route::post('comentar/deletar', 'SiteController@deletarComentario')->name('deletarComentario');
Route::get('sobre', 'SiteController@sobre')->name('sobre');
Route::get('home', 'HomeController@index')->name('home');
Route::get('pesquisa', 'HomeController@pesquisar')->name('pesquisa');
Route::post('admpesquisa', 'HomeController@admpesquisar')->name('admpesquisa');
Route::post('usuariopesquisa', 'HomeController@usuariopesquisar')->name('usuariopesquisa');
Route::post('enviar', 'ContatoController@enviaContato');
Route::post('solicitar', 'SolicitarController@solicitar'); 
Route::get('historico', 'HistoricoController@index')->name('historico');
Route::post('acao', 'SolicitarController@acao')->name('acao');
Route::post('nota', 'NotaController@store')->name('nota');
Route::resource('caronas', 'CaronaController');
Route::get('solicitacoes', 'SolicitarController@solicitacoes');
Route::get('/markAsRead', 'SolicitarController@marcarlida');
Route::get('/alertBox', function(){
    return view('eventListener');
});
Route::get('/fireEvent', function(){
   event(new EventTrigger());
});

Route::get('perfil/{id}', 'SiteController@perfil');

Route::group(['middleware' =>'auth:admin'], function(){
    Route::get('/admin', 'AdminController@index');
    Route::resource('admin.caronas', 'CaronaControllerAdmin');
Route::resource('admin/usuarios', 'UserController');

});

Route::get('admin/login', 'AdminController@login');
Route::post('admin/login', 'AdminController@postLogin'); 
Route::get('admin/logout', 'AdminController@logout');
Route::get('carona/{id}', 'CaronaController@unica');

Route::get('tosca', function(){
    return count(auth()->user()->unreadNotifications);
});


  
     
  
