<?php
$search = (new App\Classes\Search('freelancer'))->get();
$name = empty($search->name) ? '' : $search->name;
$email = empty($search->email) ? '': $search->email;
$phone = empty($search->phone) ? '' : $search->phone;
$job = empty($search->job) ? '' : $search->job;
?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('search.find','freelancer')).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('search.find','freelancer')).'']); ?>
  <div class="row mb-2">
   
    <div class="col-md-2">
      <label class="text-bold-600"><?php echo e(Theme::title('email')); ?>: </label>
      <input type="email" value="<?php echo e($email); ?>" name="email" placeholder="<?php echo e(__('email')); ?>" class="form-control" />
    </div>
    <div class="col-md-2">
      <label class="text-bold-600"><?php echo e(Theme::title('phone')); ?>: </label>
      <input type="phone" value="<?php echo e($phone); ?>" name="phone" placeholder="<?php echo e(__('phone')); ?>" class="form-control" />
    </div>
    <div class="col-md-3">
      <label class="text-bold-600"><?php echo e(Theme::title('jobs')); ?>: </label>
      <input type="text" value="<?php echo e($job); ?>" name="job" placeholder="<?php echo e(__('job')); ?>" class="form-control" />
    </div>
    <div class="col-md-5">
      <label class="text-bold-600"><?php echo e(Theme::title('search by keyword')); ?>: </label>
      <div class="input-group">
        <input type="text" value="<?php echo e($name); ?>" name="name" placeholder="<?php echo e(__('input keyword')); ?> ..." class="form-control" />

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
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/freelancer/search.blade.php ENDPATH**/ ?>