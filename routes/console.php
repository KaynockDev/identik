<?php

use App\Models\Reel;
use App\Models\GoogleReview;
use App\Models\TrustPilot;
use Carbon\Carbon;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;


Schedule::call(function () {
    $reels = [];
    $accessToken = "IGQWRQV0Y2LTFoNkM1dGRUWnIwU24zR2ZAoZATNraWF4SXhsQlhEYmc4U2FPVW5uX3Jzc1F2Tk5DdDN4SnlPY3BxdWlUT1FaUUFISkNPNk9vTExUTjlzekZAjVkpQUmY2ZA2ZAqc0xFWVF1MEUyQnZAIWi1YQTAtWmJzeDAZD";
    $nextPage = "https://graph.instagram.com/me/media?fields=id,timestamp,media_type,media_url,like_count,thumbnail_url,permalink&access_token=$accessToken";

    do {
        $response = Http::get($nextPage);
        $data = $response->json();

        if (isset($data['data'])) {
            foreach ($data['data'] as $mediaItem) {
                // Sadece video türündeki medya öğelerini (Reels) al
                if ($mediaItem['media_type'] === 'VIDEO') {


                    $reels[] = $mediaItem;
                }


            }
        }

        // Sonraki sayfa bağlantısını al
        $nextPage = $data['paging']['next'] ?? null;

    } while ($nextPage); // Sonraki sayfa varsa döngüye devam et



    foreach ($reels as $reel) {
        Reel::updateOrCreate([
            "instagram_id" => $reel["id"],
        ], [
            "media_url" => $reel["media_url"],
            "thumbnail_url" => $reel["thumbnail_url"],
            "permalink" => $reel["permalink"],
            "datetime" => Carbon::parse($reel["timestamp"]),
            "like_count" => $reel["like_count"],
        ]);
    }
})->hourly();

// Trustpilot Reviews Fetching
Schedule::call(function () {
    // Trustpilot API credentials - you'll need to set these in your environment
    $apiKey = env('TRUSTPILOT_API_KEY');
    $businessUnitId = env('TRUSTPILOT_BUSINESS_UNIT_ID'); // Your Trustpilot Business Unit ID
    
    if (!$apiKey || !$businessUnitId) {
        return;
    }

    try {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json'
        ])->get("https://api.trustpilot.com/v1/business-units/{$businessUnitId}/reviews", [
            'perPage' => 20,
            'stars' => '1,2,3,4,5'
        ]);

        if (!$response->failed()) {
            $data = $response->json();
            
            if (isset($data['reviews'])) {
                foreach ($data['reviews'] as $review) {
                    TrustPilot::updateOrCreate([
                        "trustpilot_id" => $review["id"],
                    ], [
                        "name" => $review["consumer"]["displayName"],
                        "title" => $review["title"] ?? $review["consumer"]["displayName"] . ' Review',
                        "content" => $review["text"],
                        "rating" => $review["stars"],
                        "review_date" => Carbon::parse($review["createdAt"])->format('Y-m-d'),
                    ]);
                }
            }
        }
    } catch (\Exception $e) {
        // Log error if needed
        Log::error('Trustpilot API Error: ' . $e->getMessage());
    }

})->hourly();

// Google Reviews Fetching
Schedule::call(function () {
    // Google Places API key
    $apiKey = 'AIzaSyA95rmChEFxNacwGzaCzldxFgoh9iuu8RM';
    $placeId = 'ChIJuTpbhB65yhQRqZ3tds6lmk0';
    
    if (!$apiKey || !$placeId) {
        return;
    }

    $response = Http::get("https://maps.googleapis.com/maps/api/place/details/json", [
        'place_id' => $placeId,
        'fields' => 'reviews',
        'key' => $apiKey
    ]);

    if (!$response->failed()) {
        $data = $response->json();
        
        if (isset($data['result']['reviews'])) {
            foreach ($data['result']['reviews'] as $review) {
                GoogleReview::updateOrCreate([
                    "google_review_id" => $review["time"] . '_' . $review["author_name"],
                ], [
                    "name" => $review["author_name"],
                    "title" => $review["author_name"] . ' Review',
                    "content" => $review["text"],
                    "rating" => $review["rating"],
                    "profile_photo_url" => $review["profile_photo_url"] ?? null,
                    "review_date" => Carbon::createFromTimestamp($review["time"])->format('Y-m-d'),
                ]);
            }
        }
    }

})->hourly();