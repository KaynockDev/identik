<?php

namespace App\Console\Commands;

use App\Models\GoogleReview;
use App\Models\TrustPilot;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FetchReviews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reviews:fetch {--platform=all : Platform to fetch (google, trustpilot, or all)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch reviews from Google Places API and Trustpilot API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $platform = $this->option('platform');

        if ($platform === 'all' || $platform === 'google') {
            $this->fetchGoogleReviews();
        }

        if ($platform === 'all' || $platform === 'trustpilot') {
            $this->fetchTrustpilotReviews();
        }

        $this->info('Review fetching completed!');
    }

    private function fetchGoogleReviews()
    {
        $this->info('Fetching Google Reviews...');

        $apiKey = 'AIzaSyA95rmChEFxNacwGzaCzldxFgoh9iuu8RM';
        $placeId = 'ChIJuTpbhB65yhQRqZ3tds6lmk0';
        
        if (!$apiKey || !$placeId) {
            $this->error('Google Places API credentials not configured.');
            return;
        }

        try {
            $response = Http::get("https://maps.googleapis.com/maps/api/place/details/json", [
                'place_id' => $placeId,
                'fields' => 'reviews',
                'key' => $apiKey
            ]);

            if ($response->failed()) {
                $this->error('Failed to fetch Google Reviews: ' . $response->status());
                return;
            }

            $data = $response->json();
            
            if (isset($data['result']['reviews'])) {
                $count = 0;
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
                    $count++;
                }
                $this->info("Successfully fetched {$count} Google reviews.");
            } else {
                $this->warn('No Google reviews found.');
            }
        } catch (\Exception $e) {
            $this->error('Error fetching Google reviews: ' . $e->getMessage());
            Log::error('Google Reviews API Error: ' . $e->getMessage());
        }
    }

    private function fetchTrustpilotReviews()
    {
        $this->info('Fetching Trustpilot Reviews...');

        $apiKey = env('TRUSTPILOT_API_KEY');
        $businessUnitId = env('TRUSTPILOT_BUSINESS_UNIT_ID');
        
        if (!$apiKey || !$businessUnitId) {
            $this->error('Trustpilot API credentials not configured. Please set TRUSTPILOT_API_KEY and TRUSTPILOT_BUSINESS_UNIT_ID in your .env file.');
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

            if ($response->failed()) {
                $this->error('Failed to fetch Trustpilot Reviews: ' . $response->status());
                return;
            }

            $data = $response->json();
            
            if (isset($data['reviews'])) {
                $count = 0;
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
                    $count++;
                }
                $this->info("Successfully fetched {$count} Trustpilot reviews.");
            } else {
                $this->warn('No Trustpilot reviews found.');
            }
        } catch (\Exception $e) {
            $this->error('Error fetching Trustpilot reviews: ' . $e->getMessage());
            Log::error('Trustpilot API Error: ' . $e->getMessage());
        }
    }
}
