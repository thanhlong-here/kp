<?php $attributes = $attributes->exceptProps([
'product'
]); ?>
<?php foreach (array_filter(([
'product'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$publish = true;
//dd($product->finishProgess())
?>


<div style="padding-top: 8rem;" class="container form-body">
  <div class="container fixed">
    <div class="col-xs-2 ">
      <ul class="nav nav-bar text-xs-right mr-2">
        <?php $__currentLoopData = $product->finishProgess(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab => $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php
        if(!$state) $publish = $state;

        if(request('tab') == $tab){
        $class = 'btn-primary';
        }else{
        $class = $state ? 'btn-success' : 'btn-info';
        }
        ?>
        <li class="nav-item mb-1">


          <a href="<?php echo e(Theme::url(['tab'=>$tab ])); ?>" class="nav-link">
            <?php echo e(Theme::title($tab)); ?> <span class="btn <?php echo e($class); ?> btn-secondary btn-sm ml-1"><?php echo e($loop->index + 1); ?> </span> </a>

        </li>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <li class="nav-item">
          <?php if($publish): ?>
          <a class="nav-link" href="<?php echo e(Theme::url(['tab'=>'publish' ])); ?>"> <?php echo e(Theme::title('publish')); ?>

            <span class="btn <?php echo e(request('tab') == 'publish' ? 'btn-primary' :'btn-info'); ?>  btn-sm ml-1"> 6 </span> </a>
          <?php else: ?>
          <a class="nav-link"> <?php echo e(Theme::title('publish')); ?>

            <span class="btn btn-secondary  btn-sm ml-1"> 6 </span> </a>
          <?php endif; ?>
        </li>

      </ul>

    </div>
  </div>
  <div class="offset-xs-2 col-xs-6 ">
  <?php switch(request('tab')):
      case ('pricing'): ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.edit.pricing','data' => ['product' => $product]]); ?>
<?php $component->withName('product.edit.pricing'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      <?php break; ?>
      <?php case ('description'): ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.edit.description','data' => ['product' => $product]]); ?>
<?php $component->withName('product.edit.description'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      <?php break; ?>
      <?php case ('requirement'): ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.edit.requirement','data' => ['product' => $product]]); ?>
<?php $component->withName('product.edit.requirement'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      <?php break; ?>
      <?php case ('gallery'): ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.edit.gallery','data' => ['product' => $product]]); ?>
<?php $component->withName('product.edit.gallery'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      <?php break; ?>
      <?php case ('publish'): ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.edit.publish','data' => ['product' => $product]]); ?>
<?php $component->withName('product.edit.publish'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      <?php break; ?>
      <?php default: ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.edit.overview','data' => ['product' => $product]]); ?>
<?php $component->withName('product.edit.overview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <?php endswitch; ?>
  </div>



</div>

<div style="top:0" class="fixed block ">
  <div class="row bg-white line-b p-1">
    <div class="col-md-6">
      <h2 class="content-title">
        <?php echo e($product->name); ?>

      </h2>
    </div>
    <div class="col-md-6">
      <div class="pull-right">

        <button type="button" class="btn btn-info" onclick="parent.location.reload();">
          <span aria-hidden="true"> X </span>
        </button>
      </div>
    </div>
  </div>
</div><?php /**PATH D:\www\kp\resources\views/components/product/edit.blade.php ENDPATH**/ ?>