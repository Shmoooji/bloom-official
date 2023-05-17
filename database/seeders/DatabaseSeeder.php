<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('campaigns')->insert([
            [
                'type' => 'Basic',
                'price' => '4.99',
            ],
            [
                'type' => 'Exclusive',
                'price' => '19.99',
            ],
            [
                'type' => 'Pro',
                'price' => '49.99',
            ],
            [
                'type' => 'VIP',
                'price' => '99.99',
            ],
        ]);

        \App\Models\CampaignPayment::factory(20)->create();
        \App\Models\Deal::factory(20)->create();
    }
}
