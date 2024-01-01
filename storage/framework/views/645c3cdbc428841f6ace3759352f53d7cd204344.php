<?php $attributes = $attributes->exceptProps([
'service',
'route'
]); ?>
<?php foreach (array_filter(([
'service',
'route'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="card shadow box-round">

  <?php if($service->avatar): ?>
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app.open','data' => ['style' => 'height:8rem;overflow:hidden','route' => ''.e($route).'']]); ?>
<?php $component->withName('app.open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['style' => 'height:8rem;overflow:hidden','route' => ''.e($route).'']); ?>
    <img class="img-fluid img-top" loading="lazy" src="<?php echo e(url($service->avatar->src)); ?>">
   <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  <?php endif; ?>

  <div class="card-body m-1">
    <div class="clear">
      <label class="pull-left">
        <span class="primary">

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
          <span class="text-muted"></span>
      </label>
      <div class="pull-right fonticon-wrap">
          <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth.like', ['item' => $service,'count' => ''.e($service->likes->count()).''])->html();
} elseif ($_instance->childHasBeenRendered('W1Fh0YK')) {
    $componentId = $_instance->getRenderedChildComponentId('W1Fh0YK');
    $componentTag = $_instance->getRenderedChildComponentTagName('W1Fh0YK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('W1Fh0YK');
} else {
    $response = \Livewire\Livewire::mount('auth.like', ['item' => $service,'count' => ''.e($service->likes->count()).'']);
    $html = $response->html();
    $_instance->logRenderedChild('W1Fh0YK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
      </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app.open','data' => ['route' => ''.e($route).'','class' => 'clear pb-2']]); ?>
<?php $component->withName('app.open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['route' => ''.e($route).'','class' => 'clear pb-2']); ?>
      <p class="text-bold-400"><?php echo e($service->name); ?></p>
      <p class="font-medium-2 primary prb">
        <?php echo e(Theme::title('form')); ?> :
        <span class=" text-bold-600">
          <?php echo e($service->price_format); ?>

        </span>
      </p>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

  </div>
</div><?php /**PATH D:\www\kp\resources\views/components/app/service/item.blade.php ENDPATH**/ ?>