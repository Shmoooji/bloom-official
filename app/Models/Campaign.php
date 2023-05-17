<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Campaign extends Model
{
    use HasFactory;

    public function get_campaigns(){
        return DB::table('campaigns')->get();
    }
}
