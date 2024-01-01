<?php $attributes = $attributes->exceptProps([
'col' => 3,
'query',
'total'=> 6,
'pagination' => true
]); ?>
<?php foreach (array_filter(([
'col' => 3,
'query',
'total'=> 6,
'pagination' => true
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$products = $pagination ? $query->paginate($total) : $query->get();
?>

<?php $__currentLoopData = $products->chunk($col); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row match-height mb-2">
  <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php
  $freelancer = $product->freelancer;
  $avatar = empty($freelancer->avatar) ? null : url($freelancer->avatar->src);
  $image = empty($product->avatar) ? null : url($product->avatar->src);
  $name = $product->name;
  $price = number_format($product->price).'đ';
  $url_edit = route('products.edit',$product);

  ?>
  <div class="col-md-<?php echo e(12/$col); ?>">
    <div class="box">
      <div class="card">
        <a href="<?php echo e(url($product->link->pretty)); ?>">
          <div class="box-image lazy" data-bg-img='<?php echo e($image); ?>'></div>
        </a>
        <div class="card-header">
          <div class="row mb-2">
            <div class="float-xs-left">
            <button onclick="modal_src('modal-src','<?php echo e($url_edit); ?>')"
             class="btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i></button>
            </div>
            <div class="float-xs-right">
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.star','data' => []]); ?>
<?php $component->withName('star'); ?>
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
} elseif ($_instance->childHasBeenRendered('ORccIWp')) {
    $componentId = $_instance->getRenderedChildComponentId('ORccIWp');
    $componentTag = $_instance->getRenderedChildComponentTagName('ORccIWp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ORccIWp');
} else {
    $response = \Livewire\Livewire::mount('auth.like', ['item' => $product,'count' => ''.e($product->likes->count()).'']);
    $html = $response->html();
    $_instance->logRenderedChild('ORccIWp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
          </div>
          <div class="float-xs-right ">
            <?php echo e(Theme::title('start at')); ?>

            <span class="font-medium-2 primary text-bold-600"> <?php echo e(Theme::title( $price)); ?> </span>
          </div>
        </div>
      </div>
    </div>

  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if($pagination): ?>
<div class="row float-xs-right">
  <?php echo e($products->render('vendor.pagination.simple')); ?>

</div>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/product/devlist.blade.php ENDPATH**/ ?>