<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class CampaignPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',                 
        'campaign_type',    
        'payment_method',
        'subscription_period',
        'payment_id'
    ];


    public static function paymentIsUnique($paymentID) 
   {
        return is_null(DB::table('campaign_payments')
                         ->where('payment_id', $paymentID)
                         ->first());
    }
                       
    public static function savePaypalInfo(array $info) 
    {
        DB::table('campaign_payments')->insert([
            'user_id' => $info['user_id'],
            'campaign_id' => $info['campaign_type'],
            'payment_method' => $info['payment_method'],
            'subscription_period' => $info['subscription_period'],
            'payment_id' => $info['payment_id'],
        ]);
    }
}
