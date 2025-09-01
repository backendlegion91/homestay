<?php


namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run()
    {
        Content::create([
            'title' => 'New Projects',
            'icon' => 'fa-home',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident.'
        ]);

        Content::create([
            'title' => 'Ready To Move',
            'icon' => 'fa-rocket',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident.'
        ]);

        Content::create([
            'title' => 'Commercial',
            'icon' => 'fa-trophy',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident.'
        ]);

        Content::create([
            'title' => 'Gated Projects',
            'icon' => 'fa-star',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident.'
        ]);
        Content::create([
            'title' => 'New Projects',
            'icon' => 'fa-home',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident.'
        ]);
    }
}

