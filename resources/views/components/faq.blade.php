<div id="sss" class="text-text  relative">
    <div class="container max-w-5xl mx-auto px-4">

        <!-- Header Section -->
        <div class="text-center py-16">

            <p class="text-3xl font-bold tracking-tighter">
              {{ __('Sıkça Sorulan Sorular') }}
            </p>
            <p class="text-xl font-normal tracking-tighter text-text/70 mb-8 leading-relaxed">
                {{ __('Diş sağlığınız hakkında merak ettiğiniz soruların cevaplarını burada bulabilirsiniz.') }}
            </p>
        </div>

        <!-- FAQ Section -->
        <div class="space-y-6" x-data="{ openItem: null }">
            @php
                $faqs = \App\Models\Faq::active()->orderBy('order')->get();
            @endphp
            
            @foreach($faqs as $index => $faq)
            <div class="bg-white rounded-3xl border border-gray-100 overflow-hidden transition-all duration-300">
                <button @click="openItem = openItem === {{ $index + 1 }} ? null : {{ $index + 1 }}" 
                        class="w-full px-8 py-6 text-center hover:bg-gray-50/50 transition-all duration-300 group">
                    <div class="flex items-center justify-between w-full px-5">
                        <p class="text-xl font-normal text-text group-hover:text-primary transition-colors duration-300 tracking-tighter truncate pr-4">
                            {{ $faq->localized_question }}
                        </p>
                        <div class="flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary transition-all duration-300 transform group-hover:scale-110" :class="{ 'rotate-180': openItem === {{ $index + 1 }} }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </button>
                <div x-show="openItem === {{ $index + 1 }}" 
                     x-transition:enter="transition ease-out duration-300" 
                     x-transition:enter-start="opacity-0 transform -translate-y-4" 
                     x-transition:enter-end="opacity-100 transform translate-y-0" 
                     x-transition:leave="transition ease-in duration-200" 
                     x-transition:leave-start="opacity-100 transform translate-y-0" 
                     x-transition:leave-end="opacity-0 transform -translate-y-4" 
                     class="px-8 pb-6">
                    <div class="pl-8">
                        <div class="bg-gradient-to-r from-primary/5 to-transparent rounded-2xl p-5 border-l-4 border-primary">
                            <div class="tracking-tighter whitespace-pre-line break-words">
                                {!! $faq->localized_answer !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Contact Section -->
        <div class="text-center py-20">     
                
            <h2 class="text-3xl lg:text-4xl font-bold text-text tracking-tighter" style="font-size: 1.5rem;">
                {{ __('Başka sorularınız mı var?') }}
            </h2>
                
            <p class="tracking-tighter mb-8">
                {{ __('Uzman ekibimiz size yardımcı olmaya hazır! Hemen iletişime geçin.') }}
            </p>

            <div class="h-8"></div>

            <a href="/#iletisim" class="inline-flex items-center px-6 py-5 bg-primary text-white rounded-2xl font-semibold text-md hover:bg-primary/90 transition-all duration-300 transform hover:scale-105 mb-10  ">
                {{ __('Bizimle İletişime Geçin') }}
            </a>
        </div>
    </div>
</div>
