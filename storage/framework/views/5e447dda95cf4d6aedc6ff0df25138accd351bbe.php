<?php
$recommend = App\Models\Product::root()->inventory()->take(3)->orderByDesc('created_at')->get();
?>
<div class="container center-layout">
  <div class="content-header">
    <h2 class="text-bold-600">
      <?php echo e(__('Những dự án tiêu biểu từ cộng đồng')); ?>

    </h2>
  </div>
  <div class="content-body pt-2">
    <div class="row match-height">
      <?php $__currentLoopData = $recommend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <?php
      $freelancer = $product->freelancer;
      $avatar = empty($freelancer->avatar)
      ? asset('theme/images/portrait/small/avatar-s-1.png')
      : url($freelancer->avatar->src);
      ?>
      <div class="col-md-4 col-sm-6">
        <div class="card box">
          <a href="<?php echo e(url($product->link->pretty)); ?>">
            <?php if(isset($product->avatar)): ?>
            <div class="box-image lazy" data-bg-img='<?php echo e($product->avatar->src); ?>'></div>
            <?php endif; ?>
          </a>
          <div class="card-header">

            <img src="<?php echo e($avatar); ?>" class="rounded-circle img-border x45 pull-left mr-2" />
            <div class="pull-left">
              <a href="#">
                <div class="text-bold-600"><?php echo e($product->category->title); ?></div>
              </a>

              <a href="<?php echo e(url($product->freelancer->link->pretty)); ?>">
                <div> <?php echo e($product->freelancer->name); ?></div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div><?php /**PATH D:\www\kp\resources\views/components/home/recommend.blade.php ENDPATH**/ ?>