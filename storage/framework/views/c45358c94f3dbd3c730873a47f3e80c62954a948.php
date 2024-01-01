<div class="card">
  <div class="card-header">
    <label class="font-medium-2">
        <input type="checkbox" id="has_invoice" name="has_invoice" onclick="invoice()"  value="1">
          <?php echo e(Theme::title('attach invoice')); ?>

           <span class="warning">( <?php echo e(__('issued by Freelancer')); ?> ) </span>
    </label>
  </div>
  <div class="card-block has_invoice none" >

    <div class="card-body edit_invoice  none">
      <div class="row mb-1">

        <div class="col-xs-4">
            <label class="font-medium-1 text-bold-400"><?php echo e(Theme::title(__('company name'))); ?> : </label>
        </div>
        <div class="col-xs-8">
          <input name="invoice_name" class="form-control"  />
        </div>

      </div>

      <div class="row mb-1">
        <div class="col-xs-4">
            <label class="font-medium-1 text-bold-400"  ><?php echo e(Theme::title(__('tax code'))); ?> :  </label>
        </div>
        <div class="col-xs-8">
          <input name="invoice_tax" class="form-control"  />
        </div>
      </div>

      <div class="row mb-1">
        <div class="col-xs-4">
            <label  class="font-medium-1 text-bold-400" > <?php echo e(Theme::title(__('tel'))); ?> :  </label>
        </div>
        <div class="col-xs-8">
          <input name="invoice_phone" class="form-control"  />
        </div>
      </div>
      <div class="row mb-1">
        <div class="col-xs-4">
            <label  class="font-medium-1 text-bold-400" ><?php echo e(Theme::title(__('address'))); ?>:  </label>
        </div>
        <div class="col-xs-8">
            <input name="invoice_address" class="form-control"  />
        </div>
      </div>
    </div>
    <label class="font-medium-1" >
      <input type="checkbox"  name="edit_invoice" onclick="edit()" checked  value="1">
        <?php echo e(__('Invoice information is the same as purchase information')); ?>

         <span class="text-bold-600"><?php echo e(__('- OR edit')); ?> </span>
    </label>
  </div>



</div>
<?php /**PATH D:\www\kp\resources\views/auth/order/confirm/invoice.blade.php ENDPATH**/ ?>