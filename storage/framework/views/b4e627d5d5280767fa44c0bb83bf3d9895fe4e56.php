<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['style' => 'z-index:9','class' => 'col-md-8']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['style' => 'z-index:9','class' => 'col-md-8']); ?>
      <?php echo $__env->make('auth.order.confirm.options', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'col-md-4']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'col-md-4']); ?>
          <div class="card box">
            <div class="row font-medium-1">
              <div class="col-xs-5">
                <?php if($product->avatar): ?>
                  <img loading="lazy" class="img-fluid" src="<?php echo e(url($product->avatar->src)); ?>" />
                <?php endif; ?>
              </div>
              <div class="col-xs-7" >
                 <?php echo e($product->name); ?>

              </div>
            </div>
            <div class="card-body">
              <div class="card-block">
                <div class="row font-medium-2 text-bold-400 " >
                    <div class="col-xs-6">
                      <h4 class="card-title"><?php echo e(Theme::title($product->pack)); ?></h4>
                    </div>
                    <div class="col-xs-6">
                      <span class="float-xs-right">
                        <?php echo e($product->price_format); ?>

                      </span>
                    </div>
                </div>
                <div class="row font-medium-2 text-bold-400 " >
                    <label class="col-xs-6">
                      <?php echo e(Theme::title('sub total')); ?>

                    </label>
                    <div class="col-xs-6">
                      <span class="float-xs-right">
                        <?php echo e($product->price_format); ?>

                      </span>
                    </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">

                <div class="row font-medium-3 mb-2 text-bold-600">
                    <label class="col-xs-6">
                        <?php echo e(Theme::title('total')); ?> :
                    </label>
                    <div class="col-xs-6" >
                      <span class="float-xs-right">
                        <?php echo e(number_format($order->total).' đ'); ?>

                      </span>
                    </div>
                </div>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button.confirm','data' => ['class' => 'btn btn-primary btn-block','out' => ' '.Theme::title('confirm & pay').'']]); ?>
<?php $component->withName('button.confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'btn btn-primary btn-block','out' => ' '.Theme::title('confirm & pay').'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

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

<?php $__env->startPush('outer'); ?>
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-confirm']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-confirm']); ?>
    <div class="modal-content">
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['method' => 'PUT','action' => ''.e(route('auth.order.pay',$order)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['method' => 'PUT','action' => ''.e(route('auth.order.pay',$order)).'']); ?>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h2 class="modal-title"><?php echo e(Theme::title('confirm info')); ?></h2>

        </div>
        <div class="modal-body">
          <div class="card-header text-justify font-medium-3 text-bold-600">
              <?php echo __('Information is processed within
              <span class="primary">  24 hours </span>
              after payment is received'); ?>

          </div>
          <?php echo $__env->make('auth.order.confirm.invoice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="modal-footer">
          <label class="font-medium-2 float-xs-left" >
                <input type="checkbox" required value="1">
                <span>
                  <?php echo e(__('I confirm the order details and agree to the payment')); ?>

                </span>
          </label>

            <button name="act" value="confirm" type="submit" class="btn btn-primary">
               <?php echo Theme::title('continue'); ?> </button>
        </div>
       <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>
   <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('x-script'); ?>

  function invoice(){
    $(".has_invoice").toggle();
  }
  function edit(){
    $(".edit_invoice").toggle();
  }
<?php $__env->stopPush(); ?>
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
<?php /**PATH D:\www\kp\resources\views/auth/order/confirm.blade.php ENDPATH**/ ?>