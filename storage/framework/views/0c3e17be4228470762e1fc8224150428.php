<div x-data="{ showMenu: false }" class="fixed z-50 w-full shadow-sm bg-background shadow-primary/10">
    <div class="container flex flex-row items-center justify-between h-[100px]">
        <a href="/">
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-[25px] w-auto lg:h-[35px]']); ?>
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
        </a>
        <div class="hidden lg:flex flex-row space-x-[50px]" x-cloak>
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($item['route']); ?>" class="text-lg font-medium group text-text tracking-[-5%] relative">

                    <p class="transition duration-500 ease-out group-hover:scale-105 group-hover:-translate-y-1 px-2.5">
                        <?php echo e($item['name']); ?></p>
                    <div
                        class="absolute bottom-0 left-0 right-0 opacity-0 group-hover:opacity-100 duration-500 ease-out transition-all mx-auto h-[3px] rounded-full bg-primary">
                    </div>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div x-data="{
                isTurkish: <?php echo e(app()->getLocale() === 'tr' ? 'true' : 'false'); ?>,
                menuEnabled: false
            }">
                <div @click="menuEnabled=!menuEnabled"
                    class="flex flex-row items-center justify-center w-20 px-2 py-1 space-x-2 cursor-pointer"
                    :class="menuEnabled ? 'border border-border  border-b-0 rounded-t-lg' : 'border border-border rounded-lg '">
                    <p x-text="isTurkish ? 'TUR' : 'ENG'" class="text-sm font-light tracking-tighter text-text">

                    </p>
                    <img class="size-[17px]"
                        x-bind:src='isTurkish ? "/storage/turkish.png" :
                            "/storage/english.png"'
                        alt="">
                </div>

                <div x-show="menuEnabled" class="flex-1 h-[1px] bg-border mx-2">

                </div>

                <a x-bind:href="isTurkish ? '/english' : '/turkce'" x-show="menuEnabled"
                    class="absolute -translate-y-[1px] flex flex-row items-center justify-center w-20 px-2 py-1 space-x-2 border border-t-0 rounded-b-lg cursor-pointer border-border">
                    <p x-text="isTurkish ? 'ENG' : 'TUR'" class="text-sm font-light tracking-tighter text-text">

                    </p>
                    <img class="size-[17px]"
                        x-bind:src='isTurkish ? "/storage/english.png" :
                            "/storage/turkish.png"'
                        alt="">
                </a>


            </div>
        </div>



        <div @click="showMenu = !showMenu"
            class="flex flex-col justify-center w-16 h-16 px-5 space-y-2 translate-x-4 cursor-pointer xl:hidden">

            <div class="duration-300 transition w-full h-[2px] bg-primary opacity-80"
                :class="{ '-rotate-45 translate-y-[4.75px]': showMenu == true }">
            </div>

            <div class="duration-300 w-full h-[2px] bg-primary opacity-80 transition"
                :class="{ 'rotate-45 -translate-y-[4.75px]': showMenu == true }">
            </div>

        </div>



    </div>


    <div x-show="showMenu" x-cloak x-transition:enter=" ease-in duration-100" x-transition:enter-start="opacity-0 "
        x-transition:enter-end="opacity-100 " x-transition:leave=" ease-in duration-100"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="absolute  left-0 h-screen right-0 z-50 py-5 top-[100px] xl:hidden backdrop-blur-3xl bg-background/75">
        <div class="container space-y-4 " x-data="{
            selectedIndex: 0
        }">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a @click="showMenu = false" href="<?php echo e($page['route']); ?>" x-cloak
                    class="flex flex-row items-center py-2 font-medium transition rounded-lg opacity-50 hover:opacity-100 ">
                    <p><?php echo e($page['name']); ?></p>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>



    </div>

</div>

<div class=" h-[100px]">

</div>
<?php /**PATH /Users/yusufozturk/Documents/identik yedekler/identik.com.tr/resources/views/components/navigation.blade.php ENDPATH**/ ?>