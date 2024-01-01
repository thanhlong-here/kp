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

$list = $query->orderByDesc('created_at')->paginate($total);

?>
<?php $__env->startPush('outer'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['id' => 'inbox_remove','method' => 'DELETE','class' => 'none']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'inbox_remove','method' => 'DELETE','class' => 'none']); ?>

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
           
        </thead>
        <tbody>

            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th>
                    <?php if( $row->sender_id == $user->id ): ?>
                    <?php echo e(__('Tới')); ?> : <?php echo e($row->receiver->freelancer->name); ?>

                    <?php else: ?>
                    <?php echo e(__('Từ khách')); ?> : <?php echo e($row->sender_id); ?>

                    <?php endif; ?>

                </th>
                <th>

                    <a href="#" class="font-medium-2" data-toggle="modal" data-target="#modal-read-<?php echo e($row->id); ?>">
                        <?php echo e($row->title); ?>

                    </a>

                </th>


                <td>
                    <p class="pull-right"> <?php echo e($row->created_at); ?> </p>
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

                            <button type="button" 
                            class="btn btn-icon" data-dismiss="modal"><i class="ft ft-x"></i> </button>
                        </div>
                    </div>
                    <div class="modal-body">

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('user.contacts.store',$user)).'','class' => 'form card-block']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('user.contacts.store',$user)).'','class' => 'form card-block']); ?>
                            <input value="<?php echo e($row->title); ?>" name="title" type="hidden" />
                            <input value="<?php echo e($row->id); ?>" name="parent_id" type="hidden" />
                            <input value="reply" name="type" type="hidden" />
                            <?php if( $row->sender_id == $user->id ): ?>
                            <input value="<?php echo e($row->receiver_id); ?>" name="receiver_id" type="hidden" />
                            <?php else: ?>
                            <input value="<?php echo e($row->sender_id); ?>" name="receiver_id" type="hidden" />
                            <?php endif; ?>

                            <div class="tab-content" id="read-<?php echo e($row->id); ?>">

                                <div class="p-1 mb-2 box"> <?php echo $row->content; ?> </div>

                                <div class="form-action float-xs-right">
                                    <button type="button" onclick="swtab('reply',<?php echo e($row->id); ?>)" class="btn round"> <?php echo e(__('Phản hồi')); ?> </button>

                                </div>
                            </div>
                            <div class="tab-panel none" id="reply-<?php echo e($row->id); ?>">

                                <textarea name="content" placeholder="<?php echo e(__('Viết gì đó...')); ?>" class="form-control mb-2 font-medium-2" rows="8"></textarea>
                                <div class="form-action float-xs-right">
                                    <button type="button" onclick="swtab('read',<?php echo e($row->id); ?>)" class="btn  round"> <?php echo e(__('Quay lại')); ?> </button>
                                    <button type="submit" class="btn btn-primary round"> <?php echo e(__('Gửi')); ?> </button>
                                </div>


                            </div>
                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
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
</div>

<?php $__env->startPush('script'); ?>
<script>
    function swtab(type, id) {
        if (type == 'reply') {
            $('#read-' + id).hide();
            $('#reply-' + id).show();
        } else {
            $('#read-' + id).show();
            $('#reply-' + id).hide();
        }
    }

    function trap(action) {
        $('#inbox_remove').attr('action', action);
        $('#inbox_remove').submit();
    }
</script>

<?php $__env->stopPush(); ?><?php /**PATH D:\www\kp\resources\views/components/inbox/table.blade.php ENDPATH**/ ?>