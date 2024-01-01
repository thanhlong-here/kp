<?php $attributes = $attributes->exceptProps(['style'=>'']); ?>
<?php foreach (array_filter((['style'=>'']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<a href="<?php echo e(route('home')); ?>">
  <img loading="lazy" <?php echo e($attributes); ?> src="<?php echo e(asset("theme/images/logo/logo$style.png")); ?>" />
</a>
<?php /**PATH D:\www\kp\resources\views/components/logo.blade.php ENDPATH**/ ?>