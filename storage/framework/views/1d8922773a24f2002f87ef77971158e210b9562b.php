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
<?php if (! $__env->hasRenderedOnce('9894e6b5-2f5a-4912-a11e-305deb95ba0b')): $__env->markAsRenderedOnce('9894e6b5-2f5a-4912-a11e-305deb95ba0b'); ?>
<script>
    function opack(e) {
        $(e).closest('.card').children('.card-body').collapse('toggle');
    }
    $("#add_ext").click(function() {
        $("#ext_services").append(
            "<div class='shadow p-2 mb-1'>" +
            "<div class='form-group row mb-2'>" +
            "<div class='col-xs-7'><input type='text' name='ext_option[title][]' class='form-control' placeholder='<?php echo e(__('title your extra service')); ?>' /></div>" +
            "<div class='col-xs-5'>" +
            "<div class='input-group'>" +
            "<input type='number' name='ext_option[price][]' class='form-control' placeholder='<?php echo e(__('price')); ?>' />" +
            "<span class='input-group-addon'>đ</span>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "<div class='input-group mb-2'>" +
            "<input type='text' name='ext_option[description][]' class='form-control' placeholder='<?php echo e(__('i will describe your offering')); ?>' />" +
            "<span onclick='$(this).parent().parent().remove()' class='input-group-addon '> <i class='ft ft-x'></i> </span>" +
            "</div>" +
            "</div>"
        );
    });
</script>
<?php endif; ?>
<?php $__env->stopPush(); ?>


<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('products.update',$product)).'','enctype' => 'multipart/form-data','method' => 'PUT']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('products.update',$product)).'','enctype' => 'multipart/form-data','method' => 'PUT']); ?>
    <input name="step" value="pricing" type="hidden" />
    <div id="pricing" class="content-wapper bg-white p-1 mb-2">
        <div class="content-header pt-1 pb-1">
            <h2> <?php echo e(Theme::title('pricing')); ?> </h2>
        </div>
        <div class="content-body">
            <div class="card shadow">
                <div id="price" class="card-header row">
                    <h2 class="card-title"> <?php echo e(__('standard pack')); ?> :</h2>
                </div>
                <div class="card-body row">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.pack','data' => ['product' => $product]]); ?>
<?php $component->withName('product.pack'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                </div>
            </div>

            <?php $__currentLoopData = config('dev.packs'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $item = $product->getPacks()->wherePack($p)->firstOrNew();
            $item->pack = $p;
            ?>
            <div class="card shadow">
                <div id="price" class="card-header">
                    <h2 class="card-title"> <?php echo e(__("$p price")); ?> : </h2>
                    <div class="heading-elements">
                        <input onclick="opack(this)" <?php echo e(empty($pack)?'':'checked'); ?> type="checkbox" name="extend[]" value="<?php echo e($p); ?>" />
                    </div>
                </div>
                <div class="card-body <?php echo e(empty($item->id)? '':'in'); ?> collapse">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.pack','data' => ['product' => $item]]); ?>
<?php $component->withName('product.pack'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="card">
                <div id="price" class="card-header row">
                    <h2 class="card-title"> <?php echo e(Theme::title('add extra services')); ?> :</h2>
                </div>
                <div class="card-block">


                    <div id="ext_services" class="row mb-2">
                        <?php $__currentLoopData = $product->ext_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class='shadow p-2 mb-1'>
                            <div class='form-group row mb-2'>
                                <div class='col-xs-7'><input type='text' name='ext_option[title][]' value="<?php echo e($option->title); ?>" class='form-control' placeholder='<?php echo e(__('title your extra service')); ?>' /></div>
                                <div class='col-xs-5'>
                                    <div class='input-group'>
                                        <input type='number' name='ext_option[price][]' value="<?php echo e($option->price); ?>" class='form-control' placeholder='<?php echo e(__('price')); ?>' />
                                        <span class='input-group-addon'>đ</span>
                                    </div>
                                </div>
                            </div>
                            <div class='input-group mb-2'>
                                <input type='text' name='ext_option[description][]' value="<?php echo e($option->description); ?>" class='form-control' placeholder='<?php echo e(__('i will describe your offering')); ?>' />
                                <span onclick='$(this).parent().parent().remove()' class='input-group-addon '> <i class='ft ft-x'></i> </span>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="form-group row  mb-2">
                        <button id="add_ext" type="button" class="btn btn-secondary pull-right">+<?php echo e(Theme::title('add service extra')); ?></button>
                    </div>
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
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/product/edit/pricing.blade.php ENDPATH**/ ?>