<?php
$search = (new App\Classes\Search('product_all'))->get();
$choices= empty($search->categories) ? [] : $search->categories;
$name   = empty($search->name) ? '' : $search->name;
$status = empty($search->status) ? '' : $search->status;
?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form row','action' => ''.e(route('search.find','product_all')).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form row','action' => ''.e(route('search.find','product_all')).'']); ?>

  <div class="col-md-4">
    <label class="text-bold-600"><?php echo e(__('Categories')); ?>: </label>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select.multi','data' => ['class' => 'form-control','choices' => $choices,'list' => App\Models\Category::root()->wherePrefix('service')->get(),'name' => 'categories[]']]); ?>
<?php $component->withName('select.multi'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form-control','choices' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($choices),'list' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(App\Models\Category::root()->wherePrefix('service')->get()),'name' => 'categories[]']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  </div>
  <div class="col-md-2">
    <label class="text-bold-600"><?php echo e(__('Status')); ?>:</label>
    <select name="status" class="form-control">
      <option value="" > ------ </option>
      <option <?php echo e(($status == "preview") ? "selected" : ""); ?> value="preview"> <?php echo e(__('Preview')); ?> </option>
      <option <?php echo e(($status == "publish") ? "selected" : ""); ?> value="publish"> <?php echo e(__('Publish')); ?> </option>
    </select>
  </div>
  <div class="col-md-6">
    <label class="text-bold-600"><?php echo e(__('Search by keyword')); ?>: </label>
    <div class="input-group">
      <input type="text" value="<?php echo e($name); ?>" name="name" placeholder="<?php echo e(__('input keyword')); ?> ..." class="form-control" />

      <span class="input-group-btn">
        <button class="btn btn-info" type="submit" type="button"><i class="ft ft-search"></i> <?php echo e(__('search')); ?></button>
      </span>
    </div>

  </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/product/searchall.blade.php ENDPATH**/ ?>