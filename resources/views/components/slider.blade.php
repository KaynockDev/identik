<div x-data="{
    slides: {{ \App\Models\Banner::all() }},
    currentSlideIndex: 1,
    previous() {
        if (this.currentSlideIndex > 1) {
            this.currentSlideIndex = this.currentSlideIndex - 1
        } else {
            this.currentSlideIndex = this.slides.length
        }
        // Emit event to parent
        this.$dispatch('slide-changed', { index: this.currentSlideIndex })
    },
    next() {
        if (this.currentSlideIndex < this.slides.length) {
            this.currentSlideIndex = this.currentSlideIndex + 1
        } else {
            this.currentSlideIndex = 1
        }
        // Emit event to parent
        this.$dispatch('slide-changed', { index: this.currentSlideIndex })
    },
}" class="relative w-full h-full min-h-[400px] lg:min-h-[500px]">

    <!-- previous button -->
    <button type="button"
        class="absolute z-20 flex items-center justify-center p-2 transition -translate-y-1/2 rounded-full left-5 top-1/2"
        aria-label="previous slide" x-on:click="previous()">
        <x-icon-arrow class="size-[30px] rotate-180" />
    </button>

    <!-- next button -->
    <button type="button"
        class="absolute z-20 flex items-center justify-center p-2 transition -translate-y-1/2 rounded-full right-5 top-1/2"
        aria-label="next slide" x-on:click="next()">
        <x-icon-arrow class="size-[30px]" />
    </button>

    <!-- slides -->
    <div class="relative w-full h-full">
        <template x-for="(slide, index) in slides">
            <div x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                <img class="absolute inset-0 object-cover w-full h-full  {{ $introductionMode ? 'rounded-b-[23px] lg:rounded-r-[23px] lg:rounded-bl-none' : '' }} "
                    x-bind:src="'/storage/' + slide.image" x-bind:alt="slide.imgAlt" />
            </div>
        </template>
    </div>
</div>
