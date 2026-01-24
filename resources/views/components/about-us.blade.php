<div id="hakkimizda" class="text-white bg-text pt-10 lg:pt-[66px] pb-[200px] relative">
    <div class="container grid gap-16 lg:grid-cols-2">
        <div class="flex flex-col justify-start space-y-16">
            <p class="text-3xl font-semibold tracking-tighter">{{ __('Hakkımızda') }}</p>
            <div class="max-w-full text-xl font-normal tracking-tighter whitespace-pre-line  prose-invert">@markdown(MarkdownService::get('about_us'))</div>
        </div>

        <div class="grid grid-cols-2 gap-8">
            <img class="rounded-[10px] aspect-[139/94]"
                src="{{ Storage::url(\App\Models\Image::where('key', 'about_us_1')->first()->image) }}" alt="">
            <img class="rounded-[10px] aspect-[139/94]"
                src="{{ Storage::url(\App\Models\Image::where('key', 'about_us_2')->first()->image) }}" alt="">
            <img class="col-span-2 rounded-[10px]"
                src="{{ Storage::url(\App\Models\Image::where('key', 'about_us_3')->first()->image) }}" alt="">
        </div>
    </div>
    <div
        class="bg-[url('../../public/storage/background.png')] bg-repeat absolute w-full bottom-2 h-[193px]  mix-blend-screen opacity-[0.05]">
    </div>
</div>
