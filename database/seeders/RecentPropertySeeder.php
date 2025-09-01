<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RecentProperty;

class RecentPropertySeeder extends Seeder
{
    public function run()
    {
        $properties = [
            ['title' => 'Apartments', 'image' => 'img/img5.jpg'],
            ['title' => 'Luxury Villas', 'image' => 'img/img6.jpg'],
            ['title' => 'Gated Projects', 'image' => 'img/img7.jpg'],
            ['title' => 'Apartments', 'image' => 'img/img8.jpg'],
            ['title' => 'Luxury Villas', 'image' => 'img/img9.jpg'],
            ['title' => 'Gated Projects', 'image' => 'img/img10.jpg'],
        ];

        foreach ($properties as $prop) {
            RecentProperty::create([
                'title' => $prop['title'],
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident.',
                'image' => $prop['image'],
            ]);
        }
    }
}

