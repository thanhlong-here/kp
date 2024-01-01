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

<?php

$input="Các Bên đồng ý rằng kingpang.vn chỉ cung cấp môi trường để các bên tìm kiếm cơ hội hợp tác.
Việc cung ứng dịch vụ chỉ được xác nhận thông qua hợp đồng/thỏa thuận giữa Các Bên,
vì vậy việc bồi thường/đền bù hợp đồng do Các Bên giải quyết dựa theo hợp đồng/thỏa
thuận đã giao kết hoặc theo quy định pháp luật Việt Nam.

Các Bên hiểu rằng kingpang.vn không có vai trò, trách nhiệm trong việc giải quyết việc bồi thường,
đền bù giữa Các Bên. Kingpang.vn được quyền cung cấp các thông tin của Các Bên cho nhau để
Các Bên thuận tiện trong việc giải quyết vấn đề bồi thường/đền bù."
?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('products.update',$product)).'','enctype' => 'multipart/form-data','method' => 'PUT']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('products.update',$product)).'','enctype' => 'multipart/form-data','method' => 'PUT']); ?>
    <input name="step" value="publish" type="hidden" />
    <div id="overview" class="content-wrapper card">
        <div class="card-header">
            <h2> <?php echo e(Theme::title('publish')); ?>

                <h2>
        </div>
        <div class="card-body">


            <div class="card-block">
                <label> Điều khoản hoàn tiền và đền bù </label>
                        <div class="form-group">
                            <textarea rows="10" class="form-control font-medium-2"><?php echo e($input); ?></textarea>
                        </div>
            </div>
        </div>
        <div class="card-footer">

            <div class="pull-right">
                <button name="publish" value="save" type="submit" class="btn btn-primary">
                    <?php echo e(Theme::title('finish')); ?>

                </button>

            </div>
        </div>
    </div>

 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/product/edit/publish.blade.php ENDPATH**/ ?>