<?php

namespace Database\Seeders;

use App\Models\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
        $Comic = new Comic();
        $Comic->title = $faker->randomElement(['aaaaa', 'bbbb', 'ccc', 'dd', 'e']);
        $Comic->description = $faker->randomElement(['aaaaa', 'bbbb', 'ccc', 'dd', 'e']);
        $Comic->thumb = $faker->randomElement(['aaaaa', 'bbbb', 'ccc', 'dd', 'e']);
        $Comic->price = $faker->time();
        $Comic->series = $faker->numberBetween(2, 10);
        $Comic->sale_date = $faker->numberBetween(2, 10);
        $Comic->type = $faker->numberBetween(2, 9);
        $Comic->save();
    }
}
}