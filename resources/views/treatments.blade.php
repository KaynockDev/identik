<x-layouts.app>
    <div class="relative">
        <div
            class="bg-[url('../../public/storage/background.png')] bg-repeat absolute w-full   h-[193px] -top-20 opacity-[0.08]">
        </div>
        <div class="container flex flex-row items-center justify-between py-5 lg:py-16">
            <p class="text-3xl font-semibold tracking-tighter text-text">
                Tedavilerimiz
            </p>
            <x-icon-treatments class="size-[70px] text-text" />
        </div>
        <div x-cloak x-data="{
            selectedSlug: '{{ request()->segment(2) ?? \App\Models\Treatment::first()->slug }}',
            changeUrl(slug) {
                const newUrl = `/tedavilerimiz/${slug}`;
                window.history.pushState({}, '', newUrl); // URL'i günceller, sayfa yeniden yüklenmez
            }
        }" class="container grid gap-6 pb-16 lg:grid-cols-12">
            <div class="flex flex-col self-start p-8 space-y-3 bg-white rounded-2xl lg:col-span-3">
                @foreach (\App\Models\Treatment::all() as $item)
                    <div @click="selectedSlug = '{{ $item->slug }}'; changeUrl('{{ $item->slug }}');"
                        :class="selectedSlug === '{{ $item->slug }}' ? 'bg-primary text-white border-primary' : 'text-primary'"
                        class="cursor-pointer rounded-xl border-2 border-[#FFD5B7] transition  hover:border-primary hover:bg-primary hover:text-white">
                        <p class="px-5 py-2 text-xl tracking-tighter text-center ">{{ $item->name }}</p>
                    </div>
                @endforeach
            </div>
            <div class="flex flex-col p-8 bg-white h-fit rounded-2xl lg:col-span-9 ">


                @foreach (\App\Models\Treatment::all() as $item)
                    <div x-show="selectedSlug==='{{ $item->slug }}'" class="space-y-10">
                        <div class="grid gap-10 lg:grid-cols-3">
                            <div class="space-y-10 lg:col-span-2">
                                <div class="flex flex-col items-start space-y-3">
                                    <p class="text-4xl font-semibold tracking-tighter text-text">{{ $item->name }}</p>

                                </div>
                                <div class="text-2xl font-light tracking-tighter prose text-text">@markdown($item->description)</div>
                            </div>
                            <img src="{{ Storage::disk('public')->url($item->image) }}" class="object-cover rounded-3xl aspect-square"
                                alt="{{ $item->name }}">
                        </div>

                        @if ($item->content)
                            <div
                                class="max-w-full text-2xl font-light whitespace-pre-line  tracking-tighter prose text-text">@markdown($item->content)</div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>
