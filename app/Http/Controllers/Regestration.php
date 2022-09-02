<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Passenger\passenger;
use App\Models\Student\student;
use App\Models\Admin\admin;
use App\Models\Bus_Company\bus_company;
use DB;

class Regestration extends Controller
{
    function Regestration () {
        return view('Regestration'); 
    }

    function StoreRegestration(Request $request) {
        $this->validate($request,
             [
                "fname"=>"required|regex:^[a-zA-Z\s\.\-]+$^",//SMALL AND CAPITAL & . & - ACCEPTED
                "lname"=>"required|regex:^[a-zA-Z\s\.\-]+$^",//SMALL AND CAPITAL & . & - ACCEPTED
                "mail"=>"required|unique:student,s_mail|unique:passenger,p_mail|unique:bus_company,bCom_mail|regex:/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}+$/i",//like: abc@gmail.com
                "phn"=>"required|regex:/^\+[8]{2}[0-9]{11}+$/i",//11 Digits And Need +880
                "ggender"=>"required",
                "pass"=>"required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",//MUST 8 CHARECTER, Symbol, Capital & Small
                "repass"=>"required|same:pass",
                "type"=>"required",
             ],
             [
                "fname.required"=> "Please provide your first name!!!",
                "fname.regex"=> "Please provide your name properly (. & - is accepted)!!!",
                "lname.required"=> "Please provide your last name!!!",
                "lname.regex"=> "Please provide your name properly (. & - is accepted)!!!",
                "mail.required"=> "Please provide your email!!!",
                "mail.unique"=> "This mail is already register please try another mail or login!!!",
                "mail.regex"=> "Please provide correct email like abc@gmail.com!!!",
                "phn.required"=> "Please provide your phone number!!!",
                "phn.regex"=> "Please provide correct phone number like +880---------!!!",
                "ggender.required"=> "Please provide your gender!!!",
                "pass.required"=> "Please provide your password!!!",
                "pass.regex"=> "Please provide password which have 8 charecter, capital and small letter & symbol like @ABcd12#!!!",
                "repass.required"=> "Please provide password again!!!",
                "repass.same"=> "your password is not match please check again!!!",
                "type.required"=> "Please must be provide user type!!!",


             ]
        );
        if ($request->type == "Student"){
            $a = new student();
            $a->s_name= $request->fname;
            $a->s_name= $request->lname;
            $a->s_mail= $request->mail;
            $a->s_phn= $request->phn;
            $a->s_pass= md5($request->repass);
            $a->s_image= $request->image;
            $a->s_gender= $request->ggender;
            $a->save();
            
            return redirect()->route('Login');

        }
        elseif ($request->type == "Normal Passenger"){
            $a = new passenger();
            $a->p_name= $request->fname;
            $a->p_name= $request->lname;
            $a->p_mail= $request->mail;
            $a->p_phn= $request->phn;
            $a->p_pass= md5($request->repass);
            $a->p_image= $request->image;
            $a->p_gender= $request->ggender;
            $a->save();
            
            return redirect()->route('Login');
        }
        elseif ($request->type == "Bus Company"){
            $a = new bus_company();
            $a->bCom_name= $request->fname;
            $a->bCom_name= $request->lname;
            $a->bCom_mail= $request->mail;
            $a->bCom_phn= $request->phn;
            $a->bCom_pass= md5($request->repass);
            $a->bCom_image= $request->image;
            $a->bCom_gender= $request->ggender;
            $a->save();
            
            return redirect()->route('Login');
        }
    }
}
