<?php

namespace App\Http\Controllers\Bus_Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bus_company extends Controller
{
    function BusCompanyDashboard () {
        return view('BusCompany.busCompanyDashboard'); 
    }
}
