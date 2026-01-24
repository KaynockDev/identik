<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                "key" => "about_us_1",
                "name" => "Hakkımızda | 1",
                "image" => "images/about_us_1.png",
            ],
            [
                "key" => "about_us_2",
                "name" => "Hakkımızda | 2",
                "image" => "images/about_us_2.png",
            ],
            [
                "key" => "about_us_3",
                "name" => "Hakkımızda | 3",
                "image" => "images/about_us_3.png",
            ],
        ];

        foreach ($items as $item) {
            Image::create($item);
        }
    }
}
