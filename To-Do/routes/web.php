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
    return view('home');
})->name('home-page');

Route::get(
    '/user',
    'App\Http\Controllers\UserController@getData'
)->name('user-page');

Route::post(
    '/user/submit',
    'App\Http\Controllers\UserController@addTask'
)->name('user-add');

Route::get(
    '/user/{id}/delete',
    'App\Http\Controllers\UserController@destroyData'
)->name('task-delete');
    