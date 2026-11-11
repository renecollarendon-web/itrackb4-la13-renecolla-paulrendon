<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        $romance   = Genre::firstOrCreate(['name' => 'Romance']);
        $drama     = Genre::firstOrCreate(['name' => 'Drama']);
        $fantasy   = Genre::firstOrCreate(['name' => 'Fantasy']);
        $action    = Genre::firstOrCreate(['name' => 'Action']);
        $scifi     = Genre::firstOrCreate(['name' => 'Sci-Fi']);
        $adventure = Genre::firstOrCreate(['name' => 'Adventure']);
 
        $movies = [
            ['Your Name', $romance, 8.8, 'Makoto Shinkai', 2016, true],
            ['A Silent Voice', $drama, 8.1, 'Naoko Yamada', 2016, false],
            ['Spirited Away', $fantasy, 8.6, 'Hayao Miyazaki', 2001, true],
            ['I Want To Eat Your Pancreas', $drama, 8.1, 'Shinichiro Ushijima', 2017, false],
            ['Weathering With You', $romance, 8.2, 'Makoto Shinkai', 2019, false],
            ['Princess Mononoke', $action, 8.4, 'Hayao Miyazaki', 1997, false],
            ['Akira', $scifi, 8.0, 'Katsuhiro Otomo', 1988, true],
            ['Ghost in the Shell', $scifi, 7.9, 'Mamoru Oshii', 1995, false],
            ['Grave of the Fireflies', $drama, 8.5, 'Isao Takahata', 1988, false],
            ["Howl's Moving Castle", $fantasy, 8.2, 'Hayao Miyazaki', 2004, true],
            ['My Neighbor Totoro', $fantasy, 8.1, 'Hayao Miyazaki', 1988, false],
            ['The Tale of the Princess Kaguya', $fantasy, 8.0, 'Isao Takahata', 2013, false],
            ['Perfect Blue', $drama, 8.0, 'Satoshi Kon', 1997, false],
            ['Paprika', $scifi, 7.7, 'Satoshi Kon', 2006, false],
            ['The Girl Who Leapt Through Time', $scifi, 7.8, 'Mamoru Hosoda', 2006, false],
            ['Wolf Children', $drama, 8.1, 'Mamoru Hosoda', 2012, false],
            ['Demon Slayer: Mugen Train', $action, 8.2, 'Haruo Sotozaki', 2020, true],
            ['Jujutsu Kaisen 0', $action, 7.7, 'Sunghoo Park', 2021, false],
            ['5 Centimeters per Second', $romance, 7.6, 'Makoto Shinkai', 2007, false],
            ['Castle in the Sky', $adventure, 8.0, 'Hayao Miyazaki', 1986, false],
        ];
 
        foreach ($movies as [$title, $genre, $rating, $director, $year, $featured]) {
            Movie::create([
                'title'       => $title,
                'genre_id'    => $genre->id,
                'rating'      => $rating,
                'director'    => $director,
                'year'        => $year,
                'is_featured' => $featured,
            ]);
        }
    }
}

