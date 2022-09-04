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
    function StoreLogin (Request $req) {
        $this->validate($req,
            [
                "mail"=>"required",
                "pass"=>"required",
            ],
            [
                "mail.required"=> "Please provide your email!!!",
                "pass.required"=> "Please provide your password!!!",
            ]
        );
        $user1 = admin::where('a_mail', '=', $req->mail)->first();
        $user2 = student::where('s_mail', '=', $req->mail)->first();
        $user3 = passenger::where('p_mail', '=', $req->mail)->first();
        $user4 = bus_company::where('bCom_mail', '=', $req->mail)->first();
        if($user1){
            if($req->pass == $user1->a_pass){

                return redirect()->route('Admin.adminDashboard');

            }else{
                return back()->with('fail','Password Is Incorrect Please Try Again!!!');
            }

        }elseif($user2){
            if($req->pass == $user2->s_pass){

                return redirect()->route('Student.studentDashboard');

            }else{
                return back()->with('fail','Password Is Incorrect Please Try Again!!!');
            }
        }elseif($user3){
            if($req->pass == $user3->p_pass){
                return redirect()->route('Passenger.passengerDashboard');

            }else{
                return back()->with('fail','Password Is Incorrect Please Try Again!!!');
            }
        }elseif($user4){
            if($req->pass == $user4->bCom_pass){
                return redirect()->route('BusCompany.busCompanyDashboard');

            }else{
                return back()->with('fail','Password Is Incorrect Please Try Again!!!');
            }
        }else{
            return back()->with('fail','This Email Is Not Registered Please Try Again!!!');
        }

    }
    
}
