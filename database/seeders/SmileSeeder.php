<?php

namespace Database\Seeders;

use App\Models\Smile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [


            [
                "before_image" => "smiles/a2.png",
                "after_image" => "smiles/a1.png",
                "sort" => 1
            ],
            [
                "before_image" => "smiles/b2.png",
                "after_image" => "smiles/b1.png",
                "sort" => 4

            ],
            [
                "before_image" => "smiles/c2.png",
                "after_image" => "smiles/c1.png",
                "sort" => 2

            ],
            [
                "before_image" => "smiles/d2.png",
                "after_image" => "smiles/d1.png",
                "sort" => 5

            ],
            [
                "before_image" => "smiles/e2.png",
                "after_image" => "smiles/e1.png",
                "sort" => 3

            ],
            [
                "before_image" => "smiles/f2.png",
                "after_image" => "smiles/f1.png",
                "sort" => 6

            ],
            [
                "before_image" => "smiles/g2.png",
                "after_image" => "smiles/g1.png",

            ],
            [
                "before_image" => "smiles/h2.png",
                "after_image" => "smiles/h1.png",

            ],





        ];

        foreach ($items as $item) {
            Smile::create($item);
        }
    }
}
