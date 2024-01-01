<?php
$srcSlide = asset('theme/images/app/slider/1.png');

$tabs ['home'] = [ 'icon'=>'ft ft-home', 'title' => Theme::title('home') ];
$tabs ['inbox'] = [ 'icon'=>'ft ft-inbox', 'title' => Theme::title('inbox')];
$tabs ['search'] = [ 'icon'=>'ft ft-search', 'title' => Theme::title('search') ];
$tabs ['notify'] = [ 'icon'=>'ft ft-bell', 'title' => Theme::title('notify') ];
$tabs ['account'] = [ 'icon'=>'ft ft-user', 'title' => Theme::title('account')];

$market = App\Models\Category::root()->wherePrefix('service')->OrderBy('priority','desc')->get();

?>
<?php $__env->startPush('css'); ?>
<style>
  .slide,
  .market {
    margin-top: 6rem;
  }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('outer'); ?>
<?php $__currentLoopData = $market; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'w-100 h-100 m-0','id' => 'type-'.e($item->id).'','tabindex' => '-1','role' => 'dialog']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-100 h-100 m-0','id' => 'type-'.e($item->id).'','tabindex' => '-1','role' => 'dialog']); ?>
  <div class="app-w">

    <?php echo $__env->make('app.tabs.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="tab-content pb-tab">

  <div role="tabpanel" class="tab-pane app-w active" id="home" aria-expanded="true">
    <?php echo $__env->make('app.tabs.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>

  <div role="tabpanel" class="tab-pane app-w" id="notify" aria-expanded="true">
    <?php echo $__env->make('app.tabs.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <div role="tabpanel" class="tab-pane app-w" id="search" aria-expanded="true">
    <?php echo $__env->make('app.tabs.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>


  <div role="tabpanel" class="tab-pane app-w" id="inbox" aria-expanded="true">
    <?php echo $__env->make('app.tabs.inbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>

  <div role="tabpanel" class="tab-pane app-w" id="account" aria-expanded="true">
    <?php echo $__env->make('app.tabs.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>


</div>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'line-top app-w bg-white fixed yb-0']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'line-top app-w bg-white fixed yb-0']); ?>

  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app.nav','data' => ['tabs' => $tabs]]); ?>
<?php $component->withName('app.nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['tabs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tabs)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.mobile','data' => []]); ?>
<?php $component->withName('layout.mobile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/app/main.blade.php ENDPATH**/ ?>