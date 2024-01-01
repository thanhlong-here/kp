<?php
$flags=[
'en' => ['english','flag-icon-gb'],
'vi' => ['vietnamese','flag-icon-vn'],
'kr' => ['korean','flag-icon-kr'],
];

$locale = $flags[App::getLocale()];
unset($flags[App::getLocale()]);

?>
<div class="app-w bg-white">
  <div class="card-block">
    <?php $__currentLoopData = $flags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $flag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="form-group">
      <a href="<?php echo e(route('trans',$lang)); ?>" class="btn btn-primary white block">
        <i class='flag-icon <?php echo e($flag[1]); ?>'></i> <span class="ml-1">
          <?php echo e(Theme::title($flag[0])); ?> </span>

      </a>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
</div><?php /**PATH D:\www\kp\resources\views/components/app/lang.blade.php ENDPATH**/ ?>