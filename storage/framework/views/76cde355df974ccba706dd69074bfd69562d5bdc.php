<?php $attributes = $attributes->exceptProps([
  'post'
]); ?>
<?php foreach (array_filter(([
  'post'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
  $image  = empty($post->avatar) ? '' : url($post->avatar->src);
?>
<div class="box">
  <div class="card ">
    <div class="box-image lazy"
      data-bg-img ='<?php echo e($image); ?>'></div>
      <div class="card-block">
        <a href="<?php echo e(url($post->link->pretty)); ?>">
          <div class="text-justify font-medium-2">
            <?php echo e(Theme::title($post->name)); ?>

          </div>
        </a>
    </div>
  </div>

</div>
<?php /**PATH D:\www\kp\resources\views/components/post/item.blade.php ENDPATH**/ ?>