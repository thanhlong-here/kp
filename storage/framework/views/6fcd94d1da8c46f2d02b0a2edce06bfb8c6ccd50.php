<?php $attributes = $attributes->exceptProps([
'product',
'lang' => 'en',
]); ?>
<?php foreach (array_filter(([
'product',
'lang' => 'en',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$title = ($lang == 'en') ? 'Dịch tiếng Anh' : 'Dịch tiếng Hàn';

?>

<div class="modal-content">

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('products.update',$product)).'','method' => 'PUT','class' => 'form']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('products.update',$product)).'','method' => 'PUT','class' => 'form']); ?>
        <input type="hidden" name="lang" value="<?php echo e($lang); ?>" />
        <input type="hidden" name="step" value="trans" />
        <div class="modal-header">
            <h4 class="pull-left">
                <?php echo e($title); ?>

            </h4>
            <div class="pull-right">
                <button type="submit" class="btn  btn-primary"> <?php echo e(Theme::title('translate')); ?> </button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        <div class="modal-body">
            <div class="form-group">
               
                <div class=" row">
                    <div class="col-md-5">

                        <p class="font-large-1">
                            <?php echo e($product->name); ?>

                        </p>
                    </div>
                    <div class="col-md-7">
                        <label class="text-bold-600 font-medium-3"> <?php echo e(Theme::title('title')); ?> </label>
                   
                        <div class="word-count">
                        
                            <textarea rows="2" name="trans[name]"
                            maxlength="120" class="form-control font-medium-3 shadow word"><?php echo $product->propTrans('name',$lang,false); ?></textarea>
                            <div class="pull-right"> <span class="count">0</span>/120 </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-5 font-large-1">

                    <?php echo $product->content; ?>

                </div>
                <div class="col-md-7">
                    <label class="text-bold-600 font-medium-3"> <?php echo e(Theme::title('content')); ?> </label>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.editor','data' => ['name' => 'trans[content]','mode' => 'editor']]); ?>
<?php $component->withName('editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'trans[content]','mode' => 'editor']); ?><?php echo $product->propTrans('content',$lang,false); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
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


</div><?php /**PATH D:\www\kp\resources\views/components/product/trans.blade.php ENDPATH**/ ?>