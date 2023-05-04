<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class Registration extends Model
{
    function register($data) {
        if (DB::table('users')->insert($data)) {
            return "Success";
        } else {
            return "Error";
        }
    }
}