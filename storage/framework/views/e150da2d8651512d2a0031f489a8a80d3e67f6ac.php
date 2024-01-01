<?php

$popular = App\Models\Block::pull('home.popular','list')->orderByDesc('priority')->get();

?>

<div class="container">
  <div class="content-header">
    <h2 class="text-bold-600">
      <?php echo e(__('Dịch vụ phổ biến')); ?>

    </h2>
  </div>
  <div class="content-body pt-2">
    <div class="row match-height">
      <?php $__currentLoopData = $popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-3 ">
        <div <?php if($item->avatar): ?>
          data-bg-img="<?php echo e(url($item->avatar->src)); ?>"
          <?php endif; ?>
          class="lazy card popular" >

          <div class="content m-2">
            <a href="<?php echo e(url($item->link)); ?>">
              <h2 class="card-title"><?php echo e($item->title); ?></h2>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

</div><?php /**PATH D:\www\kp\resources\views/components/home/popular.blade.php ENDPATH**/ ?>