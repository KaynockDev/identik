<div class="border-t-[2px] border-[#FFD5B7] bg-white">
    <div class="container grid gap-16 py-16 font-light xl:grid-cols-12">
        <div class="xl:col-span-4 space-y-7">
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-[35px]']); ?>
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
            <div class="space-y-3">
                <p class="font-medium tracking-tighter"><?php echo e(__('iDentik Ağız ve Diş Sağlığı Polikliniği')); ?></p>
                <p class="font-light leading-10 tracking-tighter"><?php echo ConfigService::get('address'); ?></p>
            </div>

        </div>
        <div class="space-y-8 xl:col-span-2">
            <p class="text-2xl font-medium tracking-tighter"><?php echo e(config('app.name')); ?></p>
            <div class="flex flex-col items-start space-y-6">
                <a href="tel:<?php echo e(ConfigService::get('phone')); ?>"
                    class="tracking-tighter"><?php echo e(ConfigService::get('phone')); ?></a>
                <a href="mailto:<?php echo e(ConfigService::get('email')); ?>"
                    class="tracking-tighter"><?php echo e(ConfigService::get('email')); ?></a>
            </div>
        </div>
        <div class="space-y-8 xl:col-span-2">
            <p class="text-2xl font-medium tracking-tighter"><?php echo e(__('Kurumsal')); ?></p>
            <div class="flex flex-col items-start space-y-6">
                <a href="<?php echo e(route('doctors')); ?>" class="tracking-tighter "><?php echo e(__('Doktorlarımız')); ?></a>
                <a href="<?php echo e(route('faq')); ?>" class="tracking-tighter "><?php echo e(__('SSS')); ?></a>
                <a href="<?php echo e(route('kvkk')); ?>" class="tracking-tighter "><?php echo e(__('KVKK')); ?></a>
                <a href="<?php echo e(route('privacy')); ?>" class="tracking-tighter "><?php echo e(__('Gizlilik Politikası')); ?></a>
            </div>
        </div>
        <div class="space-y-8 xl:col-span-2">
            <p class="text-2xl font-medium tracking-tighter"><?php echo e(__('Tedavilerimiz')); ?></p>
            <div class="flex flex-col items-start space-y-6">
                <a href="<?php echo e(route('treatments')); ?>" class="tracking-tighter "><?php echo e(__('Tedavilerimiz')); ?></a>
                <a href="<?php echo e(route('smiles')); ?>" class="tracking-tighter "><?php echo e(__('Gülüşlerimiz')); ?></a>
                <a href="/#reviews" class="tracking-tighter "><?php echo e(__('Yorumlarımız')); ?></a>
            </div>
        </div>

        <div class="xl:col-span-2">
            <div class="flex flex-row space-x-5">
                <a href="<?php echo e('https://www.instagram.com/' . ConfigService::get('instagram_id')); ?>">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon-instagram'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-[30px] w-[30px]']); ?>
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

                <a href="<?php echo e('https://www.facebook.com/' . ConfigService::get('facebook_id')); ?>">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon-facebook'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-[30px] w-[30px]']); ?>
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

                <a href="<?php echo e('https://www.linkedin.com/company/' . ConfigService::get('linkedin_id')); ?>">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon-linkedin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-[30px] w-[30px]']); ?>
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

                <a href="<?php echo e('https://www.youtube.com/@' . ConfigService::get('linkedin_id')); ?>">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon-youtube'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-[30px] w-[30px]']); ?>
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
            </div>
        </div>

        <div class="flex items-center justify-center xl:hidden">
            <div class="" x-data="{
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
    </div>

    <div class="bg-[#F3F3F3] ">
        <div class="py-[15px] container flex flex-col lg:flex-row justify-between items-center flex-col gap-y-8 "> 
                   <a href="https://www.kaynock.com/" target="_blank">
                        <svg class="" width="225" height="14" viewBox="0 0 225 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M155.925 3.14355H157.082L153.457 6.74355L157.205 10.8769H156.017L152.853 7.32817L152.638 7.54355V10.8769H151.778V3.14355H152.638V6.45638L155.925 3.14355Z" fill="black"/>
<path d="M163.287 8.68211L162.355 10.877H161.413L164.977 2.77441L168.448 10.877H167.496L166.584 8.68211H163.287ZM164.956 4.78467L163.635 7.88211H166.246L164.956 4.78467Z" fill="black"/>
<path d="M171.663 3.14355H172.656L174.622 6.58971L176.588 3.14355H177.581L175.052 7.55381V10.8769H174.192V7.55381L171.663 3.14355Z" fill="black"/>
<path d="M182.578 2.81543L188.599 9.13338V3.14363H189.459V11.2257L183.438 4.91799V10.877H182.578V2.81543Z" fill="black"/>
<path d="M200.338 3.31795C200.826 3.52307 201.258 3.81196 201.634 4.18461C202.009 4.55726 202.301 4.98803 202.509 5.47692C202.717 5.96581 202.821 6.48034 202.821 7.02051C202.821 7.56068 202.717 8.08376 202.509 8.56923C202.301 9.0547 202.011 9.48034 201.639 9.84615C201.267 10.212 200.835 10.4974 200.344 10.7026C199.852 10.9077 199.337 11.0103 198.797 11.0103C198.258 11.0103 197.744 10.9077 197.256 10.7026C196.768 10.4974 196.337 10.212 195.961 9.84615C195.586 9.48034 195.294 9.0547 195.086 8.56923C194.877 8.08376 194.773 7.56752 194.773 7.02051C194.773 6.4735 194.877 5.96581 195.086 5.47692C195.294 4.98803 195.584 4.55726 195.956 4.18461C196.328 3.81196 196.76 3.52307 197.251 3.31795C197.743 3.11282 198.258 3.01025 198.797 3.01025C199.337 3.01025 199.85 3.11282 200.338 3.31795ZM197.564 4.05641C197.178 4.22051 196.84 4.45128 196.55 4.74872C196.26 5.04615 196.034 5.38974 195.874 5.77948C195.714 6.16923 195.633 6.57948 195.633 7.01025C195.633 7.44102 195.715 7.84957 195.879 8.2359C196.043 8.62222 196.27 8.9641 196.56 9.26154C196.85 9.55897 197.188 9.79145 197.574 9.95897C197.959 10.1265 198.367 10.2103 198.797 10.2103C199.227 10.2103 199.635 10.1265 200.021 9.95897C200.407 9.79145 200.745 9.55897 201.035 9.26154C201.325 8.9641 201.552 8.62222 201.716 8.2359C201.879 7.84957 201.961 7.44102 201.961 7.01025C201.961 6.57948 201.881 6.16923 201.721 5.77948C201.56 5.38974 201.335 5.04615 201.045 4.74872C200.755 4.45128 200.417 4.22051 200.031 4.05641C199.646 3.89231 199.234 3.81025 198.797 3.81025C198.361 3.81025 197.949 3.89231 197.564 4.05641Z" fill="black"/>
<path d="M213.972 4.8359C213.658 4.51453 213.296 4.26325 212.887 4.08205C212.477 3.90085 212.054 3.81025 211.617 3.81025C211.18 3.81025 210.795 3.89572 210.419 4.06666C210.044 4.2376 209.711 4.47179 209.421 4.76923C209.131 5.06666 208.905 5.41025 208.745 5.8C208.585 6.18974 208.504 6.59316 208.504 7.01025C208.504 7.42735 208.585 7.83077 208.745 8.22051C208.905 8.61025 209.131 8.95384 209.421 9.25128C209.711 9.54872 210.047 9.7829 210.429 9.95384C210.812 10.1248 211.214 10.2103 211.638 10.2103C212.061 10.2103 212.477 10.1179 212.887 9.93333C213.296 9.74872 213.658 9.49914 213.972 9.18461V10.2513C213.638 10.4906 213.271 10.6769 212.871 10.8103C212.472 10.9436 212.071 11.0103 211.668 11.0103C211.129 11.0103 210.615 10.9077 210.127 10.7026C209.639 10.4974 209.209 10.212 208.837 9.84615C208.465 9.48034 208.173 9.05641 207.962 8.57436C207.75 8.09231 207.644 7.58119 207.644 7.04102C207.644 6.50085 207.748 5.97607 207.957 5.48718C208.165 4.99829 208.455 4.56752 208.827 4.19487C209.199 3.82222 209.629 3.53162 210.117 3.32307C210.605 3.11453 211.122 3.01025 211.668 3.01025C212.528 3.01025 213.296 3.26325 213.972 3.76923V4.8359Z" fill="black"/>
<path d="M223.669 3.14355H224.826L221.201 6.74355L224.949 10.8769H223.761L220.597 7.32817L220.382 7.54355V10.8769H219.522V3.14355H220.382V6.45638L223.669 3.14355Z" fill="black"/>
<path d="M1.08398 11V2.54492H3.86719C6.44531 2.54492 7.88086 4.14453 7.88086 6.76367V6.77539C7.88086 9.40039 6.45117 11 3.86719 11H1.08398ZM1.88672 10.2734H3.82031C5.88867 10.2734 7.06055 8.96094 7.06055 6.78125V6.76953C7.06055 4.58984 5.88281 3.27148 3.82031 3.27148H1.88672V10.2734ZM11.5582 11.1055C9.78867 11.1055 8.69883 9.8457 8.69883 7.86523V7.85352C8.69883 5.88477 9.80039 4.58398 11.4937 4.58398C13.1871 4.58398 14.2301 5.84961 14.2301 7.71875V8.04688H9.48984C9.51328 9.52344 10.3219 10.4082 11.5758 10.4082C12.4957 10.4082 13.1285 9.97461 13.3336 9.48242L13.357 9.44141H14.1363L14.1187 9.48828C13.8727 10.3438 12.9527 11.1055 11.5582 11.1055ZM11.4937 5.27539C10.4039 5.27539 9.59531 6.04883 9.4957 7.41406H13.4449C13.357 6.01367 12.5777 5.27539 11.4937 5.27539ZM17.4152 11.1055C16.0383 11.1055 15.0832 10.4492 14.9543 9.41797H15.7512C15.9211 10.0449 16.5246 10.4492 17.4387 10.4492C18.3645 10.4492 19.0617 9.97461 19.0617 9.31836V9.30664C19.0617 8.76172 18.6691 8.43945 17.7492 8.22266L16.8703 8.01172C15.6984 7.73633 15.1535 7.25 15.1535 6.36523V6.35938C15.1535 5.33984 16.1555 4.58398 17.427 4.58398C18.6984 4.58398 19.6008 5.22266 19.7473 6.21875H18.9855C18.8449 5.63281 18.259 5.23438 17.4211 5.23438C16.5949 5.23438 15.9445 5.69727 15.9445 6.32422V6.33594C15.9445 6.85156 16.3313 7.15039 17.1691 7.34961L18.0422 7.55469C19.2609 7.84766 19.8527 8.33984 19.8527 9.24805V9.25977C19.8527 10.3438 18.7922 11.1055 17.4152 11.1055ZM21.3211 3.37695C21.0047 3.37695 20.7469 3.125 20.7469 2.80859C20.7469 2.49219 21.0047 2.24023 21.3211 2.24023C21.6316 2.24023 21.8895 2.49219 21.8895 2.80859C21.8895 3.125 21.6316 3.37695 21.3211 3.37695ZM20.9285 11V4.68945H21.702V11H20.9285ZM25.6781 13.2031C24.2309 13.2031 23.2699 12.5586 23.1059 11.5801L23.1117 11.5742H23.9145L23.9203 11.5801C24.0609 12.1309 24.7172 12.5117 25.6781 12.5117C26.8969 12.5117 27.6527 11.8906 27.6527 10.8711V9.45898H27.5766C27.2016 10.291 26.4281 10.7715 25.4613 10.7715C23.8383 10.7715 22.8012 9.5 22.8012 7.68945V7.67773C22.8012 5.87305 23.8441 4.58398 25.473 4.58398C26.4457 4.58398 27.225 5.12305 27.5883 5.9668H27.641V4.68945H28.4203V10.9238C28.4203 12.3008 27.3363 13.2031 25.6781 13.2031ZM25.6137 10.0801C26.8793 10.0801 27.6645 9.11328 27.6645 7.70117V7.68945C27.6645 6.27734 26.8617 5.27539 25.6137 5.27539C24.3539 5.27539 23.5922 6.26562 23.5922 7.67773V7.68945C23.5922 9.10156 24.3539 10.0801 25.6137 10.0801ZM29.7949 11V4.68945H30.5684V5.79688H30.6445C30.9785 5.03516 31.6582 4.58398 32.6426 4.58398C34.0488 4.58398 34.8516 5.42773 34.8516 6.89844V11H34.0781V7.0918C34.0781 5.89062 33.5332 5.27539 32.4375 5.27539C31.3242 5.27539 30.5684 6.06055 30.5684 7.25V11H29.7949ZM38.7223 11.1055C36.9527 11.1055 35.8629 9.8457 35.8629 7.86523V7.85352C35.8629 5.88477 36.9645 4.58398 38.6578 4.58398C40.3512 4.58398 41.3941 5.84961 41.3941 7.71875V8.04688H36.6539C36.6773 9.52344 37.4859 10.4082 38.7398 10.4082C39.6598 10.4082 40.2926 9.97461 40.4977 9.48242L40.5211 9.44141H41.3004L41.2828 9.48828C41.0367 10.3438 40.1168 11.1055 38.7223 11.1055ZM38.6578 5.27539C37.568 5.27539 36.7594 6.04883 36.6598 7.41406H40.609C40.5211 6.01367 39.7418 5.27539 38.6578 5.27539ZM44.8078 11.1055C43.2141 11.1055 42.1418 9.79883 42.1418 7.85352V7.8418C42.1418 5.88477 43.2082 4.58398 44.8078 4.58398C45.7629 4.58398 46.5773 5.10547 46.9289 5.91992H46.9992V2.17578H47.7785V11H46.9992V9.74023H46.9289C46.5598 10.5898 45.7805 11.1055 44.8078 11.1055ZM44.9719 10.4141C46.2141 10.4141 47.0168 9.40625 47.0168 7.84766V7.83594C47.0168 6.2832 46.2141 5.27539 44.9719 5.27539C43.7238 5.27539 42.9328 6.27734 42.9328 7.83594V7.84766C42.9328 9.41211 43.7238 10.4141 44.9719 10.4141ZM53.5922 11.1055C52.3734 11.1055 51.4828 10.3848 51.4828 9.25977V9.24805C51.4828 8.15234 52.2973 7.51367 53.7562 7.41406L55.725 7.28516V6.69336C55.725 5.76758 55.1625 5.27539 54.143 5.27539C53.2875 5.27539 52.684 5.62109 52.5199 6.24805L52.5141 6.25977H51.7348L51.7406 6.23633C51.9047 5.22852 52.8598 4.58398 54.1664 4.58398C55.643 4.58398 56.5043 5.35742 56.5043 6.6875V11H55.725V9.91602H55.6547C55.2797 10.666 54.5238 11.1055 53.5922 11.1055ZM52.2738 9.24805C52.2738 9.96875 52.8891 10.4258 53.7387 10.4258C54.8695 10.4258 55.725 9.65234 55.725 8.65039V7.91797L53.8617 8.04688C52.7895 8.11719 52.2738 8.52148 52.2738 9.23633V9.24805ZM57.8496 11V4.68945H58.623V5.79688H58.6992C59.0332 5.03516 59.7129 4.58398 60.6973 4.58398C62.1035 4.58398 62.9062 5.42773 62.9062 6.89844V11H62.1328V7.0918C62.1328 5.89062 61.5879 5.27539 60.4922 5.27539C59.3789 5.27539 58.623 6.06055 58.623 7.25V11H57.8496ZM66.5836 11.1055C64.9898 11.1055 63.9176 9.79883 63.9176 7.85352V7.8418C63.9176 5.88477 64.984 4.58398 66.5836 4.58398C67.5387 4.58398 68.3531 5.10547 68.7047 5.91992H68.775V2.17578H69.5543V11H68.775V9.74023H68.7047C68.3355 10.5898 67.5563 11.1055 66.5836 11.1055ZM66.7477 10.4141C67.9898 10.4141 68.7926 9.40625 68.7926 7.84766V7.83594C68.7926 6.2832 67.9898 5.27539 66.7477 5.27539C65.4996 5.27539 64.7086 6.27734 64.7086 7.83594V7.84766C64.7086 9.41211 65.4996 10.4141 66.7477 10.4141ZM73.7215 11V2.54492H76.5047C79.0828 2.54492 80.5184 4.14453 80.5184 6.76367V6.77539C80.5184 9.40039 79.0887 11 76.5047 11H73.7215ZM74.5242 10.2734H76.4578C78.5262 10.2734 79.698 8.96094 79.698 6.78125V6.76953C79.698 4.58984 78.5203 3.27148 76.4578 3.27148H74.5242V10.2734ZM84.1957 11.1055C82.4262 11.1055 81.3363 9.8457 81.3363 7.86523V7.85352C81.3363 5.88477 82.4379 4.58398 84.1312 4.58398C85.8246 4.58398 86.8676 5.84961 86.8676 7.71875V8.04688H82.1273C82.1508 9.52344 82.9594 10.4082 84.2133 10.4082C85.1332 10.4082 85.766 9.97461 85.9711 9.48242L85.9945 9.44141H86.7738L86.7562 9.48828C86.5102 10.3438 85.5902 11.1055 84.1957 11.1055ZM84.1312 5.27539C83.0414 5.27539 82.2328 6.04883 82.1332 7.41406H86.0824C85.9945 6.01367 85.2152 5.27539 84.1312 5.27539ZM89.6074 11L87.252 4.68945H88.0723L89.9824 10.1621H90.0527L91.957 4.68945H92.7832L90.4277 11H89.6074ZM95.8863 11.1055C94.1168 11.1055 93.027 9.8457 93.027 7.86523V7.85352C93.027 5.88477 94.1285 4.58398 95.8219 4.58398C97.5152 4.58398 98.5582 5.84961 98.5582 7.71875V8.04688H93.818C93.8414 9.52344 94.65 10.4082 95.9039 10.4082C96.8238 10.4082 97.4566 9.97461 97.6617 9.48242L97.6852 9.44141H98.4645L98.4469 9.48828C98.2008 10.3438 97.2809 11.1055 95.8863 11.1055ZM95.8219 5.27539C94.732 5.27539 93.9234 6.04883 93.8238 7.41406H97.773C97.6852 6.01367 96.9059 5.27539 95.8219 5.27539ZM99.6809 11V2.17578H100.454V11H99.6809ZM104.442 11.1055C102.679 11.1055 101.577 9.85742 101.577 7.84766V7.83594C101.577 5.82617 102.679 4.58398 104.442 4.58398C106.206 4.58398 107.313 5.82617 107.313 7.83594V7.84766C107.313 9.85742 106.206 11.1055 104.442 11.1055ZM104.442 10.4141C105.743 10.4141 106.516 9.44141 106.516 7.84766V7.83594C106.516 6.24219 105.743 5.27539 104.442 5.27539C103.141 5.27539 102.368 6.24219 102.368 7.83594V7.84766C102.368 9.44141 103.141 10.4141 104.442 10.4141ZM108.371 13.0918V4.68945H109.145V5.94336H109.221C109.59 5.09961 110.37 4.58398 111.336 4.58398C112.936 4.58398 114.008 5.89062 114.008 7.83594V7.84766C114.008 9.80469 112.936 11.1055 111.336 11.1055C110.381 11.1055 109.567 10.584 109.221 9.76953H109.145V13.0918H108.371ZM111.178 10.4141C112.426 10.4141 113.217 9.41211 113.217 7.84766V7.83594C113.217 6.27734 112.426 5.27539 111.178 5.27539C109.936 5.27539 109.133 6.2832 109.133 7.83594V7.84766C109.133 9.40625 109.936 10.4141 111.178 10.4141ZM117.604 11.1055C115.834 11.1055 114.744 9.8457 114.744 7.86523V7.85352C114.744 5.88477 115.846 4.58398 117.539 4.58398C119.232 4.58398 120.275 5.84961 120.275 7.71875V8.04688H115.535C115.559 9.52344 116.367 10.4082 117.621 10.4082C118.541 10.4082 119.174 9.97461 119.379 9.48242L119.402 9.44141H120.182L120.164 9.48828C119.918 10.3438 118.998 11.1055 117.604 11.1055ZM117.539 5.27539C116.449 5.27539 115.641 6.04883 115.541 7.41406H119.49C119.402 6.01367 118.623 5.27539 117.539 5.27539ZM123.689 11.1055C122.095 11.1055 121.023 9.79883 121.023 7.85352V7.8418C121.023 5.88477 122.089 4.58398 123.689 4.58398C124.644 4.58398 125.459 5.10547 125.81 5.91992H125.88V2.17578H126.66V11H125.88V9.74023H125.81C125.441 10.5898 124.662 11.1055 123.689 11.1055ZM123.853 10.4141C125.095 10.4141 125.898 9.40625 125.898 7.84766V7.83594C125.898 6.2832 125.095 5.27539 123.853 5.27539C122.605 5.27539 121.814 6.27734 121.814 7.83594V7.84766C121.814 9.41211 122.605 10.4141 123.853 10.4141ZM133.757 11.1055C132.79 11.1055 132.005 10.5898 131.641 9.74023H131.565V11H130.792V2.17578H131.565V5.91406H131.641C131.987 5.09961 132.802 4.58398 133.757 4.58398C135.356 4.58398 136.411 5.87305 136.411 7.83594V7.84766C136.411 9.79883 135.35 11.1055 133.757 11.1055ZM133.598 10.4141C134.841 10.4141 135.62 9.41211 135.62 7.8418V7.83008C135.62 6.26562 134.841 5.27539 133.598 5.27539C132.356 5.27539 131.554 6.2832 131.554 7.83594V7.84766C131.554 9.40039 132.356 10.4141 133.598 10.4141ZM137.68 13.1797C137.575 13.1797 137.446 13.1738 137.334 13.1562V12.5117C137.428 12.5293 137.551 12.5293 137.657 12.5293C138.243 12.5293 138.6 12.2773 138.858 11.5156L139.016 11.041L136.649 4.68945H137.481L139.385 10.1621H139.467L141.366 4.68945H142.186L139.637 11.5508C139.174 12.7871 138.694 13.1797 137.68 13.1797Z" fill="#A0A0A0"/>
</svg>

                       </a>
        <p class="text-[#A0A0A0] tracking-tighter text-base font-light text-center lg:text-right">
            ©2024 iDentik
        </p>
            </div>


    </div>
</div>
<?php /**PATH /Users/yusufozturk/Documents/identik yedekler/identik.com.tr/resources/views/components/footer.blade.php ENDPATH**/ ?>