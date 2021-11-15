<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('site.cadastro');
})-> name('site.cadastro');

Route::get('/home', function () {
    return view('site.home');
}) -> name('site.home');

Route::get('/servicos', function () {
    return view('site.servicos');
})-> name('site.servicos');


Route::get('/contato', function () {
    return view('site.contato');
})-> name('site.contato');

Route::post('/register/new', [UserController::class, 'register']);
