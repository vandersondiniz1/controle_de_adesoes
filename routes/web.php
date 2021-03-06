<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

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

Route::get('/', 'HomeController@index')->middleware('auth');;

Route::get('/home', 'HomeController@index')->middleware('auth');;

Auth::routes();

Route::get('logout', function ()
{
    Session()->flush();
    return redirect('/home');
})->name('logout');

#O MIDDLEWARE(AUTH)VERIFICA SE O USUARIO ESTA LOGADO ANTES DE ACESSAR ALGUMA PAGINA
Route::get('/adesoes', 'AdesaoController@lista')->middleware('auth');;

Route::get('/adesoes/mostra/{adesao}', 'AdesaoController@mostra')->where('adesao', '[0-9]+')->middleware('auth');;

Route::get('/adesoes/pesquisa', 'AdesaoController@pesquisa')->name('adesoes_search')->middleware('auth');;

Route::get('/adesoes/remove/{id}', 'AdesaoController@remove')->where('id', '[0-9]+')->middleware('auth');;

Route::get('/clientes/pesquisa', 'ClienteController@pesquisa')->name('clientes_search')->middleware('auth');;

Route::get('/clientes/remove/{id}', 'ClienteController@remove')->where('id', '[0-9]+')->middleware('auth');;

Route::get('/usuarios/pesquisa', 'UsuarioController@pesquisa')->name('usuarios_search')->middleware('auth');;

Route::get('/usuarios/edita/{id}', 'UsuarioController@edit')->where('id', '[0-9]+')->middleware('auth');;

Route::post('/usuarios/edita/{id}', 'UsuarioController@update')->where('id', '[0-9]+')->name('editar_usuario')->middleware('auth');;

Route::get('/usuarios/pesquisa_varios', 'UsuarioController@pesquisa_varios')->name('usuarios_search_varios')->middleware('auth');;

#EXIBE UMA OPÇÃO DE VOLTAR CASO A PAGINA NAO EXISTA
Route::fallback(function (){
    echo 'A página que você tentou acessar não existe. Clique <a href="/home">aqui</a> acessar a página inicial.';
});
