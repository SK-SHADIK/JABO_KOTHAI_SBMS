<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin extends Controller
{
    function AdminDashboard () {
        return view('Admin.adminDashboard'); 
    }
}
