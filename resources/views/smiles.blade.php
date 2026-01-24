<x-layouts.app>
    <div class="relative">
        <div
            class="bg-[url('../../public/storage/background.png')] bg-repeat absolute w-full   h-[193px] -top-20 opacity-[0.08]">
        </div>
        <div class="container flex flex-row items-center justify-between py-5 lg:py-16">
            <p class="text-3xl font-semibold tracking-tighter text-text">
                Gülüşlerimiz
            </p>
            <x-icon-smile class="size-[70px] text-text" />
        </div>
        <div class="container pb-16">
            <div class="grid gap-6 lg:grid-cols-3">
                @foreach (\App\Models\Smile::all() as $item)
                    <div>
                        <div class="rounded-[20px] overflow-hidden">
                            <x-change-slider beforeImage="{{ Storage::url($item['before_image']) }}"
                                afterImage="{{ Storage::url($item['after_image']) }}" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>
