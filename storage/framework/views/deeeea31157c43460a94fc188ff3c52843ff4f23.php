<?php $attributes = $attributes->exceptProps([
'query',
'total' => 12,
]); ?>
<?php foreach (array_filter(([
'query',
'total' => 12,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$list = $query->paginate($total);

?>

<div class="mb-2">
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.order.search','data' => []]); ?>
<?php $component->withName('order.search'); ?>
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

<div id="table" class="table-responsive">

  <table class="table">
    <thead>

      <th style="width:8rem">
        <?php echo e(Theme::title('code')); ?>

      </th>
      <th style="width:26rem">
        <?php echo e(Theme::title('service')); ?>

      </th>

      <th style="width:8rem">
        <?php echo e(Theme::title('price')); ?>

      </th>
      <th>
        <?php echo e(Theme::title('qty')); ?>

      </th>
      <th>
        <span class="pull-right">

        </span>
      </th>
      <th style="width:2rem">



      </th>

    </thead>
    <tbody>

      <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if(isset($row->item)): ?>
      <?php

      $service = $row->item->product;
    
      ?>
      
      <tr>


        <td>
          <div class="font-medium-1 text-bold-600"><?php echo e($row->code); ?></div>
          <div><?php echo e(Theme::title('at')); ?>: <?php echo e($row->created_at); ?></div>
        </td>

        <td>

          <span class="tag tag tag-pill tag-info"> <?php echo e($service->pack); ?></span>
          <div class="font-medium-1 text-bold-600"> <?php echo e($service->name); ?></div>
        </td>

        <td style="width:4rem">
          <div class="font-medium-1 text-bold-600">
            <?php echo e($service->price_format); ?>

          </div>
        </td>
        <td class="font-medium-1 text-bold-600">
          x <?php echo e($row->item->quantity); ?>

        </td>
        <td>
          <div class="font-medium-1 text-bold-600 pull-right"> <?php echo e(number_format($row->total)); ?> đ </div>
        </td>
        <td>
          <span class="tag tag tag-pill tag-info "><?php echo e(__($row->state)); ?></span>
        </td>
      </tr>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>


  </table>

  <div class="pull-right">
    <?php echo e($list->render('vendor.pagination.simple')); ?>


  </div>
</div><?php /**PATH D:\www\kp\resources\views/components/order/authtable.blade.php ENDPATH**/ ?>