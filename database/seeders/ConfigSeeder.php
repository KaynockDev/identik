<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                "title" => "Adres",
                "key" => "address",
                "value" => "Zühtüpaşa Mahallesi, Bağdat Caddesi No:23/A<br>Kadıköy / İstanbul"
            ],
            [
                "title" => "Telefon",
                "key" => "phone",
                "value" => "+90 542 402 65 60"
            ],
            [
                "title" => "Mail",
                "key" => "email",
                "value" => "info@identik.com.tr"
            ],
            [
                "title" => "İletişim Formu Bildirimi Gönderilecek Mail",
                "key" => "notification_mail",
                "value" => "info@identik.com.tr"
            ],
            [
                "title" => "Çalışma Saatleri",
                "key" => "working_hours",
                "value" => "Pazartesi - Cumartesi 09:00 - 19:00"
            ],
            [
                "title" => "Google Maps Link",
                "key" => "google_maps",
                "value" => "https://maps.app.goo.gl/r7wmzyGp8imbAKaN7"
            ],
            [
                "title" => "Instagram Kullanıcı Adı",
                "key" => "instagram_id",
                "value" => "identikdentalclinic"
            ],
            [
                "title" => "Facebook Kullanıcı Adı",
                "key" => "facebook_id",
                "value" => "identikdentalclinic"
            ],
            [
                "title" => "Linkedin Kullanıcı Adı",
                "key" => "linkedin_id",
                "value" => "identikdentalclinic"
            ],
            [
                "title" => "Youtube Kullanıcı Adı",
                "key" => "youtube_id",
                "value" => "identikdentalclinic"
            ],

        ];

        foreach ($items as $item) {
            Config::updateOrCreate(['key' => $item['key']], $item);
        }
    }
}
