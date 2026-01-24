<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class Reviews extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // Check if API credentials are configured
        $googleApiKey = 'AIzaSyA95rmChEFxNacwGzaCzldxFgoh9iuu8RM';
        $googlePlaceId = 'ChIJuTpbhB65yhQRqZ3tds6lmk0';
        $trustpilotApiKey = env('TRUSTPILOT_API_KEY');
        $trustpilotBusinessUnitId = env('TRUSTPILOT_BUSINESS_UNIT_ID');
        
        $hasGoogleApiCredentials = !empty($googleApiKey) && !empty($googlePlaceId);
        $hasTrustpilotApiCredentials = !empty($trustpilotApiKey) && !empty($trustpilotBusinessUnitId);
        
        // Fetch Google Reviews from API
        $googleStats = $this->fetchGoogleReviews($googleApiKey, $googlePlaceId);
        
        // Fetch TrustPilot Reviews from API
        $trustpilotStats = $this->fetchTrustpilotReviews($trustpilotApiKey, $trustpilotBusinessUnitId);
            
        return view('components.reviews', [
            "hasGoogleApiCredentials" => $hasGoogleApiCredentials,
            "hasTrustpilotApiCredentials" => $hasTrustpilotApiCredentials,
            "googleApiKey" => $googleApiKey,
            "googlePlaceId" => $googlePlaceId,
            "trustpilotApiKey" => $trustpilotApiKey,
            "trustpilotBusinessUnitId" => $trustpilotBusinessUnitId,
            "googleStats" => $googleStats,
            "trustpilotStats" => $trustpilotStats
        ]);
    }
    /**
     * Fetch Google Reviews from API
     */
    private function fetchGoogleReviews($apiKey, $placeId)
    {
        if (!$apiKey || !$placeId) {
            return $this->getFallbackGoogleStats();
        }
        
        try {
            $response = Http::timeout(10)->get("https://maps.googleapis.com/maps/api/place/details/json", [
                'place_id' => $placeId,
                'fields' => 'reviews,rating,user_ratings_total',
                'key' => $apiKey
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
                    
                    return [
                        'averageRating' => number_format($averageRating, 1),
                        'totalReviews' => $userRatingsTotal,
                        'recentReviews' => collect(array_slice($reviews, 0, 5)),
                        'ratingDistribution' => $ratingDistribution,
                        'lastUpdated' => now()->toISOString(),
                        'source' => 'google_api'
                    ];
                }
            }
        } catch (\Exception $e) {
            \Log::error('Google API Error: ' . $e->getMessage());
        }
        
        return $this->getFallbackGoogleStats();
    }
    
    /**
     * Fetch TrustPilot Reviews from API
     */
    private function fetchTrustpilotReviews($apiKey, $businessUnitId)
    {
        if (!$apiKey || !$businessUnitId) {
            return $this->getFallbackTrustpilotStats();
        }
        
        try {
            $response = Http::timeout(10)->withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json'
            ])->get("https://api.trustpilot.com/v1/business-units/{$businessUnitId}/reviews", [
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
                    
                    return [
                        'averageRating' => number_format($averageRating, 1),
                        'totalReviews' => $totalReviews,
                        'recentReviews' => collect(array_slice($reviews, 0, 5)),
                        'ratingDistribution' => $ratingDistribution,
                        'lastUpdated' => now()->toISOString(),
                        'source' => 'trustpilot_api'
                    ];
                }
            }
        } catch (\Exception $e) {
            \Log::error('TrustPilot API Error: ' . $e->getMessage());
        }
        
        return $this->getFallbackTrustpilotStats();
    }
    /**
     * Get fallback Google statistics from database
     */
    private function getFallbackGoogleStats()
    {
        $reviews = \App\Models\GoogleReview::orderByDesc("review_date")->get();
        return $this->calculateReviewStats($reviews, 'database_fallback');
    }
    
    /**
     * Get fallback TrustPilot statistics from database
     */
    private function getFallbackTrustpilotStats()
    {
        $reviews = \App\Models\TrustPilot::orderByDesc("review_date")->get();
        return $this->calculateReviewStats($reviews, 'database_fallback');
    }
    
    /**
     * Calculate detailed review statistics
     */
    private function calculateReviewStats($reviews, $source = 'database')
    {
        if ($reviews->isEmpty()) {
            return [
                'averageRating' => 0,
                'totalReviews' => 0,
                'ratingDistribution' => [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0],
                'recentReviews' => collect(),
                'lastUpdated' => null,
                'source' => $source
            ];
        }
        
        $totalReviews = $reviews->count();
        $averageRating = number_format($reviews->avg('rating'), 1);
        
        // Calculate rating distribution
        $ratingDistribution = [];
        for ($i = 1; $i <= 5; $i++) {
            $ratingDistribution[$i] = $reviews->where('rating', $i)->count();
        }
        
        // Get recent reviews (last 5)
        $recentReviews = $reviews->take(5);
        
        // Get last updated date
        $lastUpdated = $reviews->max('review_date');
        
        return [
            'averageRating' => $averageRating,
            'totalReviews' => $totalReviews,
            'ratingDistribution' => $ratingDistribution,
            'recentReviews' => $recentReviews,
            'lastUpdated' => $lastUpdated,
            'source' => $source
        ];
    }
}
