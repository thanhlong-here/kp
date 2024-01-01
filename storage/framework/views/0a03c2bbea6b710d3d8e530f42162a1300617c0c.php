<?php $attributes = $attributes->exceptProps([
  'category'  =>  null,
  'classli' => ''
]); ?>
<?php foreach (array_filter(([
  'category'  =>  null,
  'classli' => ''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$categories = ($category->parent_id) ? $category->parent->childs()->get() : $category->childs()->get(); 
?>

<ul  <?php echo e($attributes->merge( ['class' => 'nav'] )); ?> >
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="nav-item <?php echo e($classli); ?>">
      <a  class="nav-link"  href='<?php echo e(url($category->link->pretty)); ?>'>
          <?php echo e(Theme::title($category->name)); ?> </a>
    </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH D:\www\kp\resources\views/components/menu/categories.blade.php ENDPATH**/ ?>