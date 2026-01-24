<div id="sss" class=" bg-white py-[72px]">
    <div class="container space-y-10">

        <!-- Header Section -->
        <div class="space-y-3">
            <div class="flex flex-row items-center justify-between">
                <p class="text-3xl font-bold tracking-tighter">
                    <?php echo e(__('Sıkça Sorulan Sorular')); ?>

                </p>
                <svg class="size-[50px] text-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 6h.01"></path>
                </svg>
            </div>
            <p class="text-xl font-normal tracking-tighter">
                <?php echo e(__('Diş sağlığınız hakkında merak ettiğiniz soruların cevaplarını burada bulabilirsiniz.')); ?>

            </p>
        </div>

        <!-- FAQ Preview Section (First 3 questions) -->
        <div class="space-y-6 mb-12" x-data="{ openItem: null }">
            <?php
                $faqs = \App\Models\Faq::active()->showOnHomepage()->orderBy('order')->take(3)->get();
            ?>
            
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white rounded-3xl border border-gray-100 overflow-hidden transition-all duration-300">
                <button @click="openItem = openItem === <?php echo e($index + 1); ?> ? null : <?php echo e($index + 1); ?>" 
                        class="w-full px-8 py-6 text-center hover:bg-gray-50/50 transition-all duration-300 group">
                    <div class="flex items-center justify-between w-full px-5">
                        <p class="text-xl font-medium tracking-tighter text-text truncate pr-4">
                            <?php echo e($faq->localized_question); ?>

                        </p>
                        <div class="flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary transition-all duration-300 transform group-hover:scale-110" :class="{ 'rotate-180': openItem === <?php echo e($index + 1); ?> }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </button>
                <div x-show="openItem === <?php echo e($index + 1); ?>" 
                     x-transition:enter="transition ease-out duration-300" 
                     x-transition:enter-start="opacity-0 transform -translate-y-4" 
                     x-transition:enter-end="opacity-100 transform translate-y-0" 
                     x-transition:leave="transition ease-in duration-200" 
                     x-transition:leave-start="opacity-100 transform translate-y-0" 
                     x-transition:leave-end="opacity-0 transform -translate-y-4" 
                     class="px-8 pb-6">
                    <div class="pl-8">
                        <div class="bg-gradient-to-r from-primary/5 to-transparent rounded-2xl p-5 border-l-4 border-primary">
                            <div class="text-xl font-normal text-text group-hover:text-primary transition-colors duration-300 tracking-tighter whitespace-pre-line break-words">
                                <?php echo $faq->localized_answer; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- View All Button -->
        <div class="flex flex-row justify-end">
            <a href="<?php echo e(route('faq')); ?>" class="flex flex-col group">
                <div class="flex flex-row items-center">
                    <p class="text-lg font-normal tracking-tighter transition duration-500 ease-out opacity-70 group-hover:opacity-100 text-text">
                        <?php echo e(__('Tümüne Göz At')); ?></p>
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon-right-top-gray'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 transition duration-500 ease-out opacity-70 group-hover:opacity-100']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                </div>
                <div class="w-full h-[3px] bg-text transition duration-500 ease-out opacity-0 group-hover:opacity-100">
                </div>
            </a>
        </div>  
    </div>
</div>
<?php /**PATH /Users/yusufozturk/Documents/identik yedekler/identik.com.tr/resources/views/components/faq-preview.blade.php ENDPATH**/ ?>