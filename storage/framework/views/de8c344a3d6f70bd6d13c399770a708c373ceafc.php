<?php $attributes = $attributes->exceptProps([
'post'
]); ?>
<?php foreach (array_filter(([
'post'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="section pt-6">
    <div class="app-w">


        <?php echo $post->content; ?>

    </div>


</div>

<div style="z-index: 9;" class="app-w card p-1 line-bot fixed yt-0 text-xs-center">
    <h4 class="text-bold-600 text-xs-center">
       
        <label class=" pull-left" data-dismiss="modal">
            <i class="ft-arrow-left  pull-left  primary font-medium-4"></i>
        </label>
        <?php echo e(Theme::title( $post->name)); ?>

    </h4>
</div><?php /**PATH D:\www\kp\resources\views/components/app/static.blade.php ENDPATH**/ ?>