<?php

namespace App\Providers;

use App\Services\MarkdownService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use App\Services\ConfigService;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('configService', function () {
            return new ConfigService();
        });
        $this->app->singleton('markdownService', function () {
            return new MarkdownService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
        
        // PHP 8.1+ deprecation uyarılarını kapat
        error_reporting(E_ALL & ~E_DEPRECATED);
    }
}
