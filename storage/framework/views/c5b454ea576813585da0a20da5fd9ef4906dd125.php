<select name="status" class="form-control">
  <?php $__currentLoopData = ['publish','draft']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($sta); ?>">
    <?php echo e(__($sta)); ?>

  </option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select><?php /**PATH D:\www\kp\resources\views/components/select/status.blade.php ENDPATH**/ ?>