<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $comics = config('comics');

       foreach ($comics as $comic) {
        $comicModel = new Comic;
        $comicModel->title = $comic['title']; 
        $comicModel->description = $comic['description'];
        $comicModel->thumb = $comic['thumb'];
        $comicModel->price = $comic['price'];
        $comicModel->series = $comic['series'];
        $comicModel->sale_date = $comic['sale_date'];
        $comicModel->type = $comic['type'];
        $comicModel->save();
    }
    }
}
