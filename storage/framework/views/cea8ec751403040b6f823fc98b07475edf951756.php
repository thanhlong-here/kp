<?php $attributes = $attributes->exceptProps([
'user'
]); ?>
<?php foreach (array_filter(([
'user'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<ul class="nav nav-tabs flex nav-underline">
    <li class="nav-item flex-1 ">
        <a class="nav-link active" id="base-tab31" data-toggle="tab" href="#show-message" aria-expanded="true">
            <i class="ft ft-bell"></i> <?php echo e(__('Thông báo')); ?>

        </a>
    </li>
    <li class="nav-item flex-1">
        <a class="nav-link" id="base-tab32" data-toggle="tab" href="#show-inbox" aria-expanded="false">
            <i class="ft ft-inbox"></i> <?php echo e(__('Hộp thư')); ?></a>
    </li>

</ul>

<div class="tab-content line-top px-1 pt-1">
    <div role="tabpanel" class="tab-pane active" id="show-message" aria-expanded="true">

        <div class="p-1 text-xs-center">

            <i class="icon-magnifier"></i>
            <?php echo e(__("Bạn chưa có tin nhắn")); ?>

        </div>


        <div class="inbox-footer p-1">
            <a class="text-muted" href="<?php echo e(route('auth.notifies',$user)); ?>"> <?php echo e(__('Xem tất cả tin nhắn')); ?> </a>
        </div>
    </div>
    <div class="tab-pane" id="show-inbox">
        <div class="p-1 text-xs-center">

            <i class="icon-magnifier"></i>
            <?php echo e(__("Bạn chưa có tin nhắn")); ?>

        </div>
        <div class="inbox-footer p-1">

            <a class="text-muted" href="<?php echo e(route('auth.inbox',$user)); ?>"> <?php echo e(__('Xem tất cả thư đến')); ?> </a>
        </div>
    </div>

</div><?php /**PATH D:\www\kp\resources\views/components/user/inbox-board.blade.php ENDPATH**/ ?>