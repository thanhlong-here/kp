<?php $attributes = $attributes->exceptProps([
'query',
'user',
'total' => 12,
]); ?>
<?php foreach (array_filter(([
'query',
'user',
'total' => 12,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php

$list = $query->paginate($total);

?>
<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-reply']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-reply']); ?>
    <div class="modal-content">

    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<div id="table" class="table-responsive">
    <table class="table">
        <thead>
            <th>

            </th>
            <th>
                <?php echo e(__('Tiêu đề')); ?>

            </th>

            <th>

            </th>
            <th></th>
        </thead>
        <tbody>

            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th>
                    <?php if( $row->sender_id == $user->id ): ?>
                        <?php echo e(__('Tới')); ?> : <?php echo e($row->user->freelancer->name); ?>

                    <?php else: ?> 
                        <?php echo e(__('Từ khách')); ?> 
                    <?php endif; ?>

                </th>
                <th>

                    <a href="#" class="font-medium-2" data-toggle="modal" data-target="#modal-read-<?php echo e($row->id); ?>">
                        <?php echo e($row->title); ?>

                    </a>

                </th>


                <td>
                    <p> <?php echo e($row->created_at); ?> </p>
                </td>
                <td>
                    <button class="btn btn-icon btn-sm btn-danger"><i class="ft ft-x"></i> </button>
                </td>
            </tr>
            <?php $__env->startPush('outer'); ?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-read-'.e($row->id).'']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-read-'.e($row->id).'']); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="pull-left">
                            <?php echo e($row->title); ?>

                        </h2>

                        <div class="pull-right">

                            <button type="button" class="btn btn-icon" data-dismiss="modal"><i class="ft ft-x"></i> </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="card-block">

                            <?php echo $row->content; ?>

                        </div>
                    </div>
                </div>
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php $__env->stopPush(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>


    </table>
    <div class="pull-right">
        <?php echo e($list->appends(request()->input())->render('vendor.pagination.simple')); ?>

    </div>
</div><?php /**PATH D:\www\kp\resources\views/components/contact/table.blade.php ENDPATH**/ ?>