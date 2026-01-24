<div x-data="{ sliderPosition: 50, dragging: false }" class="relative">
    <div class="relative overflow-hidden aspect-video">
        <img src="<?php echo e($afterImage); ?>" alt="Öncesi" class="absolute inset-0 object-cover w-full h-full" />

        <img src="<?php echo e($beforeImage); ?>" alt="Sonrası" class="absolute inset-0 object-cover w-full h-full"
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
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-chevron-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-10']); ?>
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
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-chevron-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-10']); ?>
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
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/yusufozturk/Documents/identik yedekler/identik.com.tr/resources/views/components/change-slider.blade.php ENDPATH**/ ?>