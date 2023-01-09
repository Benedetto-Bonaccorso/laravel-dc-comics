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

    public function run()
    {
        $comics=config('comics');

        // $comic = new Comic();
        // $comic->title = "prova";
        // $comic->description = "prova";
        // $comic->thumb = "prova";
        // $comic->price = 1.1;
        // $comic->series = "prova";
        // $comic->sale_date = "prova";
        // $comic->type = "prova";
        // $comic->save();

        // foreach ($comics as $comic) {
        //     $comic = new Comic();
        //     $comic->title = $comic["title"];
        //     $comic->description = $comic["description"];
        //     $comic->thumb = $comic["thumb"];
        //     $comic->price = $comic["price"];
        //     $comic->series = $comic["series"];
        //     $comic->sale_date = $comic["sale_date"];
        //     $comic->type = $comic["type"];
        //     $comic->save();
        // }

        for($i = 0; $i < count($comics); $i++) {
            $comic = new Comic();
            $comic->title = $comics[$i]["title"];
            $comic->description = $comics[$i]["description"];
            $comic->thumb = $comics[$i]["thumb"];
            $comic->price = $comics[$i]["price"];
            $comic->series = $comics[$i]["series"];
            $comic->sale_date = $comics[$i]["sale_date"];
            $comic->type = $comics[$i]["type"];
            $comic->save();
        }
    }
}
