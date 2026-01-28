<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Blog;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Blog oluşturulduğunda otomatik olarak yayınlanır
        $data['published_at'] = now();
        
        // Sıralama otomatik olarak mevcut blog sayısı + 1
        $data['sort'] = Blog::count() + 1;
        
        // Slug kolonunu slug_tr'den doldur (geriye dönük uyumluluk için)
        $data['slug'] = $data['slug_tr'] ?? null;

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Blog başarıyla oluşturuldu';
    }
}
