<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('freelancers.store')).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('freelancers.store')).'']); ?>
    <div style="z-index: 99; top:0" class="fixed block ">
        <div class="row bg-white line-b p-1">
            <div class="col-md-6">
                <h2 class="content-title">
                    <?php echo e(Theme::title('freelancer register')); ?>

                </h2>
            </div>
            <div class="col-md-6">
                <div class="pull-right">
                    <button id="btn_send" type="submit" class="btn btn-primary">
                        <?php echo e(Theme::title('send')); ?>

                    </button>
                    <button type="button" class="btn btn-info" onclick="parent.location.reload();">
                        <span aria-hidden="true"> X </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div style="padding-top:6rem;" class="container">


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
                <input type="text" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(Theme::title('name')); ?>" class="form-control input-lg" name="name" />

            </div>
            <div class="card">

                <div class="card-body">

                    <div class="card-block">
                        <div class="row">

                            <div class="col-xs-6">

                                <div class="form-group">

                                    <?php $__errorArgs = ['email'];
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
                                    <input type="email" value="<?php echo e(old('email')); ?>" class="form-control" placeholder="email" name="email" />
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
                                    <input type="number" value="<?php echo e(old('work phone')); ?>" placeholder="work phone" class="form-control" name="work_phone" id="work_phone" />
                                </div>
                            </div>

                        </div>



                        <div class="form-group">

                            <input type="text" placeholder="Job" value="<?php echo e(old('job')); ?>" required class="form-control" name="job" />
                        </div>
                        <div class="mt-1">

                            <textarea name="intro" value="<?php echo e(old('intro')); ?>" rows="5" placeholder="Intro" class="form-control"><?php echo e(old('intro')); ?></textarea>
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

                <div class="card-body collapse text-xs-center">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.temp','data' => ['class' => 'img-fluid','style' => 'height:120px']]); ?>
<?php $component->withName('temp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'img-fluid','style' => 'height:120px']); ?>
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
            <div class="box card p-1">
                <div class="form-group">

                    <input type="password" placeholder="password" class="form-control" required name="password" />
                </div>
                <div class="form-group">

                    <input type="password" placeholder="password confirm" class="form-control" name="password_confirmation" required autocomplete="password" />
                </div>
                <div class="row">
                    <label class="col-xs-4 font-medium-2"> Status :</label>
                    <div class="col-xs-8">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select.status','data' => []]); ?>
<?php $component->withName('select.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

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
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/freelancer/create.blade.php ENDPATH**/ ?>