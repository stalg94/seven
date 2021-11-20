<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;
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


//Route::get('/todos', [TodoController::class,'index'])->name('todo.index');
//Route::get('/todos/create', [TodoController::class,'create']);
//Route::get('/todos/{todo}/edit', [TodoController::class,'edit']);
//Route::patch('/todos/{todo}/update', [TodoController::class,'update'])->name('todo.update');
//Route::delete('/todos/{todo}/delete', [TodoController::class,'delete'])->name('todo.delete');
//Route::post('/todos/create', [TodoController::class,'store']);


//Route::middleware('auth')->group(function(){
    Route::resource('/todo','App\Http\Controllers\TodoController')->middleware('auth');
    Route::put('/todos/{todo}/complete', [TodoController::class,'complete'])->name('todo.complete');
    Route::delete('/todos/{todo}/incomplete', [TodoController::class,'incomplete'])->name('todo.incomplete');
//});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class,'index']);
Route::post('/upload', [UserController::class,'uploadAvatar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
