<?php

namespace App\Services;

use App\Models\Config;

class ConfigService
{
    public function get($key, $default = null)
    {
        $locale = app()->getLocale();
        $localizedKey = $key . '_' . $locale;
        
        // Try to get localized version first
        $config = Config::where('key', $localizedKey)->first();
        if ($config) {
            return $config->value;
        }
        
        // Fall back to default key
        $config = Config::where('key', $key)->first();
        return $config ? $config->value : $default;
    }

    public function set($key, $value)
    {
        return Config::updateOrCreate(['key' => $key], ['value' => $value]);
    }

    public function all()
    {
        return Config::pluck('value', 'key')->toArray();
    }
}
