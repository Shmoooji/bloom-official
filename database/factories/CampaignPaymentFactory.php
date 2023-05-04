<?php

namespace Database\Factories;

use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\Factory;


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
        return [
            "campaign_id" => Campaign::all()->random()->id,
            'bill_name' => fake()->name,
            'bill_address' => fake()->address,
            'bill_city' => fake()->city,
            'bill_email' => fake()->email,
            'bill_phone' => fake()->phoneNumber,
            'bill_country' => fake()->country,
            'payment_method' => fake()->randomElement(['GCash', 'PayMaya', 'PayPal']),
            'payment_status' => fake()->randomElement(['Paid', 'Unpaid']),
            'postal' => fake()->randomElement(['1234', '5678']),
            'card_type' => fake()->randomElement(['Visa', 'Mastercard']),
            'card_number' => fake()->creditCardNumber,
            'cv' => fake()->shuffleString('123'),
            'exp_date' => fake()->creditCardExpirationDate,
            'amount' => fake()->randomFloat(2, 1000, 100000),
        ];
    }
}
