
<div class="row">
  <table class="table" >
    <thead >
      <tr>
        <th></th>
        <?php echo $__env->yieldPushContent('table-pack-header'); ?>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th> <?php echo e(Theme::title($row)); ?></th>
          <?php echo $__env->yieldPushContent('table-pack-row-'.$row); ?>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
      <tr>
        <th></th>
        <?php echo $__env->yieldPushContent('table-pack-footer'); ?>
      </tr>
    </tfoot>
  </table>
</div>
<?php /**PATH D:\www\kp\resources\views/page/product/detail/tab-price.blade.php ENDPATH**/ ?>