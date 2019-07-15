<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<50;$i++) {
            \App\Contact::create([
                'first_name' => $faker->name,
                'last_name' => $faker->name,
                'email' => $faker->email,
                'city' => $faker->name,
                'country' => $faker->name,
                'job_title' => $faker->name]);
        }
    }
}
