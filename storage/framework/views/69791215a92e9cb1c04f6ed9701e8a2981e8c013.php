<?php
  $pack            = $product->pack;
  $description     = $product->description;
  $name     = $product->name;
  $price    = $product->price;
  $delivery = $product->delivery * $this->quantity;
  $revision = $product->revision;
  $subtotal = $price * $quantity;
  $fee      = 0;
  $total    = $subtotal + $fee;

?>
<div class="content">
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('auth.order.quick',$product)).'','method' => 'POST']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('auth.order.quick',$product)).'','method' => 'POST']); ?>
  <div class="col-md-7">
    <div class="row mb-2">
      <div class="col-xs-4">
        <?php if(isset($product->avatar)): ?>
          <img class="img-fluid" loading="lazy" src="<?php echo e($product->avatar->src); ?>" />
        <?php endif; ?>
      </div>
      <div class="col-xs-5">
          <h4 class="mb-2 row"> <?php echo e($name); ?> </h4>
          <div class="row">
            <label  class="text-bold-600" >

              <?php echo e(Theme::title('price')); ?>  :
             </label>
             <?php echo e($product->price_format); ?>

         </div>

          <div class="row">
            <label  class="text-bold-600" >

              <?php echo e(Theme::title('delivery')); ?> :
             </label>
             <?php echo e($delivery. __('days')); ?>

         </div>
         <div class="row">
           <label  class="text-bold-600" >
             <?php echo e(Theme::title('revision')); ?> :
           </label>
            <?php echo e(__('times')); ?>

         </div>
      </div>
      <div class="col-xs-3">
        <fieldset>
  				<div class="input-group">
  					<span class="input-group-addon" id="basic-addon1"><?php echo e(__('qty')); ?></span>
            <input type="number" name="quantity"
                wire:change="cal"
                wire:model="quantity"
                class="form-control"
                value="<?php echo e($quantity); ?>" />
          </div>
  			</fieldset>
        <label class="font-medium-3 primary text-bold-600" >
          <?php echo e(number_format($subtotal)); ?>đ
        </label>
      </div>
      
    </div>
    <div class="card-content">
      <?php echo e($description); ?>

    </div>

  </div>
  <div class="col-md-5">
    <h2 class="text-bold-600"><?php echo e(Theme::title('sumary')); ?> </h2>
    <div class="card box">

      <div class="card-block">
        <div class="row mb-1">
          <label class="col-xs-6"><?php echo e(Theme::title('subtotal')); ?> :</label>
          <div class="col-xs-6">
          <span class="font-medium-2 primary text-bold-600 float-xs-right" >
            <?php echo e(number_format($subtotal)); ?>đ
          </span>
        </div>
        </div>
        <div class="row">
          <label class="col-xs-6"><?php echo e(Theme::title('service fee')); ?> :</label>
          <div class="col-xs-6 ">
          <span class="font-medium-2 primary text-bold-600  float-xs-right" >
            <?php echo e($fee); ?>

          </span>
        </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row mb-1">
          <label class="col-xs-6  text-bold-600"><?php echo e(Theme::title('Total')); ?> :</label>
          <div class="col-xs-6">
            <span class="font-medium-2 primary text-bold-600  float-xs-right" >
                <?php echo e(number_format($total)); ?>đ
            </span>
        </div>
        </div>
        <div class="row mb-1">
          <label class=" col-xs-6 text-bold-600" >
            <i class="icon-calendar"></i>
               <?php echo e(Theme::title('delivery')); ?> :
           </label>
           <div class="col-xs-6 ">
             <span class="font-medium-2 text-bold-600  float-xs-right" >
              <?php echo e($delivery); ?> <?php echo e(__('days')); ?>

            </span>
           </div>
        </div>
       
          <input type="hidden" name="total" value="<?php echo e($total); ?>" />
          <button class="btn btn-primary btn-block" type='submit'>
            <?php echo e(Theme::title('continue to checkout')); ?>

          </button>

      
      </div>


    </div>
  </div>
   <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div>
<?php /**PATH D:\www\kp\resources\views/livewire/cart/custom.blade.php ENDPATH**/ ?>