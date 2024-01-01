<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('freelancer.expes.store',$freelancer)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('freelancer.expes.store',$freelancer)).'']); ?>

  <div class="form-body">
    <div class="card-body">
      <div class="card-block">

        <div class="row form-group">
            <div class="col-xs-8">
              <label><?php echo e(Theme::title(__('company name'))); ?></label>
              <?php $__errorArgs = ['company'];
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
              <input type="text"  placeholder="<?php echo e(Theme::title(__('company name'))); ?>"
              class="form-control"  value="<?php echo e(old('company')); ?>"
              name="company" />
            </div>
            <div class="col-xs-4">
              <label><?php echo e(Theme::title(__('from day'))); ?></label>
              <?php $__errorArgs = ['at'];
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

              <div class="input-group">
  								<span class="input-group-addon">
  									<span class="fa fa-calendar-o"></span>
  								</span>
  								<input type='text' class="form-control  pickadate"
                  name="at"
                   value="<?php echo e(old('at')); ?>" />
  							</div>
            </div>
        </div>


        <div class="row form-group">
            <div class="col-xs-6">
              <label><?php echo e(Theme::title('position')); ?></label>
              <?php $__errorArgs = ['postition'];
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

              <input type="text"  placeholder="<?php echo e(Theme::title('position')); ?>"
              class="form-control"  value="<?php echo e(old('position')); ?>"
              name="position" />
            </div>
            <div class="col-xs-6">
              <label><?php echo e(Theme::title('document')); ?></label>
              <input type="file"  placeholder="<?php echo e(Theme::title('document')); ?>"
              class="form-control" name="doc"  value="<?php echo e(old('doc')); ?>"/>
            </div>
        </div>

      </div>
    </div>

  </div>

  <div class="form-actions clearfix">

    <div class="buttons-group float-xs-right">
      <button type="reset" data-dismiss="modal" class="btn ">
                    <?php echo e(Theme::title('cancel')); ?>

      </button>
         <button type="submit" class="btn btn-primary mr-1"><?php echo e(Theme::title('add')); ?></button>
     </div>
  </div>

 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH D:\www\kp\resources\views/components/profile/exp/add.blade.php ENDPATH**/ ?>