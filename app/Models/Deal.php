<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Deal extends Model
{
    use HasFactory;

    public function get_deal(){
       // $deals = DB::table('deals')->get();
        //console.log($deals);
        //return $deals;
        return DB::table('deals')->get();
    }


}
