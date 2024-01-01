<?php $attributes = $attributes->exceptProps(['name','accept']); ?>
<?php foreach (array_filter((['name','accept']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<label <?php echo e($attributes); ?> >
  <i class="icon-paper-clip"></i>
  <span> <?php echo e(Theme::title('attach file')); ?> </span>

  <input type="file" <?php echo e($name ?? ''); ?> <?php echo e(empty($accept) ? '': "accept='$accept'"); ?> class="none"  />
</label>
<?php /**PATH D:\www\kp\resources\views/components/button/attach.blade.php ENDPATH**/ ?>