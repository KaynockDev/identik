<div id="reviews" class="py-10 lg:py-20 bg-white">
    <div class="container space-y-16">
        <!-- Header Section -->
        <div class="text-left">
            <h2 class="text-3xl font-bold text-gray-900 tracking-tighter"><?php echo e(__('Müşterilerimiz iDentik Hakkında Ne Düşünüyor')); ?></h2>
            <p class="text-xl font-normal text-text tracking-tighter">
                <?php echo e(__('Sizlere en iyi hizmeti sağlamak için elimizden gelenin en iyisini yapıyoruz.')); ?>

            </p>
        </div>
        
        <!-- Reviews Statistics Section -->
        <div class="grid lg:grid-cols-2 gap-6">
            
            <!-- TrustPilot Score Box -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="text-3xl font-bold text-gray-900" data-trustpilot-rating><?php echo e($trustpilotStats['averageRating'] ?: '3.0'); ?></div>
                        <div class="flex items-center space-x-1">
                            <?php
                                $trustpilotRating = $trustpilotStats['averageRating'] ?: 3.0;
                                $trustpilotFullStars = floor($trustpilotRating);
                                $trustpilotHasPartialStar = $trustpilotRating - $trustpilotFullStars > 0;
                                $trustpilotPartialPercentage = ($trustpilotRating - $trustpilotFullStars) * 100;
                            ?>
                            
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <?php if($i <= $trustpilotFullStars): ?>
                                    <!-- Full star -->
                                    <svg class="w-5 h-5" fill="orange" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                <?php elseif($i == $trustpilotFullStars + 1 && $trustpilotHasPartialStar): ?>
                                    <!-- Partial star with precise percentage -->
                                    <svg class="w-5 h-5" viewBox="0 0 20 20">
                                        <defs>
                                            <linearGradient id="partial-star-trustpilot-<?php echo e($i); ?>">
                                                <stop offset="<?php echo e($trustpilotPartialPercentage); ?>%" stop-color="orange"/>
                                                <stop offset="<?php echo e($trustpilotPartialPercentage); ?>%" stop-color="#d1d5dc"/>
                                            </linearGradient>
                                        </defs>
                                        <path fill="url(#partial-star-trustpilot-<?php echo e($i); ?>)" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                <?php else: ?>
                                    <!-- Empty star -->
                                    <svg class="w-5 h-5" fill="#d1d5dc" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5" viewBox="0 0 799.89 761" xmlns="http://www.w3.org/2000/svg">
                                <path d="M799.89 290.83H494.44L400.09 0l-94.64 290.83L0 290.54l247.37 179.92L152.72 761l247.37-179.63L647.16 761l-94.35-290.54z" fill="#00b67a"/>
                                <path d="M574.04 536.24l-21.23-65.78-152.72 110.91z" fill="#005128"/>
                            </svg>
                            <span class="text-sm font-medium text-gray-900">Trustpilot</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-end">
                        <?php if (isset($component)) { $__componentOriginale9b83f01fae0bc432ac0baa4443948e1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9b83f01fae0bc432ac0baa4443948e1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.view-all-gray','data' => ['route' => 'https://www.trustpilot.com/review/identik.com.tr']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('view-all-gray'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => 'https://www.trustpilot.com/review/identik.com.tr']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9b83f01fae0bc432ac0baa4443948e1)): ?>
<?php $attributes = $__attributesOriginale9b83f01fae0bc432ac0baa4443948e1; ?>
<?php unset($__attributesOriginale9b83f01fae0bc432ac0baa4443948e1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9b83f01fae0bc432ac0baa4443948e1)): ?>
<?php $component = $__componentOriginale9b83f01fae0bc432ac0baa4443948e1; ?>
<?php unset($__componentOriginale9b83f01fae0bc432ac0baa4443948e1); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
            
            <!-- Google Score Box -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="text-3xl font-bold text-gray-900" data-google-rating><?php echo e($googleStats['averageRating'] ?: '4.4'); ?></div>
                        <div class="flex items-center space-x-1">
                            <?php
                                $rating = $googleStats['averageRating'] ?: 4.4;
                                $fullStars = floor($rating);
                                $hasPartialStar = $rating - $fullStars > 0;
                                $partialPercentage = ($rating - $fullStars) * 100;
                            ?>
                            
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <?php if($i <= $fullStars): ?>
                                    <!-- Full star -->
                                    <svg class="w-5 h-5" fill="orange" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                <?php elseif($i == $fullStars + 1 && $hasPartialStar): ?>
                                    <!-- Partial star with precise percentage -->
                                    <svg class="w-5 h-5" viewBox="0 0 20 20">
                                        <defs>
                                            <linearGradient id="partial-star-google-<?php echo e($i); ?>">
                                                <stop offset="<?php echo e($partialPercentage); ?>%" stop-color="orange"/>
                                                <stop offset="<?php echo e($partialPercentage); ?>%" stop-color="#d1d5dc"/>
                                            </linearGradient>
                                        </defs>
                                        <path fill="url(#partial-star-google-<?php echo e($i); ?>)" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                <?php else: ?>
                                    <!-- Empty star -->
                                    <svg class="w-5 h-5" fill="#d1d5dc" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                        <div class="flex items-center">
                            <div class="w-5 h-5 bg-white rounded shadow-sm flex items-center justify-center">
                                <svg class="w-4 h-4" viewBox="0 0 24 24">
                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-900">Google</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-end">
                        <?php if (isset($component)) { $__componentOriginale9b83f01fae0bc432ac0baa4443948e1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9b83f01fae0bc432ac0baa4443948e1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.view-all-gray','data' => ['route' => 'https://www.google.com/search?sca_esv=fa545b2fcd0b4c1a&tbm=lcl&q=%C3%96zel+%C4%B0Dentik+A%C4%9F%C4%B1z+Ve+Di%C5%9F+Sa%C4%9Fl%C4%B1%C4%9F%C4%B1+Poliklini%C4%9Fi+%7C+Ba%C4%9Fdat+Dental+Clinic+Reviews&rflfq=1&num=20&stick=H4sIAAAAAAAAAONgkxI2NbU0tDQzMbQ0NjU0NDAytLQ03sDI-Iox7PC0qtQchSMbXFLzSjKzFRyPzD-ysUohLFXBJfPofIXgxCPzc45sBAkqBOTnZGbnZOZlHpmfqVCj4ASUSkksUQBpTMxRcAbJJCsEpZZlppYYL2KlkcEAMiSaNswAAAA&rldimm=5591964193511021993&hl=en-TR&sa=X&ved=2ahUKEwjQpvP36YePAxUGQ_EDHVkOLKsQ9fQKegQIThAF&biw=1440&bih=731&dpr=2#lkt=LocalPoiReviews']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('view-all-gray'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => 'https://www.google.com/search?sca_esv=fa545b2fcd0b4c1a&tbm=lcl&q=%C3%96zel+%C4%B0Dentik+A%C4%9F%C4%B1z+Ve+Di%C5%9F+Sa%C4%9Fl%C4%B1%C4%9F%C4%B1+Poliklini%C4%9Fi+%7C+Ba%C4%9Fdat+Dental+Clinic+Reviews&rflfq=1&num=20&stick=H4sIAAAAAAAAAONgkxI2NbU0tDQzMbQ0NjU0NDAytLQ03sDI-Iox7PC0qtQchSMbXFLzSjKzFRyPzD-ysUohLFXBJfPofIXgxCPzc45sBAkqBOTnZGbnZOZlHpmfqVCj4ASUSkksUQBpTMxRcAbJJCsEpZZlppYYL2KlkcEAMiSaNswAAAA&rldimm=5591964193511021993&hl=en-TR&sa=X&ved=2ahUKEwjQpvP36YePAxUGQ_EDHVkOLKsQ9fQKegQIThAF&biw=1440&bih=731&dpr=2#lkt=LocalPoiReviews']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9b83f01fae0bc432ac0baa4443948e1)): ?>
<?php $attributes = $__attributesOriginale9b83f01fae0bc432ac0baa4443948e1; ?>
<?php unset($__attributesOriginale9b83f01fae0bc432ac0baa4443948e1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9b83f01fae0bc432ac0baa4443948e1)): ?>
<?php $component = $__componentOriginale9b83f01fae0bc432ac0baa4443948e1; ?>
<?php unset($__componentOriginale9b83f01fae0bc432ac0baa4443948e1); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</div>

<!-- Real-time Updates Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Function to update review statistics
    function updateReviewStats() {
        fetch('/api/reviews/stats')
            .then(response => response.json())
            .then(data => {
                // Update Google stats
                if (data.google) {
                    document.querySelector('[data-google-rating]').textContent = data.google.averageRating;
                    
                    // Update Google stars
                    updateStars('google', data.google.averageRating);
                    
                    // Show cache status
                    if (data.cache_status && data.cache_status.google) {
                        console.log('Google data source:', data.cache_status.google);
                    }
                }
                
                // Update TrustPilot stats
                if (data.trustpilot) {
                    document.querySelector('[data-trustpilot-rating]').textContent = data.trustpilot.averageRating;
                    
                    // Update TrustPilot stars
                    updateStars('trustpilot', data.trustpilot.averageRating);
                    
                    // Show cache status
                    if (data.cache_status && data.cache_status.trustpilot) {
                        console.log('TrustPilot data source:', data.cache_status.trustpilot);
                    }
                }
            })
            .catch(error => console.error('Error updating review stats:', error));
    }
    
    // Function to update stars dynamically
    function updateStars(platform, rating) {
        const fullStars = Math.floor(rating);
        const hasPartialStar = rating - fullStars > 0;
        const partialPercentage = (rating - fullStars) * 100;
        
        // Find the star container for this platform
        const starContainer = document.querySelector(`[data-${platform}-rating]`).closest('.flex.items-center.space-x-4').querySelector('.flex.items-center.space-x-1');
        const stars = starContainer.querySelectorAll('svg');
        
        stars.forEach((star, index) => {
            const starIndex = index + 1;
            
            if (starIndex <= fullStars) {
                // Full star
                star.setAttribute('fill', 'orange');
                star.innerHTML = '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>';
            } else if (starIndex === fullStars + 1 && hasPartialStar) {
                // Partial star
                star.removeAttribute('fill');
                star.innerHTML = `
                    <defs>
                        <linearGradient id="partial-star-${platform}-${starIndex}">
                            <stop offset="${partialPercentage}%" stop-color="orange"/>
                            <stop offset="${partialPercentage}%" stop-color="#d1d5dc"/>
                        </linearGradient>
                    </defs>
                    <path fill="url(#partial-star-${platform}-${starIndex})" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                `;
            } else {
                // Empty star
                star.setAttribute('fill', '#d1d5dc');
                star.innerHTML = '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>';
            }
        });
    }
            })
            .catch(error => console.error('Error updating review stats:', error));
    }
    
    // Update stats every 5 minutes
    setInterval(updateReviewStats, 300000);
});
</script>
<?php /**PATH /Users/yusufozturk/Documents/identik yedekler/identik.com.tr/resources/views/components/reviews.blade.php ENDPATH**/ ?>