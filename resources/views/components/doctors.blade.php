<div id="doktorlarimiz" class="bg-background">
    <div class="container py-10 lg:py-20 space-y-10">
        <div class="flex flex-row items-center justify-between ">
            <p class="text-3xl font-semibold tracking-tighter ">{{ __('Doktorlarımız') }}</p>
            <x-icon-tooth class="size-[44px]" />
        </div>
        <div class="grid gap-6 lg:grid-cols-3">
            @foreach ($items as $item)
                <a href="{{ route('doctor', ['slug' => $item->slug]) }}"
                    class="bg-white rounded-[20px] flex flex-col  overflow-hidden group hover:scale-105 transition">
                    <img class="object-cover w-full h-[300px] aspect-square grayscale rounded-[20px] transition group-hover:grayscale-0"
                        src="{{ Storage::url($item['image']) }}" alt="">

                    <div class="flex flex-col p-8 space-y-4">
                        <div class="flex flex-col items-start space-y-4">
                            <p class="text-2xl font-medium tracking-tighter">{{ $item['name'] }}</p>
                            <p
                                class="bg-[#FFF0E6] text-primary px-4 rounded-[10px] tracking-tighter text-lg font-medium">
                                {{ $item['role'] }}</p>

                        </div>
                        <p class="flex-grow font-light tracking-tighter text-placeholder line-clamp-3">
                            {{ $item['description'] }}</p>
                        <div href="" class="flex flex-row items-center justify-end">
                            <p class="font-normal tracking-tighter text-placeholder">{{ __('Devamını Oku') }}</p>
                            <x-icon-right-top-gray class="w-8 h-8" />
                        </div>
                    </div>
                </a>
            @endforeach
        </div>





    </div>
</div>
