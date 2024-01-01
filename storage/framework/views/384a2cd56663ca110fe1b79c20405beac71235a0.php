<?php $attributes = $attributes->exceptProps(['id','out']); ?>
<?php foreach (array_filter((['id','out']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<button <?php echo e($attributes); ?>

  data-toggle='modal'
  data-target='#<?php echo e(Auth::check() ? "modal-cart-$id": "modal-login"); ?>'>
  <?php echo e($out); ?>

</button>
<?php /**PATH D:\www\kp\resources\views/components/button/cart.blade.php ENDPATH**/ ?>