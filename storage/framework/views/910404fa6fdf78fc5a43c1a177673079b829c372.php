<?php

$slider = App\Models\Block::pull('home.slider', 'slider')
    ->orderByDesc('priority')
    ->get();

?>

<div id="home-slide" class="carousel-fade ">
    <div class="carousel-inner">

        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div <?php if($banner->avatar): ?> data-bg-img="<?php echo e(url($banner->avatar->src)); ?>" <?php endif; ?>
                class="lazy carousel-item bg <?php echo e($loop->first ? 'active' : ''); ?> ">
                <div class="col-xs-6 banner-header p-0">
                    <h2 class=" font-large-3 text-bold-700"> <?php echo e($banner->tran->title); ?> </h2>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="search">

        <div class="col-xs-6">

            <fieldset class="form-group row position-relative">
                <input type="text" class="form-control form-control-xl input-xl" placeholder="<?php echo e(__('Thiết kế website')); ?>" />
                <div class="form-control-position">
                    <i class="ft-search danger font-medium-4"></i>
                </div>
            </fieldset>
        </div>

    </div>
</div>
<?php /**PATH D:\www\kp\resources\views/components/home/slide.blade.php ENDPATH**/ ?>