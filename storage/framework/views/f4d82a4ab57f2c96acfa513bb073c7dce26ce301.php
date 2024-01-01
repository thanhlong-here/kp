<?php $attributes = $attributes->exceptProps([
'freelancer'
]); ?>
<?php foreach (array_filter(([
'freelancer'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('auth.profile.update',$freelancer)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('auth.profile.update',$freelancer)).'']); ?>

   
    <div class="modal-body">
        <div class="card-block">
            <div class="form-group">
                <label> <?php echo e(Theme::title('display name')); ?> </label>
                <input class="form-control" name="name" value="<?php echo e($freelancer->name); ?>" />
            </div>
            <div class="form-group">
                <label> <?php echo e(Theme::title('job')); ?> </label>
                <input class="form-control" name="job" value="<?php echo e($freelancer->job); ?>" />
            </div>
            <div class="form-group">
                <label> <?php echo e(Theme::title('intro')); ?> </label>
                <textarea class="form-control" rows="8" placeholder="<?php echo e(__('description')); ?>" name="intro"><?php echo e($freelancer->intro); ?></textarea>
            </div>

        </div>
    </div>

    <div class="form-actions clearfix">

        <div class="buttons-group float-xs-right">
            <button type="reset" data-dismiss="modal" class="btn ">
                <?php echo e(Theme::title('cancel')); ?>

            </button>
            <button type="submit" class="btn btn-primary mr-1"><?php echo e(Theme::title('save')); ?></button>
        </div>
    </div>

 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/profile/intro.blade.php ENDPATH**/ ?>