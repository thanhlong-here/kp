<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'modal-sm','id' => 'modal-login-email']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'modal-sm','id' => 'modal-login-email']); ?>
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onClick="$('#modal-login-email').modal('toggle')">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-xs-center" >
        <i class="fa fa-envelope-o mr-1"></i> <?php echo e(__('Đăng nhập với email')); ?>

        </h4>
      </div>
      <div class="modal-body">

        <div class="card">
          <div class="card-block">
            <div class="card-body">
              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth.login', [])->html();
} elseif ($_instance->childHasBeenRendered('o2971a6')) {
    $componentId = $_instance->getRenderedChildComponentId('o2971a6');
    $componentTag = $_instance->getRenderedChildComponentTagName('o2971a6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('o2971a6');
} else {
    $response = \Livewire\Livewire::mount('auth.login', []);
    $html = $response->html();
    $_instance->logRenderedChild('o2971a6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
          </div>
        </div>
      </div>

  </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH D:\www\kp\resources\views/components/modal/login_email.blade.php ENDPATH**/ ?>