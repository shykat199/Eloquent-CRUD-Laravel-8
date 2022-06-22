<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\factory as Faker;
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
        // \App\Models\User::factory(10)->create();

        $faker = Faker::create();
        foreach (range(1, 100) as $item) {

            DB::table('students')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'number' => $faker->phoneNumber,
                'address' => $faker->address

            ]);
        }
    }
}
