<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;

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
Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
        Auth::routes();
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/sobre', function(){
    return view('sobre');
});

Route::get('/characters', [App\Http\Controllers\CharactersController::class, 'index'])->middleware('auth');
Route::get('/characters/new', [App\Http\Controllers\CharactersController::class, 'new'])->middleware('auth');
Route::post('/characters/add', [App\Http\Controllers\CharactersController::class, 'add'])->middleware('auth');
Route::get('/characters/{id}/edit', [App\Http\Controllers\CharactersController::class, 'edit'])->middleware('auth');
Route::post('characters/update/{id}', [App\Http\Controllers\CharactersController::class, 'update'])->middleware('auth');
Route::delete('characters/delete/{id}', [App\Http\Controllers\CharactersController::class, 'delete'])->middleware('auth');