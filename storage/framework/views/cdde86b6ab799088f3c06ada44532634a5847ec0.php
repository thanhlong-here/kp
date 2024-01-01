<?php $attributes = $attributes->exceptProps([
    'edu',
  ]); ?>
<?php foreach (array_filter(([
    'edu',
  ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('edus.update',$edu)).'','enctype' => 'multipart/form-data','method' => 'PUT']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('edus.update',$edu)).'','enctype' => 'multipart/form-data','method' => 'PUT']); ?>
  

    <div class="form-body">
      <div class="card-body">
        <div class="card-block">

          <div class="row form-group">
              <div class="col-xs-8">
                <label><?php echo e(Theme::title('school name')); ?></label>
                <?php $__errorArgs = ['school'];
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
                <input type="text"  placeholder="<?php echo e(Str::title(__('school name'))); ?>"
                class="form-control"  value="<?php echo e($edu->school); ?>"
                name="school" />
              </div>
              <div class="col-xs-4">
                <label><?php echo e(Theme::title('state')); ?></label>
                  <select name="state"  class="form-control">

                    <?php $__currentLoopData = config('dev.state_edu'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($state); ?>">  <?php echo e(Theme::title($state)); ?> </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
              </div>
          </div>

          <div class="row form-group">
              <div class="col-xs-6">
                <label><?php echo e(Theme::title('major')); ?></label>
                <?php $__errorArgs = ['majors'];
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
                <input type="text"
                class="form-control"  value="<?php echo e($edu->major); ?>"
                name="major" />
              </div>
              <div class="col-xs-6">
                <label><?php echo e(Theme::title('document')); ?></label>
                <input type="file"
                class="form-control" name="doc"/>
              </div>
          </div>

        </div>
      </div>

    </div>

  <div class="form-actions clearfix">

    <div class="buttons-group float-xs-right">
      <button type="reset" data-dismiss="modal"
      class="btn ">
                    <?php echo e(__('Cancel')); ?>

      </button>
         <button type="submit" class="btn btn-primary mr-1"><?php echo e(__('Save')); ?></button>
     </div>
  </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH D:\www\kp\resources\views/components/profile/edu/edit.blade.php ENDPATH**/ ?>