<?php $attributes = $attributes->exceptProps([
'code',
'col' =>4,
'pagination' => false,
'limit' => null,
'total' => 12,
]); ?>
<?php foreach (array_filter(([
'code',
'col' =>4,
'pagination' => false,
'limit' => null,
'total' => 12,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$category = App\Models\Category::pull($code,'service')->first();
?>

<?php if(isset($category)): ?>
<?php
$query = App\Models\Product::root()->inventory()->category($category)->so();
if($limit)$query->take($limit);
?>

<div class="container-fluid">
  <div class="content-header">
    <h2 class="text-bold-600">
      <?php echo e(Theme::title($category->name)); ?>

    </h2>
  </div>
  <div class="content-body pt-2">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.list','data' => ['col' => ''.e($col).'','total' => ''.e($total).'','query' => $query,'pagination' => ''.e($pagination).'']]); ?>
<?php $component->withName('product.list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['col' => ''.e($col).'','total' => ''.e($total).'','query' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($query),'pagination' => ''.e($pagination).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  </div>

</div>

<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/product/category.blade.php ENDPATH**/ ?>