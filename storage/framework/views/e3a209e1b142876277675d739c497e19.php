<div id="tedavilerimiz" class="relative text-white bg-primary">
    <div class="container space-y-8 pt-10 lg:pt-14">
        <div class="flex flex-row items-center justify-between">
            <p class="text-3xl font-medium tracking-tighter"><?php echo e(__('Tedavilerimiz')); ?></p>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon-treatments'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-[70px]']); ?>
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

        <div class="grid gap-6 lg:grid-cols-3">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('treatment', ['slug' => $item->slug])); ?>"
                    class="relative rounded-[20px] overflow-hidden group">
                    <img class="w-full h-full" src="<?php echo e(Storage::url($item['image'])); ?>" alt="">

                    <div class="absolute transition group-hover:opacity-0 mix-blend-hard-light inset-0 bg-[#4E4E4E]">

                    </div>
                    <div class="flex flex-row items-center absolute bottom-[12px] left-[20px]">
                        <div class="flex flex-col">
                            <p class="text-3xl font-semibold tracking-tighter ">
                                <?php echo e($item['name']); ?></p>
                            <div class="w-full h-[3px] bg-white transition opacity-0 group-hover:opacity-100">

                            </div>
                        </div>
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon-arrow-top-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-[44px] transition opacity-0 group-hover:opacity-100']); ?>
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

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="flex flex-row justify-end">
            <?php if (isset($component)) { $__componentOriginal92e02dd7d40f0e75ed63a1f70583b1c0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92e02dd7d40f0e75ed63a1f70583b1c0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.view-all','data' => ['route' => ''.e(route('treatments')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('view-all'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => ''.e(route('treatments')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92e02dd7d40f0e75ed63a1f70583b1c0)): ?>
<?php $attributes = $__attributesOriginal92e02dd7d40f0e75ed63a1f70583b1c0; ?>
<?php unset($__attributesOriginal92e02dd7d40f0e75ed63a1f70583b1c0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92e02dd7d40f0e75ed63a1f70583b1c0)): ?>
<?php $component = $__componentOriginal92e02dd7d40f0e75ed63a1f70583b1c0; ?>
<?php unset($__componentOriginal92e02dd7d40f0e75ed63a1f70583b1c0); ?>
<?php endif; ?>
        </div>



    </div>
    <div
        class="bg-[url('../../public/storage/background.png')] bg-repeat w-full bottom-0 h-28  mix-blend-screen opacity-[0.15]">
    </div>
</div>
<?php /**PATH /Users/yusufozturk/Documents/identik yedekler/identik.com.tr/resources/views/components/treatments.blade.php ENDPATH**/ ?>