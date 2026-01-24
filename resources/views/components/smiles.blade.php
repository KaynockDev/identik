<div id="guluslerimiz" class="relative text-white bg-primary">
    <div
        class="bg-[url('../../public/storage/background.png')] bg-repeat absolute w-full bottom-0 h-[193px] top-2 mix-blend-screen opacity-[0.15]">
    </div>
    <div class="container z-10 py-16 space-y-6">
        <div class="flex flex-row items-center justify-between">
            <p class="text-3xl font-semibold tracking-tighter">{{ __('Gülüşlerimiz') }}</p>
            <x-icon-smile class="size-[70px]" />
        </div>
        <div class="grid gap-6 lg:grid-cols-3">
            @foreach ($items as $item)
                <div class="rounded-[20px] overflow-hidden">
                    <x-change-slider beforeImage="{{ Storage::url($item['before_image']) }}"
                        afterImage="{{ Storage::url($item['after_image']) }}" />
                </div>
            @endforeach
        </div>
        <div class="flex flex-row items-center justify-end">
            <x-view-all route="/guluslerimiz" />

        </div>
    </div>


</div>
