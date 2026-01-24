<div class="relative py-10 pb-16 lg:py-[140px] bg-background" x-data="{
    slides: <?php echo e(\App\Models\Banner::all()); ?>,
    currentSlideIndex: 1,
}" x-on:slide-changed.window="currentSlideIndex = $event.detail.index">
    <div class="container ">
        <div class="border-[3px] grid lg:grid-cols-2 border-border rounded-[25px]">
            <div class="flex flex-col justify-center p-8 lg:p-[50px] space-y-4 lg:space-y-6 min-h-[300px] md:min-h-[400px] lg:min-h-[500px]">
                <div class="space-y-4 lg:space-y-6">
                    <!-- Changing title -->
                    <div class="relative h-16 lg:h-20">
                        <template x-for="(slide, index) in slides">
                            <div x-show="currentSlideIndex == index + 1" x-transition.opacity.duration.1000ms class="absolute inset-0">
                                <p class="text-4xl font-semibold tracking-tighter text-primary break-words leading-tight" x-text="<?php echo e(app()->getLocale() === 'en' ? 'slide.title_en || slide.title' : 'slide.title || slide.title_en'); ?>"></p>
                            </div>
                        </template>
                    </div>
                    
                    <!-- Additional spacing between title and subtitle - only on mobile -->
                    <div class="h-4 block lg:hidden"></div>
                    
                    <div class="flex flex-col space-y-3">
                        <!-- Changing subtitle -->
                        <div class="relative h-[3rem] lg:h-[3.5rem] flex items-end">
                            <template x-for="(slide, index) in slides">
                                <div x-show="currentSlideIndex == index + 1" class="absolute bottom-0 left-0 right-0">
                                    <p class="text-2xl font-medium tracking-tighter text-text leading-tight break-words" x-text="<?php echo e(app()->getLocale() === 'en' ? 'slide.subtitle_en || slide.subtitle' : 'slide.subtitle || slide.subtitle_en'); ?>"></p>
                                </div>
                            </template>
                        </div>
                        
                        <!-- Changing description -->
                        <div class="relative">
                            <template x-for="(slide, index) in slides">
                                <div x-show="currentSlideIndex == index + 1" class="min-h-[5rem] lg:min-h-[6rem]">
                                    <p class="text-xl font-normal tracking-tighter text-text leading-relaxed break-words" x-text="<?php echo e(app()->getLocale() === 'en' ? 'slide.description_en || slide.description' : 'slide.description || slide.description_en'); ?>"></p>
                                </div>
                            </template>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-5">
                        <a href="#iletisim"
                            class="border-[2px] rounded-[10px] font-medium border-text bg-text transition hover:opacity-75 text-white lg:text-base text-sm h-14 px-3 lg:px-6 flex justify-center items-center"><?php echo e(__('Randevu Al')); ?></a>
                        <a href="tel:<?php echo e(ConfigService::get('phone')); ?>"
                            class="border-[2px] rounded-[10px] font-medium border-primary bg-primary transition hover:opacity-75 text-white lg:text-base text-sm h-14 px-3 lg:px-6 flex justify-center items-center gap-2">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4','style' => 'filter: brightness(0) invert(1);']); ?>
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
                            <?php echo e(__('Ara')); ?>

                        </a>
                        <a target="_blank" href="<?php echo e(ConfigService::get('google_maps')); ?>"
                            class="border-[2px] rounded-[10px] font-medium border-border text-text h-14 px-3 lg:px-6 transition hover:bg-primary lg:text-base text-sm hover:border-primary hover:text-white flex justify-center items-center"><?php echo e(__('Yol Tarifi')); ?></a>
                    </div>
                </div>
            </div>
            <div class="relative w-full h-full min-h-[300px] md:min-h-[400px] lg:min-h-[500px] order-1 lg:order-2">
                <?php if (isset($component)) { $__componentOriginala02b71ca7fa3d8670dc711f95469e1f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala02b71ca7fa3d8670dc711f95469e1f3 = $attributes; } ?>
<?php $component = App\View\Components\Slider::resolve(['introductionMode' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Slider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala02b71ca7fa3d8670dc711f95469e1f3)): ?>
<?php $attributes = $__attributesOriginala02b71ca7fa3d8670dc711f95469e1f3; ?>
<?php unset($__attributesOriginala02b71ca7fa3d8670dc711f95469e1f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala02b71ca7fa3d8670dc711f95469e1f3)): ?>
<?php $component = $__componentOriginala02b71ca7fa3d8670dc711f95469e1f3; ?>
<?php unset($__componentOriginala02b71ca7fa3d8670dc711f95469e1f3); ?>
<?php endif; ?>
            </div>
        </div>

        <!-- indicators -->
        <div class="absolute rounded-md mt-6 left-1/2 -translate-x-1/2 z-20 flex justify-center items-center gap-4 md:gap-3 px-1.5 py-1 md:px-2"
            role="group" aria-label="slides">
            <template x-for="(slide, index) in slides">
                <button class="transition rounded-full cursor-pointer size-3 p-[3px] bg-[#5F5F5F] flex justify-center items-center"
                    x-on:click="currentSlideIndex = index + 1" x-bind:aria-label="'slide ' + (index + 1)">
                    <div x-show="currentSlideIndex == index + 1" class="size-[6px] bg-[#FFF0E6] rounded-full">
                    </div>
                </button>
            </template>
        </div>

    </div>

    <!-- Original background pattern -->
    <div 
        class="bg-[url('../../public/storage/background.png')] bg-repeat w-full bottom-0 h-28 absolute opacity-[0.08]">
    </div>
</div>
<?php /**PATH /Users/yusufozturk/Documents/identik yedekler/identik.com.tr/resources/views/components/introduction.blade.php ENDPATH**/ ?>