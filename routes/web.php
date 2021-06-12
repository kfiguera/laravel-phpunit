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

Route::get('/about', function () {
    return 'Hola soy about';
});

Route::get('profile', [\App\Http\Controllers\ProfileController::class,'index']);

Route::post('profile', [\App\Http\Controllers\ProfileController::class,'store']);
