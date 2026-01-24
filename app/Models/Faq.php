<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\SortScope;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'question_en',
        'answer',
        'answer_en',
        'order',
        'is_active',
        'show_on_homepage'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'show_on_homepage' => 'boolean',
    ];

    protected static function booted()
    {
        static::addGlobalScope(new SortScope);

        // Auto-assign order number for new FAQs (highest + 1 to appear at bottom)
        static::creating(function ($faq) {
            if (is_null($faq->order)) {
                $maxOrder = static::max('order') ?? 0;
                $faq->order = $maxOrder + 1;
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeShowOnHomepage($query)
    {
        return $query->where('show_on_homepage', true);
    }

    /**
     * Get the question in the current locale
     */
    public function getLocalizedQuestionAttribute()
    {
        $locale = app()->getLocale();
        
        if ($locale === 'en' && !empty($this->question_en)) {
            return $this->question_en;
        }
        
        return $this->question;
    }

    /**
     * Get the answer in the current locale
     */
    public function getLocalizedAnswerAttribute()
    {
        $locale = app()->getLocale();
        
        if ($locale === 'en' && !empty($this->answer_en)) {
            return $this->answer_en;
        }
        
        return $this->answer;
    }

    /**
     * Reorder FAQs to ensure sequential order numbers
     */
    public static function reorderAll()
    {
        $faqs = static::orderBy('order')->get();
        
        foreach ($faqs as $index => $faq) {
            $faq->update(['order' => $index + 1]);
        }
    }
}
