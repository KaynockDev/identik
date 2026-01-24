<div id="guluslerimiz" class="relative text-white bg-primary">
    <div
        class="bg-[url('../../public/storage/background.png')] bg-repeat absolute w-full bottom-0 h-[193px] top-2 mix-blend-screen opacity-[0.15]">
    </div>
    <div class="container z-10 py-16 space-y-6">
        <div class="flex flex-row items-center justify-between">
            <p class="text-3xl font-semibold tracking-tighter"><?php echo e(__('Gülüşlerimiz')); ?></p>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon-smile'); ?>
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
                <div class="rounded-[20px] overflow-hidden">
                    <?php if (isset($component)) { $__componentOriginaldbc16265a541befd8afe28bc9399bae9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldbc16265a541befd8afe28bc9399bae9 = $attributes; } ?>
<?php $component = App\View\Components\ChangeSlider::resolve(['beforeImage' => ''.e(Storage::url($item['before_image'])).'','afterImage' => ''.e(Storage::url($item['after_image'])).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('change-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ChangeSlider::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldbc16265a541befd8afe28bc9399bae9)): ?>
<?php $attributes = $__attributesOriginaldbc16265a541befd8afe28bc9399bae9; ?>
<?php unset($__attributesOriginaldbc16265a541befd8afe28bc9399bae9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldbc16265a541befd8afe28bc9399bae9)): ?>
<?php $component = $__componentOriginaldbc16265a541befd8afe28bc9399bae9; ?>
<?php unset($__componentOriginaldbc16265a541befd8afe28bc9399bae9); ?>
<?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="flex flex-row items-center justify-end">
            <?php if (isset($component)) { $__componentOriginal92e02dd7d40f0e75ed63a1f70583b1c0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92e02dd7d40f0e75ed63a1f70583b1c0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.view-all','data' => ['route' => '/guluslerimiz']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('view-all'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => '/guluslerimiz']); ?>
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


</div>
<?php /**PATH /Users/yusufozturk/Documents/identik yedekler/identik.com.tr/resources/views/components/smiles.blade.php ENDPATH**/ ?>