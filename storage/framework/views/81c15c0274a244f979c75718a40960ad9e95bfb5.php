<?php $attributes = $attributes->exceptProps(['rate' => 3]); ?>
<?php foreach (array_filter((['rate' => 3]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php for( $i=0 ; $i<5; $i++ ): ?> <i class=" fa fa-star <?php echo e($i  < $rate ? 'primary' : ''); ?> "></i>
  <?php endfor; ?><?php /**PATH D:\www\kp\resources\views/components/star.blade.php ENDPATH**/ ?>