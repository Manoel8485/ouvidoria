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

use App\Http\Controllers\PostController;
use App\Http\Controllers\RelatorioController;
Route::get('/', function () {
    return view('welcome');
});
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::get('/posts',[PostController::class,'index'])->name('posts.index');

/*Route::get('relatorio',[RelatorioController::class, 'index']);
*/ 
