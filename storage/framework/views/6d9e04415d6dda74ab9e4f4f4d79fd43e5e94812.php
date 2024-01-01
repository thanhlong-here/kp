<?php $__env->startSection('title'); ?>
<div class="container ">
  <ul class="nav nav-tabs mb-2">
      <li class="nav-item">
        <a class="nav-link" href="#tab31" >
        <h3 class="content-header-title"> <?php echo e(Theme::title('info')); ?> </h3>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tab31" >
          <?php echo e(Theme::title('education')); ?>

        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tab32" >
          <?php echo e(Theme::title('certificate')); ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#tab33" >
          <?php echo e(Theme::title('experience')); ?></a>
      </li>
    </ul>
    
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.freelancer.edit','data' => ['freelancer' => $freelancer]]); ?>
<?php $component->withName('freelancer.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['freelancer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.freelancer','data' => ['freelancer' => $freelancer]]); ?>
<?php $component->withName('layout.freelancer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['freelancer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/dev/freelancer/edit.blade.php ENDPATH**/ ?>