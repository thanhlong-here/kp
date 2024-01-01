<?php
$menu = App\Models\Category::root()->wherePrefix('service')->OrderBy('priority','desc')->get();
?>
<ul class="nav nav-service navbar-nav">
  <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li class="<?php echo e($loop->last ? 'pull-right' :  'space'); ?> dropdown nav-item font-medium-2  ">
    <a class="dropdown-toggle  nav-link" href='<?php echo e(url($item->link->pretty)); ?>'>
      <?php echo e($item->tran->name); ?>

    </a>
    <div class="dropdown-menu <?php echo e(($loop->index > 3 ) ? 'dropdown-menu-right' : ''); ?>">
      <?php $__currentLoopData = $item->childs()->get()->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div style="width:45rem">
        <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-xs-6">

          <a class="nav-link" href='<?php echo e(url($row->link->pretty)); ?>'>
            <?php echo e($row->tran->name); ?>

          </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
  </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH D:\www\kp\resources\views/components/menu/service.blade.php ENDPATH**/ ?>