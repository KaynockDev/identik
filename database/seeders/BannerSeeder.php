<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                "image" => "banners/1.png",
                "title" => "Gülüşünüz Bizim Önceliğimiz!",
                "subtitle" => "iDentik'te sizleri sıcak bir gülüşle karşılıyoruz.",
                "description" => "Rahat bir ortamda, sizin için en iyi diş bakımını sunmak ve sağlıklı bir gülüş kazandırmak için buradayız.",
                "title_en" => "Your Smile is Our Priority!",
                "subtitle_en" => "At iDentik, we welcome you with a warm smile.",
                "description_en" => "We are here to provide you with the best dental care and a healthy smile in a comfortable environment.",
                "sort" => 1
            ],
            [
                "image" => "banners/2.png",
                "title" => "Modern Diş Tedavisi",
                "subtitle" => "En son teknoloji ile diş sağlığınız için hizmetinizdeyiz.",
                "description" => "Uzman kadromuz ve modern ekipmanlarımızla size en kaliteli diş tedavisi hizmetini sunuyoruz.",
                "title_en" => "Modern Dental Treatment",
                "subtitle_en" => "We serve your dental health with the latest technology.",
                "description_en" => "We provide you with the highest quality dental treatment service with our expert staff and modern equipment.",
                "sort" => 2
            ],
            [
                "image" => "banners/3.png",
                "title" => "Sağlıklı Gülüşler",
                "subtitle" => "Her yaşta güzel gülüşler için profesyonel çözümler.",
                "description" => "Çocuklardan yetişkinlere kadar her yaş grubuna özel diş tedavi yöntemleri uyguluyoruz.",
                "title_en" => "Healthy Smiles",
                "subtitle_en" => "Professional solutions for beautiful smiles at every age.",
                "description_en" => "We apply special dental treatment methods for every age group from children to adults.",
                "sort" => 3
            ],

        ];

        foreach ($items as $item) {
            Banner::create($item);
        }
    }
}
