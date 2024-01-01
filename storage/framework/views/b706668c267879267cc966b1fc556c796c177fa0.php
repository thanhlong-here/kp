<?php $__env->startSection('title'); ?>
<div class="content-header-title mb-2">
  <h2>
    <?php echo e(Theme::title('order')); ?>

  </h2>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-body">
  <div class="card">
    <div class="card-block">
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.order.authtable','data' => ['query' => $query]]); ?>
<?php $component->withName('order.authtable'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['query' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($query)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>
  </div>

  <div class="card">

    <h2><?php echo e(Theme::title('note')); ?> : </h2>
    <blockquote class="border-left-amber border-left-3 mt-1">
      <ul>
        <li>
          Hóa đơn thuế do trực tiếp Freelancer cung cấp dịch vụ phát hành.
        </li>
        <li>
          Có thể yêu cầu nhận hóa đơn thuế từ những Freelancer là doanh nghiệp đã có giấy phép kinh doanh
        </li>
        <li>
          Các khoản giảm giá được khấu trừ không thể xuất hóa đơn thuế
        </li>
        <li>
          Phiếu xác nhận thanh toán phát hành nhằm mục đích chứng minh giao dịch hoàn tất, không có giá trị khi quyết toán thuế nhà nước
        </li>
      </ul>
    </blockquote>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.auth','data' => ['user' => $user]]); ?>
<?php $component->withName('layout.auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/auth/order.blade.php ENDPATH**/ ?>