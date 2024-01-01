<?php
$search = (new App\Classes\Search('order'))->get();

$name = empty($search->name) ? '' : $search->name;
$status = empty($search->status) ? '' : $search->status;
?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['name' => 'search','action' => ''.e(route('search.find','client.order')).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'search','action' => ''.e(route('search.find','client.order')).'']); ?>
  <div class="col-xs-4">
    <div class="form-group">

      <input type="text" value="<?php echo e($name); ?>" name="product_name" placeholder="<?php echo e(__('Tên dịch vụ')); ?>" class="form-control">

    </div>
  </div>


  <div class="col-xs-3">
    <div class="form-group">



      <div class='input-group'>
        <input type='text' name="datetodate" placeholder="<?php echo e(__('Từ ngày tới ngày')); ?>" class="form-control daterange" />
        <span class="input-group-addon">
          <span class="fa fa-calendar"></span>
        </span>
      </div>
    </div>
  </div>
  


  <div class="col-xs-2">
    <button class="btn btn-block btn-primary"> <?php echo e(__('Tìm kiếm')); ?></button>
  </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (! $__env->hasRenderedOnce('d2796adf-bb1b-457a-ba1c-5d096d5df59f')): $__env->markAsRenderedOnce('d2796adf-bb1b-457a-ba1c-5d096d5df59f'); ?>
<?php $__env->startPush('script'); ?>
<script>
  (function(window, document, $) {
      $('.daterange').daterangepicker();
    }
  )(window, document, jQuery);
</script>
<?php $__env->stopPush(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/order/search.blade.php ENDPATH**/ ?>