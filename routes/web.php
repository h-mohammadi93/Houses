<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ClientController;
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


Route::get(
    '/houses',
    [HouseController::class, 'index']
)->name('index');

route::get(
    'houses/create',
    [HouseController::class,'create']
)
->name('house.create');

route::post('/house/store',[HouseController::class,'store'])
->name('house.store');


route::get(
    '/clients/index',
    [ClientController::class,'index']
)->name('index');

route::get('/client/create',[ClientController::class,'create'])
->name('client.create');

route::post('client/store',[ClientController::class,'store'])
->name('client.store');
