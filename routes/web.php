<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datacontroller;
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
Route::get('/buku0004',[datacontroller::Class,'buku0004']);
Route::get('/buku0004/cari',[dataController::Class,'cari']);
Route::get('/view0004',[dataController::Class,'innerjoin']);
Route::get('/view0004/cari',[dataController::Class,'carijoin']);