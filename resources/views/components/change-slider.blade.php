<div x-data="{ sliderPosition: 50, dragging: false }" class="relative">
    <div class="relative overflow-hidden aspect-video">
        <img src="{{ $afterImage }}" alt="Öncesi" class="absolute inset-0 object-cover w-full h-full" />

        <img src="{{ $beforeImage }}" alt="Sonrası" class="absolute inset-0 object-cover w-full h-full"
            :style="{ clipPath: `inset(0 ${100 - sliderPosition}% 0 0)` }" />

        <div class="absolute inset-y-0 left-0 z-10 flex flex-col w-1 h-full bg-white"
            :style="{ left: `${sliderPosition}%` }" x-cloak>
            <div class="relative flex flex-col items-center justify-center h-full">
                <div class="inset-0 z-50 flex flex-row items-center justify-center w-20 h-20 bg-transparent border-4 border-white rounded-full cursor-ew-resize"
                    @mousedown.prevent="dragging = true"
                    @mousemove.window="
                        if (dragging) {
                            const rect = $el.parentElement.parentElement.parentElement.getBoundingClientRect();
                            sliderPosition = ((event.clientX - rect.left) / rect.width) * 100;
                        }
                    "
                    @mouseup.window="dragging = false" @touchstart.prevent="dragging = true"
                    @touchmove.window="
                        if (dragging) {
                            const touch = event.touches[0];
                            const rect = $el.parentElement.parentElement.parentElement.getBoundingClientRect();
                            sliderPosition = ((touch.clientX - rect.left) / rect.width) * 100;
                        }
                    "
                    @touchend.window="dragging = false">
                    <x-heroicon-o-chevron-left class="size-10" />
                    <x-heroicon-o-chevron-right class="size-10" />
                </div>
            </div>
        </div>
    </div>
</div>
