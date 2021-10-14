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



Route::resource('/tasks', 'App\Http\Controllers\TasksController')->middleware('auth');

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect()->route('tasks.index');
})->name('dashboard'); */

Route::get('/', 'App\Http\Controllers\TasksController@index');

Route::get('/logOut', 'App\Http\Controllers\TasksController@logOut')->name('logOut');
Route::get('/tasks/{task}', 'App\Http\Controllers\TasksController@show')->name('tasks.show');
Route::put('/tasks/{task}/statusUpdate', 'App\Http\Controllers\TasksController@statusUpdate')->name('tasks.statusUpdate');
