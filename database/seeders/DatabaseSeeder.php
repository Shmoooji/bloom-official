<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'f_name' => 'Test First Name',
        //     'l_name' => 'Test Last Name',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Contact::factory(10)->create();
        \App\Models\Campaign::factory(10)->create();
        \App\Models\CampaignPayment::factory(10)->create();
        \App\Models\Deal::factory(10)->create();
    }
}
