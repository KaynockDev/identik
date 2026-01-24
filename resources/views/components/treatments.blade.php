<div id="tedavilerimiz" class="relative text-white bg-primary">
    <div class="container space-y-8 pt-10 lg:pt-14">
        <div class="flex flex-row items-center justify-between">
            <p class="text-3xl font-medium tracking-tighter">{{ __('Tedavilerimiz') }}</p>
            <x-icon-treatments class="size-[70px]" />
        </div>

        <div class="grid gap-6 lg:grid-cols-3">
            @foreach ($items as $item)
                <a href="{{ route('treatment', ['slug' => $item->slug]) }}"
                    class="relative rounded-[20px] overflow-hidden group">
                    <img class="w-full h-full" src="{{ Storage::url($item['image']) }}" alt="">

                    <div class="absolute transition group-hover:opacity-0 mix-blend-hard-light inset-0 bg-[#4E4E4E]">

                    </div>
                    <div class="flex flex-row items-center absolute bottom-[12px] left-[20px]">
                        <div class="flex flex-col">
                            <p class="text-3xl font-semibold tracking-tighter ">
                                {{ $item['name'] }}</p>
                            <div class="w-full h-[3px] bg-white transition opacity-0 group-hover:opacity-100">

                            </div>
                        </div>
                        <x-icon-arrow-top-right class="size-[44px] transition opacity-0 group-hover:opacity-100" />
                    </div>

                </a>
            @endforeach
        </div>
        <div class="flex flex-row justify-end">
            <x-view-all route="{{ route('treatments') }}" />
        </div>



    </div>
    <div
        class="bg-[url('../../public/storage/background.png')] bg-repeat w-full bottom-0 h-28  mix-blend-screen opacity-[0.15]">
    </div>
</div>
