<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                "name" => "Dr. Dt. Ebubekir Saçlı",
                "role" => "Protez Uzmanı",
                "image" => "doctors/ebubekir_sacli.png",
                "description" => "Merhaba ben Ebubekir Saçlı. Mayıs 1998 de İstanbul’da doğdum. Yeditepe Üniversitesi Diş Hekimliği Fakültesinden 2021 yılında mezun oldum. 2021 yılında Altınbaş Üniversitesi Diş Hekimliği Fakültesinde Protetik Diş Tedavisinde Doktora eğitimime başladım. Yeterliliğimi başarılı bir şekilde verdim. Aldığım eğitimlerin gelişimimde büyük katkısı oldu. Şu an halen doktora eğitimim devam etmekte.",
                "sort" => 1,
                "content" => "**Çene Eklemi Rahatsızlıkları İçin Stabilizasyon Splinti Yapımı**

EDAD Akademi Hanefi KURT

**A’dan z’ye kök kanal tedavisi**

EDAD Akademi Prof. Dr. Baybora KAYAHAN

**Dental Fotoğrafçılık 101-102**

EDAD Akademi Dr. Mahmut ALOLO Dr. L. Murat MERCAN

**Porselen Lamina Restorasyonlar**

EDAD Akademi Prof. Dr. Nuray ÇAPA

**Nejat Nizam - İmplantolojide Biyolojinin Gücünü Yönetmek**

EDAD Akademi

**Serhat Köken - Posterior Bölgede Direkt Restorasyonlar; Başarı için klinik ipuçları**

EDAD Akademi

**Botulinum Toksin ve Dermal Dolgu**

Sahra Academy Dr. Öğretim Üyesi Tuba DEVELİ

**Estetik Bölgede Cerrahi Yaklaşım**

Semados Campus Prof. Dr. Selçuk BASA Prof. Dr. Erhan ÇÖMLEKOĞLU

**DİLAD Lazer Kongresi**

**VI. Genç Edad Kongresi (samsun)**

**YUDSA talks Ahmet KIĞILI Yalın Klinik Yönetimi**

**Baybora KAYAHAN ve Toygan BORA ile endodonti sahnesi**

**25. Uluslararası Estetik Diş Hekimliği Kongresi “Virtüozler sahnede”**"
            ],
            [
                "name" => "Dt. Taner Kurt",
                "role" => "Diş Hekimi",
                "image" => "doctors/taner_kurt.png",
                "description" => "Merhaba ben Ebubekir Saçlı. Mayıs 1998 de İstanbul’da doğdum. Yeditepe Üniversitesi DişHekimliği Fakültesinden 2021 yılında ...",
                "sort" => 2
            ],
            [
                "name" => "Dt. Gülsüm Kurt",
                "role" => "Diş Hekimi",
                "image" => "doctors/gulsum_kurt.png",
                "description" => "Merhaba ben Ebubekir Saçlı. Mayıs 1998 de İstanbul’da doğdum. Yeditepe Üniversitesi DişHekimliği Fakültesinden 2021 yılında ...",
                "sort" => 2
            ],
            [
                "name" => "Seda Yılmaz",
                "role" => "Asistan",
                "image" => "doctors/seda_yilmaz.png",
                "description" => "",
                "sort" => 3
            ],
            [
                "name" => "Serdar Gün",
                "role" => "Asistan",
                "image" => "doctors/serdar_gun.png",
                "description" => "",
                "sort" => 4
            ],
            [
                "name" => "Zeynep Özlem",
                "role" => "Asistan",
                "image" => "doctors/zeynep_ozlem.png",
                "description" => "",
                "sort" => 5
            ],
            [
                "name" => "Hande Sarı",
                "role" => "Asistan",
                "image" => "doctors/hande_sari.png",
                "description" => "",
                "sort" => 6
            ],

        ];


        foreach ($items as $index => $item) {

            Doctor::create([
                ...$item,
                "slug" => Str::slug($item["name"]),
                "sort" => $index + 1
            ]);
        }

    }
}
