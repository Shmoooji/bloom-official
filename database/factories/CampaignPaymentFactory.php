<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


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
        //$randomPaymentID = Str::random(1);
        //$randomPaymentID .= preg_replace('/\D/', '', Str::random(1));

        return [
            //'payment_id' => "PAYID-".$randomPaymentID, //deprecated due to changing the structure of the database to use payment_id as the primary key instead
            "user_id" => User::all()->random()->id,
            "campaign_type" => Campaign::all()->random()->id,
            'payment_method' => fake()->randomElement(['GCash', 'PayMaya', 'PayPal']),
            'subscription_period' => fake()->randomElement([1, 3, 6, 12]),

        ];
    }
}
