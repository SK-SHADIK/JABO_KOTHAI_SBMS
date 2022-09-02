<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Passenger\passenger;
use App\Models\Student\student;
use App\Models\Admin\admin;
use App\Models\Bus_Company\bus_company;
use DB;

class Login extends Controller
{
    function Login () {
        return view('Login');
    }
}
