<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::truncate();

        $faker = \Faker\Factory::create();

        $status = array("Active", "Inactive");
        for($i = 0; $i < 50; $i++){
            Contact::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'company' => $faker->company,
                'status' => $status[array_rand($status)],
                'last_active' => $faker->date,
                'created_at' => $faker->date,
                'updated_at' => $faker->date
            ]);
        }
    }
}
