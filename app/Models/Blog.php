<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Blog extends Model
{
    use HasFactory, HasSEO;

    protected $fillable = [
        'slug',
        'slug_tr',
        'slug_en',
        'title',
        'title_tr',
        'title_en',
        'image',
        'image_tr',
        'image_en',
        'content_tr',
        'content_en',
        'published_at',
        'sort',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getDynamicSEOData(): SEOData
    {
        $locale = app()->getLocale();
        $title = $locale === 'en' && $this->title_en 
            ? $this->title_en 
            : ($this->title_tr ?? $this->title);
        
        $content = $locale === 'en' && $this->content_en 
            ? $this->content_en 
            : $this->content_tr;
        
        $image = $locale === 'en' && $this->image_en 
            ? $this->image_en 
            : ($this->image_tr ?? $this->image);
            
        return new SEOData(
            title: $title,
            description: strip_tags(\Str::limit($content, 160)),
            image: $image ? \Storage::disk('public')->url($image) : null,
        );
    }

    /**
     * Get the title in the current locale
     */
    public function getLocalizedTitleAttribute()
    {
        $locale = app()->getLocale();
        
        if ($locale === 'en' && !empty($this->title_en)) {
            return $this->title_en;
        }
        
        return $this->title_tr ?? $this->title;
    }

    /**
     * Get the content in the current locale
     */
    public function getLocalizedContentAttribute()
    {
        $locale = app()->getLocale();
        
        if ($locale === 'en' && !empty($this->content_en)) {
            return $this->content_en;
        }
        
        return $this->content_tr;
    }

    /**
     * Get the slug in the current locale
     */
    public function getLocalizedSlugAttribute()
    {
        $locale = app()->getLocale();
        
        if ($locale === 'en' && !empty($this->slug_en)) {
            return $this->slug_en;
        }
        
        return $this->slug_tr ?? $this->slug;
    }

    /**
     * Get the image in the current locale
     */
    public function getLocalizedImageAttribute()
    {
        $locale = app()->getLocale();
        
        if ($locale === 'en' && !empty($this->image_en)) {
            return $this->image_en;
        }
        
        return $this->image_tr ?? $this->image;
    }
}
