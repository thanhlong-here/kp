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
        <?php echo e(__('Mã số')); ?>

      </th>
      <th>
        <?php echo e(__('Dịch vụ')); ?>

      </th>



      <th style="width:2rem">
        <?php echo e(__('Trạng thái')); ?>



      </th>
      <th style="width:2rem">
        <div class="pull-right">
          <?php echo e(__('Thao tác')); ?>

        </div>

      </th>

    </thead>
    <tbody>

      <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if(isset($row->item)): ?>
      <?php

      $service = $row->item->product;

      ?>
      <?php $__env->startPush('outer'); ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-deny-'.e($row->id).'']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-deny-'.e($row->id).'']); ?>
        <div class="modal-content">
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('orders.update',$row)).'','method' => 'PUT']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('orders.update',$row)).'','method' => 'PUT']); ?>


            <div class="modal-header">
              <h4 class="pull-left" id="myModalLabel2"><i class="fa fa-road2"></i>#<?php echo e($row->name); ?></h4>

              <div class="pull-right">
                <button type="submit" name="act" value="cancel" class="btn btn-primary"><?php echo e(__('Từ chối')); ?></button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><?php echo e(__('Quay lại')); ?></button>
              </div>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label> <?php echo e(Str::title(__('Lý do từ chối'))); ?></label>
                <textarea name="reason" class="form-control"><?php echo e(old('declined_reason')); ?></textarea>
              </div>
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
<?php endif; ?>


      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-accept-'.e($row->id).'']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-accept-'.e($row->id).'']); ?>
        <div class="modal-content">
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('orders.update',$row)).'','method' => 'post']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('orders.update',$row)).'','method' => 'post']); ?>

            <div class="modal-header">
              <h4 class="pull-left" id="myModalLabel2"><i class="fa fa-road2"></i>#<?php echo e($row->name); ?></h4>

              <div class="pull-right">
                <button type="submit" name="act" value="accept" class="btn btn-primary"><?php echo e(__('Chấp nhận')); ?></button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><?php echo e(__('Quay lại')); ?></button>
              </div>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label> <?php echo e(__('Tôi sẽ đảm bảo tiến độ của dự án!')); ?></label>

              </div>
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
<?php endif; ?>
      <?php $__env->stopPush(); ?>
      <tr>


        <td>
          <div class="font-medium-1 text-bold-600"><?php echo e($row->code); ?></div>
          <div><?php echo e(__('Lúc')); ?>: <?php echo e($row->created_at); ?></div>
        </td>

        <td>
          <p class="font-medium-1 text-bold-600"> <?php echo e($service->name); ?></p>
          <p><?php echo e(__('Gói dịch vụ')); ?> : <?php echo e($row->item->quantity); ?> x <span class="tag tag tag-pill tag-info"> <?php echo e($service->pack); ?></span> </p>
          <p><?php echo e(__('Đơn giá')); ?> : <span class="font-medium-1 text-bold-600"> <?php echo e($service->price_format); ?> </span> </p>
          <p><?php echo e(__('Thành tiền')); ?> : <span class="font-medium-1 text-bold-600"> <?php echo e(number_format($row->total)); ?> đ </span> </p>

        </td>
        <td>
          <?php switch($row->state):
          case ('ordered'): ?>
          <span class="tag tag tag-pill tag-info"><?php echo e(__('Vừa đặt hàng')); ?></span>
          <?php break; ?>
          <?php case ('paid'): ?>
          <span class="tag tag tag-pill tag-info "><?php echo e(__('Chờ xác nhận')); ?></span>
          <?php break; ?>
          <?php default: ?>
          <span class="tag tag tag-pill tag-info "><?php echo e(__($row->state)); ?></span>
          <?php break; ?>
          <?php endswitch; ?>


        </td>
        <td>
          <?php if($row->state == 'paid'): ?>

          <button data-toggle="modal" data-target="#modal-deny-<?php echo e($row->id); ?>" class="btn btn-sm btn-block mb-2"><i class="ft ft-x"></i> <?php echo e(__('Từ chối')); ?> </button>

          <button data-toggle="modal" data-target="#modal-accept-<?php echo e($row->id); ?>" class="btn btn-sm btn-primary btn-block "><i class="ft ft-zap"></i> <?php echo e(__('Nhận việc')); ?> </button>

          <?php endif; ?>
          <?php if($row->state == 'canceled'): ?>
          <button data-toggle="modal" data-target="#modal-reason-<?php echo e($row->id); ?>" class="btn btn-sm btn-info btn-block "> <?php echo e(__('Xem lý do')); ?> </button>
          <?php $__env->startPush('outer'); ?>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-reason-'.e($row->id).'']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-reason-'.e($row->id).'']); ?>
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="pull-left" id="myModalLabel2"><?php echo e(__('Lý do')); ?> :</h4>

                <div class="pull-right">
                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><?php echo e(__('Quay lại')); ?></button>
                </div>
              </div>
              <div class="modal-body">
                <div class="card-block">
                  <label> <?php echo e($row->reason); ?></label>

                </div>
              </div>
            </div>
           <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
          <?php $__env->stopPush(); ?>
          <?php endif; ?>
        </td>

      </tr>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>


  </table>

  <div class="pull-right">
    <?php echo e($list->render('vendor.pagination.simple')); ?>


  </div>
</div><?php /**PATH D:\www\kp\resources\views/components/order/table.blade.php ENDPATH**/ ?>