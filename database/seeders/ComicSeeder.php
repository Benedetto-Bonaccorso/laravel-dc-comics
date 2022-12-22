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
        $comics=config('comicslist');
        foreach ($comics as $comic) {
            $comic = new Comic();
            $comic->title = $comic["title"];
            $comic->description = $comic["description"];
            $comic->thumb = $comic["thumb"];
            $comic->price = $comic["price"];
            $comic->series = $comic["series"];
            $comic->sale_date = $comic["sale_date"];
            $comic->type = $comic["type"];
            $comic->save();
        }
}
}