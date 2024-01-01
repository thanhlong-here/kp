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

<?php $__env->startPush('script'); ?>
<script>
    $(".word-count .word").keydown(function() {
        var len = $(this).val().length;
        $(this).parent().find('.count').html(len);
    });
</script>
<?php $__env->stopPush(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('products.update',$product)).'','enctype' => 'multipart/form-data','method' => 'PUT']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('products.update',$product)).'','enctype' => 'multipart/form-data','method' => 'PUT']); ?>
    <input name="step" value="overview" type="hidden" />
    <div id="overview" class="content-wrapper card">
        <div class="card-header">
            <h2> <?php echo e(Theme::title('overview')); ?> </h2>
        </div>
        <div class="card-body">
            <div class="card-block">
                <div class="form-group">


                    <div class="help fixed">
                        <?php echo e(__("This is your Service title. Choose wisely, you can only use 120 characters.")); ?>

                    </div>
                    <div class="word-count">
                        <textarea rows="4" name="name" maxlength="120" placeholder="<?php echo e(__('i will')); ?> " class="form-control font-large-1 shadow word"><?php echo e($product->name); ?></textarea>
                        <div class="pull-right"> <span class="count">0</span>/120 </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="help fixed">
                        <?php echo e(__("Please choose the category and sub-category most suitable for your Gig.")); ?>

                    </div>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('category.service', ['product' => $product])->html();
} elseif ($_instance->childHasBeenRendered('T574ijw')) {
    $componentId = $_instance->getRenderedChildComponentId('T574ijw');
    $componentTag = $_instance->getRenderedChildComponentTagName('T574ijw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('T574ijw');
} else {
    $response = \Livewire\Livewire::mount('category.service', ['product' => $product]);
    $html = $response->html();
    $_instance->logRenderedChild('T574ijw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
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
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/product/edit/overview.blade.php ENDPATH**/ ?>