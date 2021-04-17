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

Route::get('/adesoes/pesquisa', 'AdesaoController@pesquisa')->name('search')->middleware('auth');;

Route::get('/adesoes/remove/{id}', 'AdesaoController@remove')->where('id', '[0-9]+')->middleware('auth');;

#EXIBE UMA OPÇÃO DE VOLTAR CASO A PAGINA NAO EXISTA
Route::fallback(function (){
    echo 'A página que você tentou acessar não existe. Clique <a href="/home">aqui</a> acessar a página inicial.';
});
