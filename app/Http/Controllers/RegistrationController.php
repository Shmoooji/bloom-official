<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use DB;

class RegistrationController extends Controller
{
    protected function validate_credentials(Request $request)
    {      
        $registration = new Registration();
        $token = Str::random(60);
        $response = $registration->credentials_validation($request, $token);
        return $response;
    }

    protected function register(Request $request) {
        $reg = new Registration();
        $fname = $request->input('firstname');
        $lname = $request->input('lastname');
        $email = $request->input('email');
        $company = $request->input('company');
        $pass = $request->input('password');
        $data=array('firstname'=>$fname,'lastname'=>$lname,'email'=>$email,'company'=>$company,'password'=>$pass);
        $res = $reg->register($data);
        if ($res == "Success") {
            echo "Record inserted successfully.<br/>";
            echo '<a href = "/">Click Here</a> to go back.';  
        }
    }

    protected function process(Request $request){
        $registration = new Registration();
        $response = $registration->complete_registration($request);
        return $response;
    }

    protected function regsiter(){
        return view('login');
    }
}