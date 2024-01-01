

<div class="section mb-3 pt-4">
  <div class="text-xs-center p-1 ">
    <?php if($item->avatar): ?>
    <img src="<?php echo e(asset($item->avatar->src)); ?>" loading="lazy" class="card-img-top img-fluid">
    <?php endif; ?>
  </div>

  <?php $__currentLoopData = $item->childs()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app.open','data' => ['class' => 'p-1 tab-row line-bot','route' => ''.e(route('app.category',$category)).'']]); ?>
<?php $component->withName('app.open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'p-1 tab-row line-bot','route' => ''.e(route('app.category',$category)).'']); ?>

    <h6><?php echo e($category->name); ?></h6>
    <p><?php echo e($category->description); ?></p>

   <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<div class="app-w card p-1 line-bot fixed yt-0 text-xs-center">
  <div class="flex">
    <div class="flex-1 " data-dismiss="modal">
      <i class="ft-arrow-left  pull-left  primary font-medium-4"></i>
    </div>
    <div class="flex-1">
      <h4 class="text-bold-600 text-xs-center">
        <?php echo e($item->name); ?>

      </h4>

    </div>
   
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app.open','data' => ['class' => 'flex-1','route' => ''.e(route('app.search')).'']]); ?>
<?php $component->withName('app.open'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'flex-1','route' => ''.e(route('app.search')).'']); ?>
      <i class="ft-search pull-right  primary font-medium-4"></i>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  
  </div>
</div><?php /**PATH D:\www\kp\resources\views/app/tabs/category.blade.php ENDPATH**/ ?>