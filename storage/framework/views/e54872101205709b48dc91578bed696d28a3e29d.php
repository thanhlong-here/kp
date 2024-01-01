<?php
$rows = ['description','delivery','revision'];
$push = 'page.product.detail.push';
$tabs = [
'description',
'portfolio',
'price',
'recommendations',
'review'];
?>
<?php echo $__env->make($push,['active' => 'active'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__currentLoopData = $packs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make($push, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->startPush('script'); ?>
<script>
  $(window).scroll(function() {
    var stick = $('#stick_tab');
    if (window.pageYOffset > 240) {
      $('#stick_tab').removeClass("none");
    } else {
      $('#stick_tab').addClass("none");
    }
  });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.contact','data' => ['freelancer' => $freelancer]]); ?>
<?php $component->withName('modal.contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['freelancer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('sticky'); ?>
<div id="stick_tab" class="container-fluid none line-b">

  <div class="container">
    <ul id="overview" class="nav nav-tabs nav-underline no-hover-bg">
      <li class="nav-item">
        <a class="nav-link active" id="tab-overview" href="#overview">
          <?php echo e(Theme::title('overview')); ?>

        </a>
      </li>
      <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="nav-item">
        <a class="nav-link" id="<?php echo e($tab); ?>-tab" href="#<?php echo e($tab); ?>">
          <?php echo e(Theme::title($tab)); ?>

        </a>
      </li>
      <?php $__env->startPush('tab-content'); ?>
      <div class="card">
        <h4 class="card-title">
          <?php echo e(Theme::title($tab)); ?>

        </h4>
        <div class="card-block box">
          <?php echo $__env->make("page.product.detail.tab-$tab", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
      </div>
      <?php $__env->stopPush(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
</div>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.breadcrumb','data' => ['product' => $product]]); ?>
<?php $component->withName('product.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h2 class="card-title text-justify text-bold-400">
  <?php echo e($product->name); ?>

</h2>
<div class="card">

  <?php if($product->avatar): ?>
  <img loading="lazy" class="img-fluid" src="<?php echo e(url($product->avatar->src)); ?>" />
  <?php endif; ?>

</div>

<?php echo $__env->yieldPushContent('tab-content'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('side'); ?>
<div class="card ">
  <div class="card-body">
    <ul class="nav nav-tabs flex  nav-top-border no-hover-bg">
      <?php echo $__env->yieldPushContent("pack-header"); ?>
    </ul>
    <div class="tab-content px-1 pt-1 ">
      <?php echo $__env->yieldPushContent("pack-body"); ?>
    </div>

    <div class="row text-xs-center pt-1 pb-1">
      <a href='#price' class="text-success  text-bold-600 font-medium-2">
        <?php echo e(Theme::title('compare packages')); ?> </a>
    </div>
  </div>
  <div class="card-footer text-xs-center">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button.contact','data' => ['id' => ''.e($freelancer->id).'','class' => 'btn btn-block btn-secondary','out' => ''.e(Theme::title('contact consultant')).'']]); ?>
<?php $component->withName('button.contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => ''.e($freelancer->id).'','class' => 'btn btn-block btn-secondary','out' => ''.e(Theme::title('contact consultant')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.master','data' => ['side' => 'detail-right']]); ?>
<?php $component->withName('layout.master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['side' => 'detail-right']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/page/product/detail.blade.php ENDPATH**/ ?>