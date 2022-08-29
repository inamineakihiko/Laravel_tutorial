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

Route::view('/hello', 'hello', ["foo" => "bar"]);
Route::view('/hello/message', 'message', ["hello" => "こんにちわ！"]);

Route::get('/test', 'App\Http\Controllers\TestController@index');

Route::get('test/create', 'App\Http\Controllers\TestController@create');

Route::get('test/create2', 'App\Http\Controllers\TestController@create2');

Route::get('/folders/{id}/tasks', 'App\Http\Controllers\TaskController@index')->name('tasks.index');