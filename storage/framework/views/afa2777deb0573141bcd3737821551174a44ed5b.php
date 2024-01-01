<?php $attributes = $attributes->exceptProps([
'market'
]); ?>
<?php foreach (array_filter(([
'market'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php $__currentLoopData = $market->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="mb-2">
  <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-xs-4 ">
    <div data-toggle="modal" data-target="#type-<?php echo e($item->id); ?>" class="touch  text-xs-center">
      <?php if($item->avatar): ?>
      <img loading="lazy" class="app-ico" src="<?php echo e(url($item->avatar->src)); ?>" />
      <?php endif; ?>
      <p class="text-bold-600"><?php echo e($item->name); ?></p>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\www\kp\resources\views/components/app/market.blade.php ENDPATH**/ ?>