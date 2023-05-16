<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Deal extends Model
{
    use HasFactory;
    
    public function get_deal(){
        return DB::table('deals')->get();
    }

    public function get_deal_forecast(){
        $sales = DB::select('SELECT deals.amount FROM `deals` ORDER BY `deals`.`closing_date` DESC LIMIT 2;');
        $sales1 = (double)$sales[0]->amount;
        $sales2 = (double)$sales[1]->amount;
        $rate = $sales1/$sales2;
        $rate *= 100;
        $salesForecast = $sales1 * $rate;
        return $salesForecast;
    }
}
