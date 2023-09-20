<?php

use App\Mail\MensagemTesteMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
    return view('bem-vindo');
});

Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
// ->name('home')
// ->middleware('verified');
Route::get('tarefa/exportacao', 'App\Http\Controllers\TarefaController@exportacao')->name("tarefa.exportacao");
Route::resource('tarefa', 'App\Http\Controllers\TarefaController')->middleware('verified');

Route::get("mensagem-teste", function(){
    return new MensagemTesteMail();
    // Mail::to("contato.luiz1997@hotmail.com")->send(new MensagemTesteMail());
    // return 'Email enviado com sucesso!';
});
