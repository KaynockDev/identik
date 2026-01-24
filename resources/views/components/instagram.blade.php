<div class="py-10 lg:py-20 bg-white">
    <div class="container space-y-16">
        <div class="flex flex-row items-center justify-between">
            <p class="text-3xl font-semibold tracking-tighter">
                {{ __('Sosyal Medyada Biz') }}
            </p>
            <x-icon-social class="size-[75px]" />
        </div>

        <div class="flex flex-col space-y-6">
            <div class="flex flex-row items-center space-x-4">
                <x-icon-instagram />
                <a target="_blank" href="https://instagram.com/{{ ConfigService::get('instagram_id') }}"
                    class="text-2xl tracking-tighter">@<span
                        class="underline">{{ ConfigService::get('instagram_id') }}</span></a>
            </div>
            <div class="grid gap-6 lg:grid-cols-5">
                @foreach ($items as $item)
                    <a target="_blank" class="transition hover:scale-105" href="{{ $item->permalink }}">
                        <div class="aspect-[9/16] rounded-xl overflow-hidden relative">
                            <img class="object-cover w-full h-full" src="{{ $item->thumbnail_url }}">
                            <div class="absolute z-50 flex flex-row items-center space-x-2 bottom-4 left-4 drop-shadow">
                                <x-heroicon-s-heart class="text-white size-4" />
                                <p class="text-sm font-semibold text-white">{{ $item->like_count }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
