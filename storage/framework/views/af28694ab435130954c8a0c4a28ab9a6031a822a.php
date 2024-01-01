<?php $attributes = $attributes->exceptProps([
'experiences'
]); ?>
<?php foreach (array_filter(([
'experiences'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$script_destroy = "$('#destroy_exp_$exp->id ').submit()";
?>

<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['id' => 'destroy_exp_'.e($exp->id).'','method' => 'DELETE','action' => ''.e(route('expes.destroy',$exp)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'destroy_exp_'.e($exp->id).'','method' => 'DELETE','action' => ''.e(route('expes.destroy',$exp)).'']); ?>  <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<div class="modal fade" id="modal-exp-edit-<?php echo e($exp->id); ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.profile.exp.edit','data' => ['expe' => $exp]]); ?>
<?php $component->withName('profile.exp.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['expe' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($exp)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>
  </div>
</div>
<?php $__env->stopPush(); ?>
<div class="mb-2">

  <div class="clearfix line-bot">
    <h4 class="pull-left"> <?php echo e($exp->position); ?> </h4>

    <div class="pull-right">
      <button onclick="<?php echo e($script_destroy); ?>" class="btn btn-sm btn-icon btn-danger">
        <i class="ft ft-x"></i></button>
      <button data-toggle="modal" data-target="#modal-exp-edit-<?php echo e($exp->id); ?>" class="btn btn-sm btn-icon btn-info">
        <i class="ft ft-edit"></i></button>
    </div>


  </div>

  <p> <?php echo e($exp->company); ?>

    <?php echo e(__('from at')); ?> : <?php echo e($exp->from_at); ?>

  </p>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\www\kp\resources\views/components/profile/exp.blade.php ENDPATH**/ ?>