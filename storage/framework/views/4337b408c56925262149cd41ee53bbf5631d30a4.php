<?php $attributes = $attributes->exceptProps([
'product' => new App\Models\Product,
]); ?>
<?php foreach (array_filter(([
'product' => new App\Models\Product,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$name = $product->pack == "standard" ? '' :$product->pack;
$price= $product->price;
$delivery = $product->delivery;
$revisions = $product->revisions;
$description = $product->description;
?>

<div class="card-block">
  <div class="row">
    <div class="col-md-4 form-group">


      <label class="font-medium-1"> <?php echo e(Theme::title('price')); ?> : </label>
      <div style="margin-left: 300%;" class="help">
        <?php echo e(__("This is $product->pack price.")); ?>

      </div>
      <?php $__errorArgs = [$name."_price"];
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

        <input type="number" value="<?php echo e($price); ?>" placeholder=">1.000.000" class="form-control" name='<?php echo e($name ? $name."_price" : "price"); ?>'>
        <span class="input-group-addon">
          đ
        </span>
      </div>
    </div>
    <div class="col-md-5 form-group">

      <label class="font-medium-1"> <?php echo e(Theme::title('delivery')); ?> : </label>
      <div style="margin-left: 160%;" class="help">
        <?php echo e(__("This is the expected progress.")); ?>

      </div>
      <?php $__errorArgs = [$name."_delivery"];
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

        <input type="number" placeholder="delivery" class="form-control" value="<?php echo e($delivery); ?>" name='<?php echo e($name ? $name."_delivery" : "delivery"); ?>'>
        <span class="input-group-btn">
          <select class="btn btn-info" name='<?php echo e($name ? $name."_duration" : "duration"); ?>'>
            <option value="days"> <?php echo e(__('days')); ?> </option>
            <option value="hours"> <?php echo e(__('hours')); ?> </option>
          </select>
        </span>
      </div>

    </div>
    <div class="col-md-3 form-group">


      <label class="font-medium-1"> <?php echo e(Theme::title('revisions')); ?> : </label>
      <div class="help fixed">
        <?php echo e(__("This is the number of edits.")); ?>

      </div>
      <?php $__errorArgs = [$name."_revisions"];
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

        <input type="number" class="form-control" value="<?php echo e($revisions); ?>" name='<?php echo e($name ? $name."_revisions" : "revisions"); ?>' />
        <span class="input-group-addon">
          <?php echo e(__('times')); ?>

        </span>
      </div>
    </div>

  </div>
  <div class="form-group">

    <label class="font-medium-1"> <?php echo e(Theme::title('description')); ?> : </label>
    <div style="margin-left: 105%;" class="help">
      <?php echo e(__("Service pack description.")); ?>

    </div>

    <?php $__errorArgs = [$name."_description"];
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
    <textarea rows="5" name='<?php echo e($name ? $name."_decription" : "description"); ?>' class="form-control"><?php echo e($description); ?></textarea>
  </div>


</div>
<?php /**PATH D:\www\kp\resources\views/components/product/pack.blade.php ENDPATH**/ ?>