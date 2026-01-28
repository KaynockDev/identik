@php
    $locale = app()->getLocale();
    $selectedBlog = $selectedBlog ?? null;
    $seoModel = $selectedBlog ?? null;
@endphp

<x-layouts.app :seoModel="$seoModel">
    <div class="relative">
        <div
            class="bg-[url('../../public/storage/background.png')] bg-repeat absolute w-full   h-[193px] -top-20 opacity-[0.08]">
        </div>
        <div class="container flex flex-row items-center justify-between py-5 lg:py-16">
            <p class="text-3xl font-semibold tracking-tighter text-text">
                {{ __('Blog') }}
            </p>
            <x-icon-treatments class="size-[70px] text-text" />
        </div>
        @if($blogs->count() > 0)
        <div x-cloak x-data="{
            selectedSlug: '{{ $selectedBlog ? ($locale === 'en' ? ($selectedBlog->slug_en ?? $selectedBlog->slug_tr) : ($selectedBlog->slug_tr ?? $selectedBlog->slug_en)) : ($blogs->first() ? ($locale === 'en' ? ($blogs->first()->slug_en ?? $blogs->first()->slug_tr) : ($blogs->first()->slug_tr ?? $blogs->first()->slug_en)) : '') }}',
            changeUrl(slug) {
                const newUrl = `/blog/${slug}`;
                window.location.href = newUrl;
            }
        }" class="container grid gap-6 pb-16 lg:grid-cols-12">
            <div class="flex flex-col self-start p-8 space-y-3 bg-white rounded-2xl lg:col-span-3">
                @foreach ($blogs as $item)
                    @php
                        $itemSlug = $locale === 'en' ? ($item->slug_en ?? $item->slug_tr) : ($item->slug_tr ?? $item->slug_en);
                        $itemTitle = $locale === 'en' && $item->title_en ? $item->title_en : ($item->title_tr ?? '');
                    @endphp
                    <div @click="selectedSlug = '{{ $itemSlug }}'; changeUrl('{{ $itemSlug }}');"
                        :class="selectedSlug === '{{ $itemSlug }}' ? 'bg-primary text-white border-primary' : 'text-primary'"
                        class="cursor-pointer rounded-xl border-2 border-[#FFD5B7] transition  hover:border-primary hover:bg-primary hover:text-white">
                        <p class="px-5 py-2 text-xl tracking-tighter text-center ">{{ $itemTitle }}</p>
                    </div>
                @endforeach
            </div>
            <div class="flex flex-col p-8 bg-white h-fit rounded-2xl lg:col-span-9 ">

                @foreach ($blogs as $item)
                    @php
                        $itemSlug = $locale === 'en' ? ($item->slug_en ?? $item->slug_tr) : ($item->slug_tr ?? $item->slug_en);
                        $itemTitle = $locale === 'en' && $item->title_en ? $item->title_en : ($item->title_tr ?? '');
                        $itemImage = $locale === 'en' && $item->image_en ? $item->image_en : ($item->image_tr ?? $item->image);
                        $itemContent = $locale === 'en' && $item->content_en ? $item->content_en : ($item->content_tr ?? '');
                    @endphp
                    <div x-show="selectedSlug==='{{ $itemSlug }}'" class="space-y-10">
                        <div class="grid gap-10 lg:grid-cols-3">
                            <div class="space-y-10 lg:col-span-2">
                                <div class="flex flex-col items-start space-y-3">
                                    <p class="text-4xl font-semibold tracking-tighter text-text">{{ $itemTitle }}</p>
                                    @if($item->published_at)
                                        <p class="text-lg font-light tracking-tighter text-gray-500">
                                            {{ $item->published_at->format('d.m.Y') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <img src="{{ Storage::disk('public')->url($itemImage) }}" class="object-cover rounded-3xl aspect-square"
                                alt="{{ $itemTitle }}">
                        </div>

                        @if ($itemContent)
                            <div
                                class="max-w-full text-2xl font-light whitespace-pre-line  tracking-tighter prose text-text">@markdown($itemContent)</div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="container pb-16">
            <div class="flex flex-col items-center justify-center p-8 bg-white rounded-2xl">
                <p class="text-2xl font-light tracking-tighter text-text">{{ __('Henüz blog yazısı bulunmamaktadır.') }}</p>
            </div>
        </div>
        @endif
    </div>
</x-layouts.app>
