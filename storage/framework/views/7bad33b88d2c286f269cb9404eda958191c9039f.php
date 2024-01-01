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

<?php 
  $cities = \App\Models\City::get();
?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('auth.profile.update',$freelancer)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('auth.profile.update',$freelancer)).'']); ?>
  <input type="hidden" name="status" value="registed" />
  <div class="modal-body">
    <div class="form-group row">
      <div class="col-xs-6">

        <label><?php echo e(Str::title(__('contact phone'))); ?></label>
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
        <input type="number" required value="<?php echo e($freelancer->work_phone); ?>" placeholder="<?php echo e(Str::title(__('contact phone'))); ?>" class="form-control" value="<?php echo e($freelancer->work_phone); ?>" name="work_phone" id="work_phone" />

      </div>
      <div class="col-xs-6">
        <label><?php echo e(Str::title(__('contact email'))); ?></label>
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
        <input type="email" required placeholder="<?php echo e(Str::title(__('contact email'))); ?>"
         class="form-control" value="<?php echo e($freelancer->user->email); ?>" name="work_email" id="work_email" />

      </div>

    </div>

    <div class="form-group row">
      <div class="col-xs-8">
        <label> <?php echo e(Theme::title('address')); ?> </label>
        <input type="text" class="form-control" name="work_address" value="<?php echo e($freelancer->work_address); ?>" />
      </div>
      <div class="col-xs-4">
        <label> <?php echo e(Theme::title('area')); ?> </label>
        <select name="city_id" class="form-control">
          <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option <?php echo e($city->postcode == '700000' ? 'selected' : ''); ?> value="<?php echo e($city->id); ?>" ><?php echo e($city->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-6">
        <label> <?php echo e(Theme::title('job')); ?> </label>
        <input class="form-control" name="job" />
      </div>
      <div class="col-xs-6">
        <label> <?php echo e(Theme::title('tax code')); ?> </label>
        <input type="text" required placeholder="<?php echo e(Str::title(__('tax code'))); ?>" value="<?php echo e($freelancer->tax_code); ?>" class="form-control" name="tax_code" />
      </div>
    </div>

    <div class="form-group">
      <label>
        <?php echo e(__('Are you a business?')); ?>

        <input type="checkbox" value="1" <?php echo e($freelancer->is_company ? 'checked' : ''); ?> name="is_company" />
      </label>

    </div>



    <div class="form-actions clearfix">
      <div class="pull-left">

       <?php echo e(__('This information will not be displayed on the profile')); ?>

      </div>
      <div class="buttons-group float-xs-right">
        <button type="reset" data-dismiss="modal" class="btn ">
          <?php echo e(Theme::title('cancel')); ?>

        </button>
        <button type="submit" class="btn btn-primary mr-1"><?php echo e(Theme::title('save')); ?></button>
      </div>
    </div>
  </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/profile/register.blade.php ENDPATH**/ ?>