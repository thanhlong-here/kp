<?php $__env->startPush('table-pack-header'); ?>
  <th>
    <h2 class="primary"><?php echo e($product->price_format); ?></h2>
    <h4 class="card-title"><?php echo e(Theme::title($product->pack)); ?></h4>

  </th>
<?php $__env->stopPush(); ?>

<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->startPush('table-pack-row-'.$row); ?>
      <td style="max-width:8rem"><?php echo e($product->$row); ?></td>
    <?php $__env->stopPush(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->startPush('table-pack-footer'); ?>
    <td>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button.cart','data' => ['class' => 'btn btn-primary btn-block','id' => ''.e($product->id).'','out' => ''.e(Theme::title('select')).'']]); ?>
<?php $component->withName('button.cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'btn btn-primary btn-block','id' => ''.e($product->id).'','out' => ''.e(Theme::title('select')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </td>
<?php $__env->stopPush(); ?>


<?php $__env->startPush("pack-header"); ?>
  <li class="nav-item flex-1">
    <a class="nav-link <?php echo e($active ?? ''); ?>"
    id="tab-<?php echo e($product->pack); ?>" data-toggle="tab"
    href="#<?php echo e($product->pack); ?>" aria-expanded="false">
      <span class="font-medium-2">
       <?php echo e(Theme::title($product->pack)); ?>

     </span>

    </a>
  </li>
<?php $__env->stopPush(); ?>

<?php $__env->startPush("pack-body"); ?>
<div role="tab-<?php echo e($product->pack); ?>" class="tab-pane <?php echo e($active ?? ''); ?>" id="<?php echo e($product->pack); ?>" aria-expanded="true" >
  <div class="card-title text-xs-center font-large-1 text-bold-700">

        <?php echo e($product->price_format); ?>


  </div>
  <div  class="card-content mb-2">
   <?php echo $product->description; ?>

  </div>

  <div class="row font-medium-1">
    <label class="col-md-6">
     <i class='icon-calendar mr-1'></i>
     <?php echo e(Theme::title('delivery')); ?>

   </label>
    <?php echo e($product->delivery_format); ?>


  </div>
  <div class="row font-medium-1 mb-2">

      <label class="col-md-6">
        <i class='icon-wrench mr-1'></i>
       <?php echo e(Theme::title('revisions')); ?>

     </label>

    <?php echo e($product->revisions_format); ?>

  </div>
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button.cart','data' => ['id' => ''.e($product->id).'','class' => 'btn btn-primary btn-block','out' => ''.e(Theme::title('continue')).'']]); ?>
<?php $component->withName('button.cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => ''.e($product->id).'','class' => 'btn btn-primary btn-block','out' => ''.e(Theme::title('continue')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('outer'); ?>
 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.cart','data' => ['product' => $product]]); ?>
<?php $component->withName('modal.cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php $__env->stopPush(); ?>
<?php /**PATH D:\www\kp\resources\views/page/product/detail/push.blade.php ENDPATH**/ ?>