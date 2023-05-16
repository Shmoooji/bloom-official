<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campaign_Payment>
 */
class CampaignPaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $randomPaymentID = Str::random(24);
        $randomPaymentID .= preg_replace('/\D/', '', Str::random(14));
        $iteration = 0;
        while(DB::scalar("SELECT COUNT(payment_id) FROM campaign_payments WHERE payment_id = 'PAYID-".$randomPaymentID."'") >= 1){
            $randomPaymentID = Str::random(24);
            $randomPaymentID .= preg_replace('/\D/', '', Str::random(14));
            $iteration++;
        }

        return [
            'payment_id' => "PAYID-".$randomPaymentID,
            'user_id' => User::all()->random()->id,
            'campaign_id' => Campaign::all()->random()->id,
            'payment_method' => fake()->randomElement(['GCash', 'PayMaya', 'PayPal']),
            'subscription_period' => fake()->randomElement([1, 3, 6, 12]),
        ];
    }
}
