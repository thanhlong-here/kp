<?php $attributes = $attributes->exceptProps([
'freelancer',
'route'
]); ?>
<?php foreach (array_filter(([
'freelancer',
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

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app.open','data' => ['style' => 'height:8rem;overflow:hidden','route' => ''.e($route).'']]); ?>
<?php $component->withName('app.open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['style' => 'height:8rem;overflow:hidden','route' => ''.e($route).'']); ?>
        <?php if($freelancer->avatar): ?>

        <img class="img-fluid img-top" loading="lazy" src="<?php echo e(url($freelancer->avatar->src)); ?>">

        <?php endif; ?>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app.open','data' => ['route' => ''.e($route).'','class' => 'card-body p-1']]); ?>
<?php $component->withName('app.open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['route' => ''.e($route).'','class' => 'card-body p-1']); ?>
        <p class="font-medium-2 primary text-bold-600"><?php echo e($freelancer->name); ?></p>
        <p><?php echo e($freelancer->job); ?></p>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div><?php /**PATH D:\www\kp\resources\views/components/app/freelancer/item.blade.php ENDPATH**/ ?>