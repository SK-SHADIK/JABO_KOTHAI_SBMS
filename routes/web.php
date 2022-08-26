<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Regestration;
use App\Http\Controllers\Login;

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
Route::get('Regestration',[Regestration::class,'Regestration'])->name('Regestration');
Route::get('Login',[Login::class,'Login'])->name('Login');
