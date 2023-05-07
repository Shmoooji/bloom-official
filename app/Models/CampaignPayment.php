<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class CampaignPayment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 
                           'campaign_type', 
                           'payment_method', 
                           'subscription_period'];

    public static function savePaymentInfo(array $info) {
        DB::table('campaign_payments')->insert([
            'user_id' => $info['user_id'],
            'campaign_type' => $info['campaign_type'],
            'payment_method' => $info['payment_method'],
            'subscription_period' => $info['subscription_period']
        ]);
    }
}
