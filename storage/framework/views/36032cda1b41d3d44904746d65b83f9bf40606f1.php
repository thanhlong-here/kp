<?php $attributes = $attributes->exceptProps(['product']); ?>
<?php foreach (array_filter((['product']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
    $freelancer = $product->freelancer;
    $avatar     = empty($freelancer->avatar) ? null : url($freelancer->avatar->src);
    $image      = empty($product->avatar) ? null :  url($product->avatar->src);
    $name       = $product->name;
    $price      = number_format($product->price).'đ';
    $star       = 5;
    $rate       = 76;
  
?>
<div class="box">
  <div class="card">
    <a href="<?php echo e(url($product->link->pretty)); ?>">
      <div class="box-image lazy" data-bg-img ='<?php echo e($image); ?>'></div>
    </a>
      <div class="card-header">
        <div class="row mb-2">
          <div class="float-xs-left">
            <a href="<?php echo e(url($freelancer->link->pretty)); ?>">
                <?php if(isset($avatar)): ?>
                <img loading="lazy" src="<?php echo e($avatar); ?>" class="rounded-circle img-border x32"  />
                <?php endif; ?>
                <?php echo e(Theme::title($freelancer->name)); ?>

              </a>
          </div>
          <div class="float-xs-right">
              <span class="yellow darken-1">  <i class="fa fa-star"></i> <?php echo e($star); ?> </span>
             
          </div>
        </div>
        <div class="row text-justify">
          <a href="<?php echo e(url($product->link->pretty)); ?>">
            <?php echo e(Str::title($product->name)); ?>

          </a>
        </div>
      </div>

  </div>

  <div class="card-footer">
    <div class="row">
      <div class="float-xs-left font-medium-2">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth.like', ['item' => $product,'count' => ''.e($product->likes->count()).''])->html();
} elseif ($_instance->childHasBeenRendered('71XTtUp')) {
    $componentId = $_instance->getRenderedChildComponentId('71XTtUp');
    $componentTag = $_instance->getRenderedChildComponentTagName('71XTtUp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('71XTtUp');
} else {
    $response = \Livewire\Livewire::mount('auth.like', ['item' => $product,'count' => ''.e($product->likes->count()).'']);
    $html = $response->html();
    $_instance->logRenderedChild('71XTtUp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
      </div>
      <div class="float-xs-right ">
        <?php echo e(__('Bắt đầu từ')); ?>

        <span class="font-medium-2 primary text-bold-600"> <?php echo e($price); ?> </span>
      </div>
    </div>
  </div>
</div>
<?php /**PATH D:\www\kp\resources\views/components/product/item.blade.php ENDPATH**/ ?>