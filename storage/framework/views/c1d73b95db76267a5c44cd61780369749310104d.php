<?php $attributes = $attributes->exceptProps([
'item',
'type' => 'user'
]); ?>
<?php foreach (array_filter(([
'item',
'type' => 'user'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$avatar = ($type=='user') ? asset('theme/images/avatar/user.png') : asset('theme/images/avatar/king.png');
?>


<div class="profile-card-with-cover text-xs-center">
  <div style="margin:auto;" class="card-profile-image width-100 mb-2">
    
    <div style="position:absolute;margin-top:-.2rem;width:120px" > 
    <p class="btn btn-info btn-sm round pull-right">
      <?php echo e($type); ?></p>
    </div>

    <img src="<?php echo e(($item->avatar) ? asset($item->avatar->src) : $avatar); ?>" loading='lazy' 
    class="width-100 height-100 rounded-circle img-border box-shadow-1">
  </div>
  <h2 class="text-bold-600">
    <?php echo e($item->name); ?>

  </h2>
</div><?php /**PATH D:\www\kp\resources\views/components/avatar.blade.php ENDPATH**/ ?>