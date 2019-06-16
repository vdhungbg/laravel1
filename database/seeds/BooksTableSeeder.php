<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BooksTableSeeder extends Seeder
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
            \App\Book::create([
                'book_name' => $faker->name,
                'isbn_no' => Str::random(10),
                'book_price' => 2000 + $i]);
        }
    }
}
