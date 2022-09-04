<?php

namespace App\Http\Controllers\Passenger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class passenger extends Controller
{
    function PassengerDashboard () {
        return view('Passenger.passengerDashboard'); 
    }
}
