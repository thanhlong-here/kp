<?php
$ads = App\Models\Block::pull('home.ads')->first();
?>

<div class="container shadow box">
  <div class="row">
    <div class="col-md-3">
      <div class="card text-xs-center">
        <div class="card-header">
          <h2> <?php echo e(__('Chào bạn')); ?> ! <?php echo e(Auth::user()->name); ?> </h2>

        </div>
        <div class="card-block">
          <div class="card-text font-medium-2">
            <?php echo e(__("Luôn có những đề nghị hấp dẫn từ cộng đồng cho dự án của bạn")); ?>

          </div>
        </div>
        <button class="btn btn-primary block"> <?php echo e(__('Gửi yêu cầu')); ?> </button>
      </div>
    </div>
    <div class="col-md-9">
      <div class="p-1">
        <a href="<?php echo e(empty($ads->link) ? '#' : url($ads->link)); ?>">
          <?php if(isset($ads->avatar)): ?>
          <img src="<?php echo e(asset($ads->avatar->src)); ?>" loading="lazy" class="img-fluid" />
          <?php endif; ?>
        </a>
      </div>
    </div>
  </div>

</div><?php /**PATH D:\www\kp\resources\views/components/home/welcome.blade.php ENDPATH**/ ?>