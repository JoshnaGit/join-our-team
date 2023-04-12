<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\UrlShortenerController;
use App\Http\Controllers\UrlDisplayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\UrlController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/shorten-url', [App\Http\Controllers\UrlShortenerController::class, 'shortenUrl'])->name('url.shorten');
Route::get('/index', function(){
    return view('urls.index');
});

Route::get('/display',[App\Http\Controllers\UrlDisplayController::class, 'displayUrl'])->name('urls.display');