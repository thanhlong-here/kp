<?php
$list = App\Models\Category::root()
    ->wherePrefix('service')
    ->orderByDesc('priority')
    ->get();
?>

<div class="container">
    <div class="content-header">
        <h2 class="text-bold-600"> <?php echo e(__('Khám phá dịch vụ')); ?></h2>
    </div>
    <div class="content-body pt-2">
        <?php $__currentLoopData = $list->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row match-height mt-1">
                <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 text-xs-center">
                        <div class="card">
                            <a href="<?php echo e(url($item->link->pretty)); ?>" class="nav-link">
                                <?php if(isset($item->avatar)): ?>
                                    <img src="<?php echo e(url($item->avatar->src)); ?>" class="icon" loading="lazy" />
                                <?php endif; ?>
                                <h4 class="mt-1 text-bold-600"><?php echo e(__($item->tran->name)); ?></h4>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH D:\www\kp\resources\views/components/home/marketplace.blade.php ENDPATH**/ ?>