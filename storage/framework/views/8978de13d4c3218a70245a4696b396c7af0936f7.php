<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'modal-sm','id' => 'modal-register']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'modal-sm','id' => 'modal-register']); ?>
  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title text-xs-center" >
          <i class="fa fa-envelope-o mr-1"></i> <?php echo e(Theme::title('Tạo tài khoản với Email')); ?>

        </h4>
      </div>
      <div class="modal-body">

        <div class="card">
          <div class="card-block">
            <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth.register', [])->html();
} elseif ($_instance->childHasBeenRendered('WdvitkV')) {
    $componentId = $_instance->getRenderedChildComponentId('WdvitkV');
    $componentTag = $_instance->getRenderedChildComponentTagName('WdvitkV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WdvitkV');
} else {
    $response = \Livewire\Livewire::mount('auth.register', []);
    $html = $response->html();
    $_instance->logRenderedChild('WdvitkV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH D:\www\kp\resources\views/components/modal/register.blade.php ENDPATH**/ ?>