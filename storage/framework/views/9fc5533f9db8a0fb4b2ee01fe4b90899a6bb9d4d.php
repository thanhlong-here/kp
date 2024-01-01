<?php $__env->startSection('content'); ?>
<div class="container">
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'col-md-8 offset-md-2']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'col-md-8 offset-md-2']); ?>
    <div class="card box">
      <div class="card-header">
        <h2><?php echo e(Theme::title(' requirement')); ?></h2>

      </div>

      <div class="card-block">
        <div class="row">
            <div class="col-md-4">
              <?php if($product->avatar): ?>
                <img loading="lazy" class="img-fluid" src="<?php echo e(url($product->avatar->src)); ?>" />
              <?php endif; ?>
            </div>
            <div class="col-md-8">
              <h4 class="text-justify text-bold-400" >
                <?php echo e($product->name); ?>

              </h4>
              <div class="row mb-1">
                <div class="col-xs-6">
                  <span class="font-medium-2 primary text-bold-600" >
                     <?php echo e(Theme::title($product->pack)); ?>

                   </span>
                </div>
                <div class="col-xs-6">
                  <span class="font-medium-1 text-bold-600  float-xs-right" >
                    <i class="icon-calendar"></i>
                     <?php echo e(Theme::title('delivery')); ?> :
                     <?php echo e($product->delivery); ?> <?php echo e(__('days')); ?>

                   </span>
                </div>
              </div>
              <div class="box">
                <div class="p-1 font-medium-1 text-justify">
                  <?php echo $product->description; ?>

                </div>
                </div>
            </div>
        </div>
          <div class="card-text">
            <blockquote class="blockquote border-left-red border-left-3 mt-1">
              <p class="mb-1">
                <?php echo ('The start time is calculated when
                  <span class="text-bold-600">
                    Freelancer confirms and receives all the requirements
                  </span>'); ?>

              </p>
              <p class="mb-0">
                <?php echo e(__('Please describe your request in detail')); ?>

              </p>

            </blockquote>
          </div>
          <div class="card-body">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form form-horizontal','action' => ''.e(route('auth.order.request',$order)).'','method' => 'PUT']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form form-horizontal','action' => ''.e(route('auth.order.request',$order)).'','method' => 'PUT']); ?>
              <div class="form-body">

                <div class="form-group">
                  <textarea
                  rows="5"
                  class="form-control"
                  name="requirement"
                  placeholder="<?php echo e(Theme::title('request description')); ?>"></textarea>
                </div>
              </div>
              <div class="form-actions right">
                  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button.attach','data' => ['class' => 'font-medium-3 mr-1']]); ?>
<?php $component->withName('button.attach'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'font-medium-3 mr-1']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                  <button name="act" value="requirement" class="btn btn-primary" type="submit">
                    <?php echo e(Theme::title('submit')); ?> </button>
              </div>
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
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
</div>
<?php $__env->stopSection(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.pay','data' => []]); ?>
<?php $component->withName('layout.pay'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH D:\www\kp\resources\views/auth/order/requirement.blade.php ENDPATH**/ ?>