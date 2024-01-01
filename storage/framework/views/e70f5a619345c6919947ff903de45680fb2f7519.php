<!DOCTYPE html>
<html class="loading" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <link rel="KingPang" type="image/jpg" href="<?php echo e(asset('theme/images/logo/ico.jpg')); ?>" />
  <title><?php echo $__env->yieldContent('page-title', 'KingPang'); ?></title>
  <?php echo \Livewire\Livewire::styles(); ?>

  <link href="<?php echo e(asset('theme/css/app.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('theme/css/mobile.css')); ?>" rel="stylesheet">

  <style>
    .app-w {
      width: 420px;
    }
    .bot-0{
      position: absolute;
      bottom: 0;
    }
  </style>
  <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body>
  <div id="app-body" class="app-w">
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <?php echo $__env->yieldPushContent('outer'); ?>

  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'ml-0 bot-0','id' => 'modal-login']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'ml-0 bot-0','id' => 'modal-login']); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app.login','data' => []]); ?>
<?php $component->withName('app.login'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
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
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'w-100 h-100 m-0','id' => 'modal-src']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-100 h-100 m-0','id' => 'modal-src']); ?>

   <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  <?php echo \Livewire\Livewire::scripts(); ?>

  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.script','data' => []]); ?>
<?php $component->withName('script'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  <script>
    $happ = $(window).height();
    $wapp = $(window).width();
    $('.app-h').height($happ);
  </script>
  <script src="<?php echo e(asset('theme/js/extensions/toastr.min.js')); ?>"></script>

  <script src="<?php echo e(asset('theme/js/pickers/dateTime/moment-with-locales.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/pickers/dateTime/bootstrap-datetimepicker.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/app-menu.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/app.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/theme.js')); ?>"></script>


  <?php echo e(Theme::toastr()); ?>


  <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html><?php /**PATH D:\www\kp\resources\views/components/layout/mobile.blade.php ENDPATH**/ ?>