<?php $attributes = $attributes->exceptProps([
  'route'
  ]); ?>
<?php foreach (array_filter(([
  'route'
  ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['class'=>'touch'])); ?>  onclick="modal_src('modal-src','<?php echo e($route); ?>')">
     <?php echo e($slot); ?>

  </div><?php /**PATH D:\www\kp\resources\views/components/app/open.blade.php ENDPATH**/ ?>