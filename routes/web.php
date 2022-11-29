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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/start_page', function(){
    return view('start_page');
})->middleware('auth');

Route::get('/get_notify', function(){
    return view('notify');
})->name('notify')->middleware('auth');

Route::get('/modal', function(){
    return view('modal');
})->name('modal')->middleware('auth');
