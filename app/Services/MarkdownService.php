<?php

namespace App\Services;

use App\Models\Markdown;

class MarkdownService
{
    public function get($key, $default = null)
    {
        $markdown = Markdown::where('key', $key)->first();
        return $markdown ? $markdown->value : $default;
    }

    public function set($key, $value)
    {
        return Markdown::updateOrCreate(['key' => $key], ['value' => $value]);
    }

    public function all()
    {
        return Markdown::pluck('value', 'key')->toArray();
    }
}
