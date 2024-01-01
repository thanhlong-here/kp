<?php $attributes = $attributes->exceptProps(['product']); ?>
<?php foreach (array_filter((['product']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-cart-'.e($product->id).'','class' => 'modal-dialog modal-lg']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-cart-'.e($product->id).'','class' => 'modal-dialog modal-lg']); ?>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h2 class="modal-title text-bold-600"><?php echo e(Theme::title('customize your package')); ?></h2>

        </div>
        <div class="modal-body row ">
          <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart.custom', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('5HFd4qU')) {
    $componentId = $_instance->getRenderedChildComponentId('5HFd4qU');
    $componentTag = $_instance->getRenderedChildComponentTagName('5HFd4qU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5HFd4qU');
} else {
    $response = \Livewire\Livewire::mount('cart.custom', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('5HFd4qU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH D:\www\kp\resources\views/components/modal/cart.blade.php ENDPATH**/ ?>