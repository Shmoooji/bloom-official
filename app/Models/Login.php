<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class Login extends Model
{
    function get_accounts(){
        return DB::table('users')->get();
    }
    
    function account_authentication($email, $pass){
            $response = DB::table('users')
            ->where('email', $email)
            ->get();
            if (sizeof($response) == 1){
                if ($pass == $response[0]->password){
                    //session_start();
                    //$_SESSION["users"] = $response;
                    return "Success";
                } else {
                    return "Incorrect Password";
                }
            } else {
                return "Invalid Account";
            }
        
    }

    function get_account(){
        session_start();
        return $_SESSION["users"];
    }
}