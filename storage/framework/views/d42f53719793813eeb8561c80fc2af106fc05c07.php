<?php $attributes = $attributes->exceptProps(['product']); ?>
<?php foreach (array_filter((['product']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
  $category = $product->category;
?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href='<?php echo e(route('home')); ?>' >
    <?php echo e(Theme::title('home')); ?>

    </a>
  </li>
  <?php $__currentLoopData = $category->road(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li class="breadcrumb-item">
    <a href='<?php echo e(url($item->link->pretty)); ?>' >
      <?php echo e(Theme::title($item->name)); ?>

    </a>
  </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <li class="breadcrumb-item">
    <a href='<?php echo e(url($product->category->link->pretty)); ?>' >
      <?php echo e(Theme::title($product->category->name)); ?>

    </a>
  </li>

</ol>
<?php /**PATH D:\www\kp\resources\views/components/product/breadcrumb.blade.php ENDPATH**/ ?>