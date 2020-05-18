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

Route::get('/', 'TaskController@index');

Route::get('/add-task', 'TaskController@addTask');

Route::post('/store-task', 'TaskController@store');

Route::get('/delete-task/{task}', 'TaskController@delete');

Route::get('/edit-task/{task}', 'TaskController@editTask');
Route::patch('/store-update/{task}', 'TaskController@storeUpdate');
Route::get('/status-update/{task}', 'TaskController@statusUpdate');
