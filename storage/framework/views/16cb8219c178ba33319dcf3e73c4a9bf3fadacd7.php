<?php $attributes = $attributes->exceptProps([
'product',
]); ?>
<?php foreach (array_filter(([
'product',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('products.update',$product)).'','enctype' => 'multipart/form-data','method' => 'PUT']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('products.update',$product)).'','enctype' => 'multipart/form-data','method' => 'PUT']); ?>
    <input name="step" value="description" type="hidden" />
    <div id="description" class="card">
        <div class="card-header">
            <h2> <?php echo e(Theme::title('description')); ?> </h2>
        </div>
        <div class="card-block form-group shadow">
            <div class="help fixed">
                <?php echo e(__("Describe what you are offering. Be as detailed as possible so buyers will be able to understand if this meets their needs. Should be at least 120 characters..")); ?>

            </div>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.editor','data' => ['mode' => 'editor']]); ?>
<?php $component->withName('editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['mode' => 'editor']); ?><?php echo $product->content; ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>
        <div class="card-footer">
            <div class="pull-right">
                <button id="btn_send" type="submit" class="btn btn-primary">
                    <?php echo e(Theme::title('save & continue')); ?>

                </button>

            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/product/edit/description.blade.php ENDPATH**/ ?>