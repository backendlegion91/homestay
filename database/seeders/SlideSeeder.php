<?php

// database/seeders/SlideSeeder.php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    public function run()
    {
        Slide::create([
            'title' => 'Gated Villas',
            'image_path' => 'img/slides/2.jpg'
        ]);

        Slide::create([
            'title' => 'Trendy Home',
            'image_path' => 'img/slides/1.jpg'
        ]);
    }
}
