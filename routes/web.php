<?php

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
    return view('welcome');
});

//Route::get('/',[\App\Http\Controllers\PrincipalController::class,'Principal'])->name('site.index');
Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobre-nos');
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/blog',[\App\Http\Controllers\BlogController::class,'blog'])->name('site.blog');
Route::get('/airport',[\App\Http\Controllers\AirportTransferController::class,'airport'])->name('site.airport');
Route::get('/single-service',[\App\Http\Controllers\SingleServiceController::class,'single'])->name('site.single');
Route::get('/what-our-clients-say',[\App\Http\Controllers\WhatOurClientsController::class,'what'])->name('site.what');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
