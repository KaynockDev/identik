<div class="p-5 pb-10 bg-background lg:py-10 lg:pb-20">
    <div class="container space-y-10">
        <p class="text-3xl font-semibold tracking-tighter text-text">
            {{ __($title) }}
        </p>
        <div
            class="max-w-full p-5 text-2xl font-light tracking-tighter whitespace-pre-line  prose bg-white lg:p-10 rounded-xl text-text">@markdown(\App\Models\Markdown::where('key', $markdown)->first()->value, '')</div>
    </div>
</div>
  