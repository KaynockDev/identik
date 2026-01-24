<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\GoogleReview;
use App\Models\TrustPilot;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Real-time review statistics endpoint
Route::get('/reviews/stats', function () {
    $googleStats = null;
    $trustpilotStats = null;
    
    // Fetch Google Reviews from API
    $googleApiKey = 'AIzaSyA95rmChEFxNacwGzaCzldxFgoh9iuu8RM';
    $googlePlaceId = 'ChIJuTpbhB65yhQRqZ3tds6lmk0';
    
    if ($googleApiKey && $googlePlaceId) {
        try {
            $response = Http::timeout(10)->get("https://maps.googleapis.com/maps/api/place/details/json", [
                'place_id' => $googlePlaceId,
                'fields' => 'reviews,rating,user_ratings_total',
                'key' => $googleApiKey
            ]);
            
            if ($response->successful()) {
                $data = $response->json();
                
                if (isset($data['result'])) {
                    $result = $data['result'];
                    $reviews = $result['reviews'] ?? [];
                    
                    // Calculate statistics from live data
                    $totalReviews = count($reviews);
                    $averageRating = $result['rating'] ?? 0;
                    $userRatingsTotal = $result['user_ratings_total'] ?? 0;
                    
                    // Calculate rating distribution
                    $ratingDistribution = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0];
                    foreach ($reviews as $review) {
                        $rating = $review['rating'] ?? 0;
                        if ($rating >= 1 && $rating <= 5) {
                            $ratingDistribution[$rating]++;
                        }
                    }
                    
                    $googleStats = [
                        'averageRating' => number_format($averageRating, 1),
                        'totalReviews' => $userRatingsTotal,
                        'recentReviews' => array_slice($reviews, 0, 5),
                        'ratingDistribution' => $ratingDistribution,
                        'lastUpdated' => now()->toISOString(),
                        'source' => 'google_api'
                    ];
                }
            }
        } catch (\Exception $e) {
            \Log::error('Google API Error: ' . $e->getMessage());
        }
    }
    
    // Fetch TrustPilot Reviews from API
    $trustpilotApiKey = env('TRUSTPILOT_API_KEY');
    $trustpilotBusinessUnitId = env('TRUSTPILOT_BUSINESS_UNIT_ID');
    
    if ($trustpilotApiKey && $trustpilotBusinessUnitId) {
        try {
            $response = Http::timeout(10)->withHeaders([
                'Authorization' => 'Bearer ' . $trustpilotApiKey,
                'Content-Type' => 'application/json'
            ])->get("https://api.trustpilot.com/v1/business-units/{$trustpilotBusinessUnitId}/reviews", [
                'perPage' => 20,
                'stars' => '1,2,3,4,5'
            ]);
            
            if ($response->successful()) {
                $data = $response->json();
                
                if (isset($data['reviews'])) {
                    $reviews = $data['reviews'];
                    
                    // Calculate statistics from live data
                    $totalReviews = count($reviews);
                    $ratings = array_column($reviews, 'stars');
                    $averageRating = $totalReviews > 0 ? round(array_sum($ratings) / $totalReviews, 1) : 0;
                    
                    // Calculate rating distribution
                    $ratingDistribution = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0];
                    foreach ($reviews as $review) {
                        $rating = $review['stars'] ?? 0;
                        if ($rating >= 1 && $rating <= 5) {
                            $ratingDistribution[$rating]++;
                        }
                    }
                    
                    $trustpilotStats = [
                        'averageRating' => number_format($averageRating, 1),
                        'totalReviews' => $totalReviews,
                        'recentReviews' => array_slice($reviews, 0, 5),
                        'ratingDistribution' => $ratingDistribution,
                        'lastUpdated' => now()->toISOString(),
                        'source' => 'trustpilot_api'
                    ];
                }
            }
        } catch (\Exception $e) {
            \Log::error('TrustPilot API Error: ' . $e->getMessage());
        }
    }
    // Fallback to database if API fails
    if (!$googleStats) {
        $googleReviews = GoogleReview::all();
        $googleStats = [
            'averageRating' => number_format($googleReviews->avg('rating'), 1),
            'totalReviews' => $googleReviews->count(),
            'ratingDistribution' => [
                1 => $googleReviews->where('rating', 1)->count(),
                2 => $googleReviews->where('rating', 2)->count(),
                3 => $googleReviews->where('rating', 3)->count(),
                4 => $googleReviews->where('rating', 4)->count(),
                5 => $googleReviews->where('rating', 5)->count(),
            ],
            'lastUpdated' => $googleReviews->max('review_date'),
            'source' => 'database_fallback'
        ];
    }
    
    if (!$trustpilotStats) {
        $trustpilotReviews = TrustPilot::all();
        $trustpilotStats = [
            'averageRating' => number_format($trustpilotReviews->avg('rating'), 1),
            'totalReviews' => $trustpilotReviews->count(),
            'ratingDistribution' => [
                1 => $trustpilotReviews->where('rating', 1)->count(),
                2 => $trustpilotReviews->where('rating', 2)->count(),
                3 => $trustpilotReviews->where('rating', 3)->count(),
                4 => $trustpilotReviews->where('rating', 4)->count(),
                5 => $trustpilotReviews->where('rating', 5)->count(),
            ],
            'lastUpdated' => $trustpilotReviews->max('review_date'),
            'source' => 'database_fallback'
        ];
    }
    
    return response()->json([
        'google' => $googleStats,
        'trustpilot' => $trustpilotStats,
        'timestamp' => now()->toISOString(),
        'cache_status' => [
            'google' => $googleStats['source'] ?? 'unknown',
            'trustpilot' => $trustpilotStats['source'] ?? 'unknown'
        ]
    ]);
});
