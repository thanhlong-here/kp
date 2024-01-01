<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'section mb-3 pt-8 ']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'section mb-3 pt-8 ']); ?>
  <?php $__currentLoopData = $market; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="line-bot mb-1" data-toggle="modal" data-target="#type-<?php echo e($item->id); ?>">
    <div class="pull-left mr-2">
      <?php if($item->avatar): ?>
      <img loading="lazy" class="app-ico" src="<?php echo e(url($item->avatar->src)); ?>" />
      <?php endif; ?>
    </div>
    <div class="p-1">
      <h6><?php echo e($item->name); ?></h6>
      <p><?php echo e($item->description); ?></p>
    </div>

  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['class' => 'app-w line-bot card fixed  yt-0 text-xs-center']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'app-w line-bot card fixed  yt-0 text-xs-center']); ?>
  <div class="p-1">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app.open','data' => ['class' => 'form-group position-relative has-icon-left','route' => ''.e(route('app.search')).'']]); ?>
<?php $component->withName('app.open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form-group position-relative has-icon-left','route' => ''.e(route('app.search')).'']); ?>

      <label class="form-control round">
        <?php echo e(Theme::title('what are you looking for?')); ?>

      </label>
      <div class="form-control-position">
        <i class="ft-search  primary font-medium-4"></i>
      </div>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/app/tabs/search.blade.php ENDPATH**/ ?>