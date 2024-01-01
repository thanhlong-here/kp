<?php
$search = (new App\Classes\Search('block'))->get();
$code = empty($search->code) ? '' : $search->code;
$title = empty($search->title) ? '': $search->title;

?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('search.find','block')).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('search.find','block')).'']); ?>
  <div class="row">
  
    
    <div class="col-md-3">
      <label class="text-bold-600"><?php echo e(Theme::title('code')); ?>: </label>
      <input type="text" value="<?php echo e($code); ?>" name="code" placeholder="<?php echo e(__('code')); ?>" class="form-control" />
    </div>
    <div class="col-md-6">
      <label class="text-bold-600"><?php echo e(Theme::title('search by keyword')); ?>: </label>
      <div class="input-group">
        <input type="text" value="<?php echo e($title); ?>" name="title" placeholder="<?php echo e(__('input keyword')); ?> ..." class="form-control" />

        <span class="input-group-btn">
          <button class="btn btn-info" type="submit" type="button"><i class="ft ft-search"></i> <?php echo e(__('search')); ?></button>
        </span>
      </div>
    </div>
  </div>
  
  
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/block/search.blade.php ENDPATH**/ ?>