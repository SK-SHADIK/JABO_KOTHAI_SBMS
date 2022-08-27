<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPassword extends Controller
{
    function ForgotPassword () {
        return view('ForgotPassword');
    }
}
