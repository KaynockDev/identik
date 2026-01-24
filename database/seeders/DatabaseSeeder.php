<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            DoctorSeeder::class,
            SmileSeeder::class,
            BannerSeeder::class,
            TreatmentSeeder::class,
            ConfigSeeder::class,
            MarkdownSeeder::class,
            ImageSeeder::class,
            GoogleReviewSeeder::class,
            TrustPilotSeeder::class,
            FaqSeeder::class,
        ]);
    }
}
