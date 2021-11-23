<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContatoController;
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
    return view('site.home');
}) -> name('site.home');

Route::get('/pageregister', function () {
    return view('auth.register');
})-> name('auth.register');

Route::get('/pagelogin', function () {
    return view('auth.login');
})-> name('auth.login');

Route::get('/servicos', function () {
    return view('site.servicos');
})-> name('site.servicos');


Route::get('/contato', function () {
    return view('site.contato');
})-> name('site.contato');

Route::post('/register/new', [UserController::class, 'register']);

Route::post('/contato', [ContatoController::class, 'register']);

Route::get('/admin',[ContatoController::class,'mensagem']) -> name("site.admin");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('site.home');
})->name('dashboard');
