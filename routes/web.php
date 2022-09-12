<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home;
use App\Http\Controllers\Regestration;
use App\Http\Controllers\Login;
use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\Admin\admin;
use App\Http\Controllers\Student\student;
use App\Http\Controllers\Passenger\passenger;
use App\Http\Controllers\Bus_Company\bus_company;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// ---------------------------------------------- LOGIN REGESTRATION ----------------------------------------------
Route::get('/',[Home::class,'Home'])->name('Home');
Route::get('Regestration',[Regestration::class,'Regestration'])->name('Regestration');
Route::post('Regestration',[Regestration::class,'StoreRegestration'])->name('StoreRegestration');
Route::get('Login',[Login::class,'Login'])->name('Login');
Route::post('Login',[Login::class,'StoreLogin'])->name('StoreLogin');
Route::get('ForgotPassword',[ForgotPassword::class,'ForgotPassword'])->name('ForgotPassword');
Route::post('ForgotPassword',[ForgotPassword::class,'StoreForgotPassword'])->name('StoreForgotPassword');
Route::get('ForgotPasswordGmail',[ForgotPassword::class,'ForgotPasswordGmail'])->name('ForgotPasswordGmail');

// ---------------------------------------------- ADMIN ----------------------------------------------

Route::get('Admin/adminDashboard',[admin::class,'AdminDashboard'])->name('Admin.adminDashboard');

// ---------------------------------------------- STUDENT ----------------------------------------------

Route::get('Student/studentDashboard',[student::class,'StudentDashboard'])->name('Student.studentDashboard');

// ---------------------------------------------- PASSENGER ----------------------------------------------

Route::get('Passenger/passengerDashboard',[passenger::class,'PassengerDashboard'])->name('Passenger.passengerDashboard');

// ---------------------------------------------- BUS COMPANY ----------------------------------------------

Route::get('BusCompany/busCompanyDashboard',[bus_company::class,'BusCompanyDashboard'])->name('BusCompany.busCompanyDashboard');
