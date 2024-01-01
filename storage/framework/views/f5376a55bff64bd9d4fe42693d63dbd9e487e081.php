<?php $attributes = $attributes->exceptProps([
  'tabs'
]); ?>
<?php foreach (array_filter(([
  'tabs'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php 

?>
<ul <?php echo e($attributes->merge(['class' => 'nav nav-main'])); ?> >

  <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
    $tab = (object) $value;
    $toggle = 'data-toggle=tab';

    if(isset($tab->check) && !Auth::check() ){
      $toggle = 'data-toggle=modal data-target=#modal-login';
    }

    ?>
    <li class="nav-item  flex-1">

      <a class="nav-link touch p-1 <?php echo e($loop->first ? 'active' : ''); ?>" id="tab-<?php echo e($key); ?>" href="#<?php echo e($key); ?>" <?php echo e($toggle); ?>>
        <?php if(isset($tab->icon )): ?>
        <span class="ir">
          <i class="<?php echo e($tab->icon); ?>"></i>
        </span>
        <?php endif; ?>
        <div class="font-small-1"> <?php echo e($tab->title); ?> </div>
      </a>

    </li>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul><?php /**PATH D:\www\kp\resources\views/components/app/nav.blade.php ENDPATH**/ ?>