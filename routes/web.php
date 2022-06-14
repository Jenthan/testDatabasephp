<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/testonetoonedb',[UserController::class,'insertrecord']);

Route::get('/testonetoonenextdb',[UserController::class,'insertfarmer']);

Route::get('/testonetoonethreedb',[UserController::class,'insertvender']);