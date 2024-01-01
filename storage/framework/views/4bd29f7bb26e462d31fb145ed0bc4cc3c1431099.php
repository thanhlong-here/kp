<?php $attributes = $attributes->exceptProps(['freelancer']); ?>
<?php foreach (array_filter((['freelancer']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('freelancers.update',$freelancer)).'','enctype' => 'multipart/form-data','method' => 'PUT']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('freelancers.update',$freelancer)).'','enctype' => 'multipart/form-data','method' => 'PUT']); ?>

    <div class="container">


        <div class="col-md-8">
            <div class="form-group">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input type="text" value="<?php echo e($freelancer->name); ?>" placeholder="<?php echo e(Theme::title('name')); ?>" class="form-control input-lg" name="name" />

            </div>
            <div class="card">

                <div class="card-body">

                    <div class="card-block">
                        <div class="row">

                            <div class="col-xs-6">

                                <div class="form-group">

                                    <?php $__errorArgs = ['work_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <input type="email" value="<?php echo e($freelancer->work_email); ?>" class="form-control" placeholder="email" name="work_email" />
                                </div>


                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">

                                    <?php $__errorArgs = ['work_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <input type="number" value="$freelancer->work_phone" placeholder="work phone" class="form-control" name="work_phone" />
                                </div>
                            </div>

                        </div>



                        <div class="form-group">

                            <input type="text" placeholder="Job" value="<?php echo e($freelancer->job); ?>" required class="form-control" name="job" />
                        </div>
                        <div class="mt-1">

                            <textarea name="intro" id="intro" rows="8" placeholder="Intro" class="form-control"><?php echo e($freelancer->intro); ?></textarea>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card box">
                <div class="card-header">
                    <h4 class="card-title"><?php echo e(Theme::title('avatar')); ?></h4>

                    <div class="heading-elements">
                        <a data-action="collapse"><i class="ft-minus"></i></a>
                    </div>
                </div>

                <div class="card-body collapse in text-xs-center">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.temp','data' => ['class' => 'img-fluid','src' => ''.e(empty($freelancer->avatar) ? '': asset($freelancer->avatar->src)).'','style' => 'height:120px']]); ?>
<?php $component->withName('temp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'img-fluid','src' => ''.e(empty($freelancer->avatar) ? '': asset($freelancer->avatar->src)).'','style' => 'height:120px']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
            </div>

            <div>

            </div>
            <div class="box card">
                <div class="card-block">
                    <div class="form-group font-medium-1 text-bold-600">
                        <?php echo e($freelancer->user->email); ?>


                    </div>

                    <button type="button" class="btn btn-sm btn-block ">
                        <?php echo e(Theme::title('change account')); ?>

                    </button>

                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-xs-6">
                            <button type="reset" class="btn btn-block ">
                                <?php echo e(Theme::title('cancel')); ?>

                            </button>
                        </div>
                        <div class="col-xs-6">
                            <button id="btn_send" type="submit" class="btn btn-primary btn-block">
                                <?php echo e(Theme::title('save')); ?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/freelancer/edit.blade.php ENDPATH**/ ?>