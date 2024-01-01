

<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.contact','data' => ['freelancer' => $freelancer]]); ?>
<?php $component->withName('modal.contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['freelancer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('side'); ?>
<div class="card">
  <div class="card-block  text-xs-center box">
    <div class="media profil-cover-details">
      <?php if($freelancer->avatar): ?>
      <img loading="lazy" class="rounded-circle img-border x100" src="<?php echo e(url($freelancer->avatar->src)); ?>" />
      <?php endif; ?>
      <h3 class="card-title mt-1" >
      <?php echo e($freelancer->name); ?>

      </h3>
    </div>
    <div class="block">
      <span class="font-medium-2 mr-1">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.star','data' => []]); ?>
<?php $component->withName('star'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      </span>

      <label class="text-bold-600 font-medium-2" >
      5.0 / 969 <?php echo e(__('review')); ?>

      </label>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button.contact','data' => ['id' => ''.e($freelancer->id).'','class' => 'btn btn-primary btn-block','out' => ''.e(Theme::title('contact me')).'']]); ?>
<?php $component->withName('button.contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => ''.e($freelancer->id).'','class' => 'btn btn-primary btn-block','out' => ''.e(Theme::title('contact me')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  </div>
</div>

<div class="card">
  <div class="card-header row">
    <h4 id="intro" class="card-title">
      <?php echo e(Theme::title('intro')); ?>

    </h4>
  </div>
  <div class="card-block box">
    <?php echo $freelancer->intro; ?>

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header row">
    <h4 id='service' class="card-title">
      <?php echo e(Theme::title('service')); ?>

    </h4>
  </div>
  <div class="card-body">

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.list','data' => ['query' => $query,'col' => '2']]); ?>
<?php $component->withName('product.list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['query' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($query),'col' => '2']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  </div>
</div>

<div class="card">
  <div class="card-header row">
    <h4 id='review' class="card-title">
      <?php echo e(Theme::title('review')); ?>"
    </h4>

    <span class="font-medium-2 mr-1">
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.star','data' => []]); ?>
<?php $component->withName('star'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </span>
  </div>

  <div class="card-block box">

    <div class="card-title">
      <?php echo e(__('no comment')); ?>

    </div>

  </div>

</div>
<?php $__env->stopSection(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.master','data' => ['side' => 'detail-left']]); ?>
<?php $component->withName('layout.master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['side' => 'detail-left']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH D:\www\kp\resources\views/page/freelancer/index.blade.php ENDPATH**/ ?>