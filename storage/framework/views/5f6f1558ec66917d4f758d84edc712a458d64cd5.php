<?php $attributes = $attributes->exceptProps([
'category',
'lang'  => 'en',
]); ?>
<?php foreach (array_filter(([
'category',
'lang'  => 'en',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php

$action     = route('categories.store');
$prefix     = $category->prefix."_$lang";
$method     = 'POST';
$parent_id  = $category->id;

$tran   = App\Models\Category::wherePrefix($prefix)->whereParentId($parent_id)->first();
if($tran){
  $category  = $tran;
  $method    = 'PUT';
  $action    = route('categories.update',$category);
}

?>
<div class="modal-content">
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e($action).'','method' => ''.e($method).'','enctype' => 'multipart/form-data']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e($action).'','method' => ''.e($method).'','enctype' => 'multipart/form-data']); ?>

    <input type="hidden" name="prefix" value="<?php echo e($prefix); ?>" />
    <input type="hidden" name="parent_id" value="<?php echo e($parent_id); ?>" />

    <div class="modal-header">

      <h4 class="pull-left" id="myModalLabel2"><i class="fa fa-road2"></i><?php echo e(__('Chuyển ngữ')); ?></h4>

      <div class="pull-right">

        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><?php echo e(__('Đóng')); ?></button>
      </div>
    </div>
    <div class="modal-body h-100">
      <div class="card-block">
        <div class="form-group">
          <input type="text" value="<?php echo e($category->title); ?>" class="form-control" placeholder="title" name="title" />
        </div>


        <div class="form-group">
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.editor','data' => ['height' => '120']]); ?>
<?php $component->withName('editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['height' => '120']); ?><?php echo e($category->content); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>

      </div>

    </div>

   <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div><?php /**PATH D:\www\kp\resources\views/components/category/tran.blade.php ENDPATH**/ ?>