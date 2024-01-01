<?php $attributes = $attributes->exceptProps([
'certs'
]); ?>
<?php foreach (array_filter(([
'certs'
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
<?php $__currentLoopData = $certs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php 
      $script_destroy = "$('#destroy_cer_$cer->id ').submit()";
  ?>
  <div class="mb-2 line-b">

    <div class="clearfix">
      <h4 class="pull-left"> <?php echo e($cer->certificate); ?> </h4>

      <div class="pull-right">
        <button onclick="<?php echo e($script_destroy); ?>"  class="btn btn-sm btn-icon btn-danger">
          <i class="ft ft-x"></i></button>
        <button data-toggle="modal" data-target="#modal-edit-cer-<?php echo e($cer->id); ?>" class="btn btn-sm btn-icon btn-info">
          <i class="ft ft-edit"></i></button>
      </div>

    </div>

    <p> <?php echo e($cer->issuer); ?>

      <?php echo e(__('at')); ?> : <?php echo e($cer->at); ?>

    </p>

  </div>
  <?php $__env->startPush('outer'); ?>
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['id' => 'destroy_cer_'.e($cer->id).'','method' => 'DELETE','action' => ''.e(route('certs.destroy',$cer)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'destroy_cer_'.e($cer->id).'','method' => 'DELETE','action' => ''.e(route('certs.destroy',$cer)).'']); ?>  <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  <div class="modal fade" id="modal-edit-cer-<?php echo e($cer->id); ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.profile.cer.edit','data' => ['cert' => $cer]]); ?>
<?php $component->withName('profile.cer.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['cert' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($cer)]); ?>
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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php /**PATH D:\www\kp\resources\views/components/profile/cer.blade.php ENDPATH**/ ?>