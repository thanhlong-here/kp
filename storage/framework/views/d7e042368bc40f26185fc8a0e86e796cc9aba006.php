<?php
  $bank  =  'technological and commercial joint- stock bank - techcombank';
  $acc   =  'CÔNG TY TNHH MTV LATH GROUP LATH GROUP COMPANY LIMITED';
  $num   =  '19036801918021 (VNĐ)';
  $swift =  'VTCBVNVX';
?>
<div class="card box">
  <h2 class="card-header">
    <?php echo e(Theme::title('payment options')); ?>

  </h2>

  <div class="card-body">
    <div class="card-block">
      <div class="font-medium-2 ">
         <?php echo e(Theme::title('transfer')); ?> :

        <?php echo e(Theme::title($bank)); ?>

      </div>
      <div>
        Swift code:<span class="font-medium-2 text-bold-600"> <?php echo e($swift); ?></span>
      </div>
    </div>

    <div class="card-block">
      <h4 class="font-medium-2 text-bold-600">
        <?php echo e($acc); ?>

      </h4>
      <div>

        <label> <?php echo e(Theme::title('number account')); ?> :</label>

        <span class="font-medium-2  text-bold-600"><?php echo e($num); ?> </span>
      </div>
    </div>
    <div class="card-footer">
      <label class="font-medium-3">
        <?php echo e(__('Please use the content below. KingPang confirms payment with this content')); ?>

      </label>
      <input type="text" disabled
      class="bg-white form-control text-xs-center font-large-1 primary"
      value="PAY<?php echo e($order->id); ?>" />

    </div>
  </div>
</div>
<?php /**PATH D:\www\kp\resources\views/auth/order/confirm/options.blade.php ENDPATH**/ ?>