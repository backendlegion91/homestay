<?php

// database/seeders/TrendingProjectSeeder.php

namespace Database\Seeders;

use App\Models\TrendingProject;
use Illuminate\Database\Seeder;

class TrendingProjectSeeder extends Seeder
{
    public function run()
    {
        TrendingProject::create([
            'title' => 'Apartments',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident.',
            'image' => 'img/img1.jpg',
        ]);

        TrendingProject::create([
            'title' => 'Luxury Villas',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident.',
            'image' => 'img/img2.jpg',
        ]);

        TrendingProject::create([
            'title' => 'Gated Projects',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident.',
            'image' => 'img/img3.jpg',
        ]);

        TrendingProject::create([
            'title' => 'Apartments',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident.',
            'image' => 'img/img4.jpg',
        ]);
    }
}
