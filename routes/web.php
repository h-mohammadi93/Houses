<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Route::get(
    '/messages/index',
    [MessageController::class, 'index']
)->name('index');

Route::get(
    '/messages/create',
    [MessageController::class, 'create']
)->name('message.create');

Route::post(
    '/messages/store',
    [MessageController::class, 'store']
)->name('message.store');
