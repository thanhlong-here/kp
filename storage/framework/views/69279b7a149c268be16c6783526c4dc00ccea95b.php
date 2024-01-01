<!DOCTYPE html>
<html class="loading" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php echo $__env->yieldPushContent('meta'); ?>
  <link rel="shortcut icon" type="image/jpg" href="<?php echo e(asset('theme/images/logo/ico.png')); ?>" />
  <link rel="icon" type="image/jpg" href="<?php echo e(asset('theme/images/logo/ico.png')); ?>" />

  <title><?php echo $__env->yieldContent('page-title', 'KingPang'); ?></title>
  <?php echo \Livewire\Livewire::styles(); ?>

  <link href="<?php echo e(asset('theme/css/app.css')); ?>?t=<?php echo e(time()); ?>" rel="stylesheet">
  <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body <?php echo e($attributes); ?>>
  <?php echo $__env->yieldContent('header'); ?>
  <?php echo $__env->yieldContent('body'); ?>
  <?php echo $__env->yieldContent('footer'); ?>
  <?php echo $__env->yieldPushContent('outer'); ?>
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
  <script src="<?php echo e(asset('theme/js/summernote/summernote.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/extensions/toastr.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/pickers/dateTime/moment-with-locales.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/pickers/dateTime/bootstrap-datetimepicker.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/pickers/pickadate/picker.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/pickers/pickadate/picker.date.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/pickers/pickadate/picker.time.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/forms/select/select2.full.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/app-menu.min.js')); ?>"></script>
  <script src="<?php echo e(asset('theme/js/app.js')); ?>"></script>

  
  <?php echo \Livewire\Livewire::scripts(); ?>

  <?php echo $__env->yieldPushContent('script'); ?>
  <?php echo e(Theme::toastr()); ?>

</body>

</html><?php /**PATH D:\www\kp\resources\views/components/layout/simple.blade.php ENDPATH**/ ?>