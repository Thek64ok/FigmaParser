<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/create_notify', [\App\Http\Controllers\NotifyController::class, 'create'])->name('create_notify')->middleware('auth');

Route::get('/delete_notify', [\App\Http\Controllers\NotifyController::class, 'delete'])->name('delete_notify')->middleware('auth');

Route::get('/modal', function(Request $request){
    $data = $request->all();
    return view('modal')->with('delete_id', $data['id']);
})->name('modal')->middleware('auth');
