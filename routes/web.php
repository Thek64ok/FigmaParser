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

Route::get('/start_page', [\App\Http\Controllers\NotifyController::class, 'show'])->middleware('auth');

/*Route::get('/get_notify', function(){
    ;
})->name('notify')->middleware('auth');*/

Route::get('/modal', function(){
    return view('modal');
})->name('modal')->middleware('auth');

Route::get('/create_notify', [\App\Http\Controllers\NotifyController::class, 'create'])->name('create_notify')->middleware('auth');
