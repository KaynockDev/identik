<?php

namespace Database\Seeders;

use App\Models\Treatment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                "name" => "Lamine",
                "image" => "treatments/lamine.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."
            ],
            [
                "name" => "Kanal Tedavisi",
                "image" => "treatments/kanal_tedavisi.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."

            ],
            [
                "name" => "Protez Diş Tedavisi",
                "image" => "treatments/protez_dis_tedavisi.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."

            ],
            [
                "name" => "Estetik Dolgu",
                "image" => "treatments/estetik_dolgu.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."

            ],
            [
                "name" => "Zirkonyum",
                "image" => "treatments/zirkonyum.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."

            ],
            [
                "name" => "İmplant",
                "image" => "treatments/implant.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."

            ],

            [
                "name" => "Diş Beyatlatma",
                "image" => "treatments/dis_beyazlatma.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."

            ],

            [
                "name" => "Ortodonti",
                "image" => "treatments/ortodonti.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."

            ],
            [
                "name" => "Gülüş Tasarımı",
                "image" => "treatments/gulus_tasarimi.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."

            ],
            [
                "name" => "Endodonti",
                "image" => "treatments/endodonti.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."

            ],
            [
                "name" => "Botoks",
                "image" => "treatments/botoks.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."
            ],
            [
                "name" => "İnvisalign",
                "image" => "treatments/invisalign.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."
            ],
            [
                "name" => "Detertraj",
                "image" => "treatments/detertraj.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."
            ],
            [
                "name" => "Greft",
                "image" => "treatments/greft.png",
                "description" => "Günümüzde estetik ve güzellik kavramlarının popülerliğinin artmasıyla birlikte kullanılmaya başlanılan estetik beyaz dolgular olarak ifade edilen kompozit dolgular sıklıkla rutinde kullandığımız restoratif materyallerdendir. Estetik dolgu, dişlerde kompozit malzemelerle birlikte kişinin çeşitli nedenlerle kaybettiği diş dokusunun kendi dişine en uygun doğal ve estetik şekilde kompozit materyallerle restore edilmesi işlemidir."
            ],
        ];

        foreach ($items as $index => $item) {
            Treatment::create([
                ...$item,
                "slug" => Str::slug($item["name"]),
                "sort" => $index + 1
            ]);
        }
    }
}
