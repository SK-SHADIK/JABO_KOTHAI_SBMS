<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger\passenger;
use DB;

class Regestration extends Controller
{
    function Regestration () {
        return view('Regestration'); 
    }

    function StoreRegestration(Request $request) {
        $a = new passenger();
        $a->p_name= $request->p_name;
        $a->p_mail= $request->p_mail;
        $a->p_phn= $request->p_phn;
        $a->p_pass= $request->p_pass;
        $a->p_image= $request->p_image;
        $a->p_gender= $request->p_gender;
        $a->save();
        
        return redirect()->route('Login');
    }
}
