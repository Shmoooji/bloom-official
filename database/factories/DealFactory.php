<?php

namespace Database\Factories;

use App\Models\CampaignPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deal>
 */
class DealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'campaign_payment_id' => CampaignPayment::all()->random()->payment_id,
            'closing_date' => fake()->date(),
            'priority' => fake()->randomElement(['High', 'Medium', 'Low']),
            'stage_deal' => fake()->randomElement(['New', 'In Progress', 'Closed']),
            'type_deal' => fake()->randomElement(['New Business', 'Renewal', 'Upsell']),
            'contact' => fake()->name(),
            'company' => fake()->company(),
            'amount' => fake()->randomFloat(2, 1000, 100000),
        ];
    }
}
