<?php $attributes = $attributes->exceptProps(['freelancer']); ?>
<?php foreach (array_filter((['freelancer']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="p-2 profile-card-with-cover text-xs-center">
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.avatar','data' => ['item' => $freelancer,'type' => 'freelancer']]); ?>
<?php $component->withName('avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer),'type' => 'freelancer']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  <a class=" btn btn-primary btn-block " href="<?php echo e(route('auth.favorites',$freelancer->user)); ?>">
    <i class="fa fa-exchange"></i>
    <span class="text-bold-600 "> <?php echo e(__('Người dùng')); ?> </span> </span>
  </a>
</div>

<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
  <li class="nav-item">


  </li>
  <li class="nav-item ">
    <a href="#">
      <i class="icon-home"></i> <span class="menu-title"><?php echo e(__('Dashboard')); ?></span>
    </a>
  </li>
  <li class="nav-item ">
    <a href="<?php echo e(route('freelancers.products.index',$freelancer)); ?>">
      <i class="icon-social-dropbox"></i> <span class="menu-title"><?php echo e(__('Dịch vụ của tôi')); ?></span>
    </a>
  </li>
  <li class="nav-item sub-order has-sub">
    <a href="<?php echo e(route('dev.index')); ?>">
      <i class="icon-bar-chart"></i>
      <span class="menu-title"><?php echo e(__('Quản lý bán hàng')); ?></span>
    </a>
    <ul class="menu-content">
      <li class="nav-item">
        <a href="<?php echo e(route('freelancers.orders.index',[$freelancer,'open'=>'order'])); ?>">
          <span class="menu-title"><?php echo e(__('Tất cả đơn hàng')); ?></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('freelancers.orders.index',[$freelancer,'state'=>'request' ,'open' => 'order'])); ?>" class="nav-link">
          <span class="menu-title"><?php echo e(__('Chờ điền yêu cầu')); ?> </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('freelancers.orders.index',[$freelancer,'state'=>'paid','open'=>'order'])); ?>">
          <span class="menu-title"><?php echo e(__('Chờ xác nhận')); ?></span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('freelancers.orders.index',[$freelancer,'state'=>'proccess','open'=>'order'])); ?>">
          <span class="menu-title"><?php echo e(__('Đang thực hiện')); ?></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('freelancers.orders.index',[$freelancer,'state'=>'review','open'=>'order'])); ?>">
          <span class="menu-title"><?php echo e(__('Đã gửi')); ?></span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('freelancers.orders.index',[$freelancer,'state'=>'edit','open'=>'order'])); ?>">
          <span class="menu-title"><?php echo e(__('Cần chỉnh sửa')); ?></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('freelancers.orders.index',[$freelancer,'state'=>'finish','open'=>'order'])); ?>">
          <span class="menu-title"><?php echo e(__('Hoàn thành')); ?></span>
        </a>
      </li>
     

      <li class="nav-item">
        <a href="<?php echo e(route('freelancers.orders.index',[$freelancer,'state'=>'canceled','open'=>'order'])); ?>">
          <span class="menu-title"><?php echo e(__('Đã hủy')); ?></span>
        </a>
      </li>


    </ul>

  </li>

</ul><?php /**PATH D:\www\kp\resources\views/components/menu/dev/freelancer.blade.php ENDPATH**/ ?>