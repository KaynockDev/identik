<div id="iletisim" class="pt-10 lg:pt-16 bg-background">

    <div class="container space-y-4">
        <div class="flex flex-row items-center justify-between">
            <p class="text-3xl font-semibold tracking-tighter">
                {{ __('İletişim') }}
            </p>
            <x-icon-contact class="size-[50px] text-primary" />
        </div>
        <div class="grid gap-16 lg:grid-cols-2 lg:flex-row pb-10 lg:pb-[100px]">
            <div class="justify-center space-y-5 ">
                <p class="text-lg font-normal tracking-tighter">
                    {{ __('Herhangi bir sorunuz ya da yardıma ihtiyacınız olursa, bize aşağıdaki iletişim bilgilerinden ulaşabilirsiniz. Size en kısa sürede geri dönüş yapmaktan memnuniyet duyarız!') }}
                </p>
                @livewire('contact-form')


            </div>
            <div class="flex flex-col justify-between h-full gap-10">
                <x-map />


                <div class="grid lg:grid-cols-2 gap-14">
                    <div class="flex flex-row items-center space-x-[27px]">
                        <x-icon-phone class="size-[25px]" />
                        <a href="tel:{{ ConfigService::get('phone') }}"
                            class="text-xl font-normal tracking-tighter">{{ ConfigService::get('phone') }}
                        </a>
                    </div>
                    <div class="flex flex-row items-center space-x-[27px]">
                        <div class="size-[25px]">
                            <x-icon-mail class="size-[25px]" />
                        </div>

                        <a href="mailto:{{ ConfigService::get('email') }}"
                            class="text-xl font-normal tracking-tighter">{{ ConfigService::get('email') }}
                        </a>
                    </div>
                    <div class="flex flex-row space-x-[27px]">
                        <div class="size-[25px]">
                            <x-icon-pin class="size-[25px]" />
                        </div>
                        <div class="space-y-6">
                            <p class="text-xl font-normal tracking-tighter">{!! ConfigService::get('address') !!}</p>
                        </div>
                    </div>
                    <div class="flex flex-row space-x-[27px]">
                        <div class="size-[25px]">
                            <x-icon-clock class="size-[25px]" />
                        </div>

                        <div class="space-y-6">
                            <p class="text-xl font-normal tracking-tighter">{{ __('Çalışma Saatlerimiz') }}:</p>
                            <p class="text-xl font-normal tracking-tighter">{!! ConfigService::get('working_hours') !!}
                            </p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
