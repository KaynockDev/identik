<form wire:submit='send' class="grid gap-3 lg:grid-cols-2">
    @foreach ($items as $item)
        @if (($item['type'] == 'text') | ($item['type'] == 'email'))
            <input wire:model='{{ $item['name'] }}' required type="{{ $item['type'] }}"
                placeholder="{{ $item['placeholder'] }}"
                class="py-[18px] w-full px-[23px] {{ $item['spanFull'] ? 'col-span-full' : '' }} rounded-[10px] bg-white focus:ring-primary focus:border-primary border-contactBorder border-2">
        @endif

        @if ($item['type'] == 'textarea')
            <textarea wire:model='{{ $item['name'] }}' required placeholder="{{ $item['placeholder'] }}" rows="5"
                class="py-[18px]  w-full px-[23px] {{ $item['spanFull'] ? 'col-span-full' : '' }} rounded-[10px] bg-white resize-none focus:ring-primary focus:border-primary border-contactBorder border-2"></textarea>
        @endif
    @endforeach
    <button type="submit"
        class="flex flex-row justify-center items-center h-16 space-x-1 text-2xl rounded-[10px] text-white col-span-full bg-primary">
        <p wire:loading.remove class="font-medium tracking-tighter ">{{ __('Gönder') }}</p>
        <x-icon-send wire:loading.remove class="h-[25px] w-[25px]" />

        <div class="hidden" wire:loading.class.remove="hidden">
            <x-antdesign-loading-3-quarters-o class="w-6 h-6 animate-spin" />
        </div>
    </button>
</form>
