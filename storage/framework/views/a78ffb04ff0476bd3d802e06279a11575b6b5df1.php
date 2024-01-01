
<?php $__env->startSection('title'); ?>
<div class="content-header-title mb-2">
  <h2>
    <?php echo e(Theme::title('become to freelancer')); ?>

  </h2>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-body">
  <div class="card">
    <div class="card-block">

      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','enctype' => 'multipart/form-data','action' => ''.e(route('freelancers.store')).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','enctype' => 'multipart/form-data','action' => ''.e(route('freelancers.store')).'']); ?>
    
        <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>" />
        <div class="form-body">

          <div class="col-md-7">

            <div class="card">

              <div class="card-body">

                <div class="card-block">
                  <div class="row">
                    <div class="col-xs-4">

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
                    <div class="col-xs-8">

                      <div class="form-group">
                        <label><?php echo e(Str::title(__('name'))); ?></label>
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
                        <input type="text" placeholder="<?php echo e(Str::title(__('label.transaction name'))); ?>" class="form-control" value="<?php echo e($user->name); ?>" name="name" id="name" />

                      </div>


                      <div class="form-group">
                        <label><?php echo e(Str::title(__('job'))); ?></label>
                        <?php $__errorArgs = ['job'];
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
                        <input type="text" placeholder="<?php echo e(Str::title(__('label.job'))); ?>" class="form-control" name="job" id="job" />
                      </div>

                    </div>

                  </div>

                  <div class="form-group mt-2">

                    <textarea name="intro" id="intro" rows="3" placeholder="<?php echo e(Str::title(__('Intro'))); ?>" class="form-control"><?php echo e(old('intro')); ?></textarea>
                  </div>



                </div>
              </div>
            </div>
          </div>

          <div class="col-md-5">
            <div class="card">
              <div class="card-block ">

                <div class="form-group">
                  <label><?php echo e(Str::title(__('work phone'))); ?></label>
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
                  <input type="number" placeholder="<?php echo e(Str::title(__('work phone'))); ?>" class="form-control" name="work_phone" id="work_phone" />
                </div>



                <label>Social:</label>
                <div class="form-group">

                  <div class="input-group">
                    <span class="input-group-addon">Facebook</span>
                    <input type="hidden" name="array_key[]" value="facebook">
                    <input type="text" name="array_value[]" class="form-control" placeholder="facebook.com">
                  </div>
                </div>
                <div class="form-group">

                  <div class="input-group">
                    <span class="input-group-addon">Linkedin</span>
                    <input type="hidden" name="array_key[]" value="linkedin">
                    <input type="text" name="array_value[]" class="form-control" placeholder="linkedin.com">
                  </div>
                </div>

                <div class="form-group">

                  <div class="input-group">
                    <span class="input-group-addon">Instagram</span>
                    <input type="hidden" name="array_key[]" value="instagram">
                    <input type="text" name="array_value[]" class="form-control" placeholder="instagram.com">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <div class="form-actions clearfix">

          <div class="buttons-group float-xs-right">
            <button type="reset" class="btn ">
              <?php echo e(__('Cancel')); ?>

            </button>
            <button type="submit" class="btn btn-primary mr-1"><?php echo e(__('Join with us')); ?></button>
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
</div>
<?php $__env->stopSection(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.auth','data' => ['user' => $user]]); ?>
<?php $component->withName('layout.auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/auth/join.blade.php ENDPATH**/ ?>