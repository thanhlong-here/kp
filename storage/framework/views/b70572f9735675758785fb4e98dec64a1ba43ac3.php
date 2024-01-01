<?php $attributes = $attributes->exceptProps([
  'id'    =>  uniqid('tmp_'),
  'accept'=>  'image/*',
  'name'  =>  'avatar',
  'src'   =>   '',
  ]); ?>
<?php foreach (array_filter(([
  'id'    =>  uniqid('tmp_'),
  'accept'=>  'image/*',
  'name'  =>  'avatar',
  'src'   =>   '',
  ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div id="<?php echo e($id); ?>"  >
  <button class="none" type="button"> 
    <i class="ft-x"></i> 
  </button>

  <label>
    <img <?php echo e($attributes); ?>  src="<?php echo e(empty($src) ? asset('theme/images/upload.png') : $src); ?>" />
    <input type="file" class="none" accept="<?php echo e($accept); ?>" name="<?php echo e($name); ?>">
  </label>

</div>
<?php $__env->startPush('x-script'); ?>

  temp('<?php echo e($id); ?>');
<?php $__env->stopPush(); ?>
<?php /**PATH D:\www\kp\resources\views/components/temp.blade.php ENDPATH**/ ?>