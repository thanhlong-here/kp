<?php $attributes = $attributes->exceptProps(['user']); ?>
<?php foreach (array_filter((['user']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$route  = $user->freelancer ? route('freelancers.products.index',$user->freelancer) : route('king');
?>
<div class="p-2 ">
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.avatar','data' => ['item' => $user]]); ?>
<?php $component->withName('avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  <a class=" btn btn-primary btn-block " href="<?php echo e($route); ?>">
      <i class="fa fa-exchange"></i>
      <span class="text-bold-600 "> <?php echo e(__('Freelancer')); ?> </span> </span>
    </a>
</div>

<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

  <li class="nav-item has-sub sub-order has-sub">

    <a href="#">
      <i class="icon-bag"></i>
      <span class="menu-title"><?php echo e(__('Quản lý đơn hàng')); ?> </span>
    </a>


    <ul class="menu-content">
      <li class="nav-item">
        <a href="<?php echo e(route('auth.orders',['user' => $user ,'open' => 'ordered'])); ?>" class="nav-link">
          <span class="menu-title"><?php echo e(__('Xem tất cả')); ?> </span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('auth.orders',['user' => $user,'state'=>'request' ,'open' => 'order'])); ?>" class="nav-link">

          <span class="menu-title"><?php echo e(__('Chờ điền yêu cầu')); ?> </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('auth.orders',['user' => $user,'state'=>'process' ,'open' => 'order'])); ?>" class="nav-link">

          <span class="menu-title"><?php echo e(__('Đang thực hiện')); ?> </span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('auth.orders', ['user' => $user,'state'=>'review' ,'open' => 'order'])); ?>" class="nav-link">
          <span class="menu-title"><?php echo e(__('Đã gửi')); ?> </span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('auth.orders',['user' => $user,'state'=>'edit' ,'open' => 'order'])); ?>" class="nav-link">
          <span class="menu-title"><?php echo e(__('Đang chỉnh sửa')); ?> </span>
        </a>
      </li>
     

      <li class="nav-item">
        <a href="<?php echo e(route('auth.orders',['user' => $user,'state'=>'finish' ,'open' => 'order'])); ?>" class="nav-link">
          <span class="menu-title"><?php echo e(__('Hoàn thành')); ?> </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <span class="menu-title"><?php echo e(__('Cần đánh giá')); ?> </span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('auth.orders', ['user' => $user,'state'=>'canceled' ,'open' => 'order'] )); ?>" class="nav-link">
          <span class="menu-title"><?php echo e(__('Hủy đơn')); ?> </span>
        </a>
      </li>

    </ul>
  </li>
  <li class="nav-item ">
    <a href="<?php echo e(route('auth.favorites',$user)); ?>" class="nav-link">

      <i class="icon-heart"></i>
      <span class="menu-title"><?php echo e(__('Yêu thích')); ?> </span>
    </a>
  </li>

  <li class="nav-item ">
    <a href="<?php echo e(route('auth.rewards',$user)); ?>" class="nav-link">

      <i class="icon-present"></i>
      <span class="menu-title"><?php echo e(__('Giảm giá - Ưu đãi')); ?> </span>
    </a>
  </li>

  <li class="nav-item ">
    <a href="<?php echo e(route('auth.tranactions',$user)); ?>" class="nav-link">

      <i class="icon-wallet"></i>
      <span class="menu-title"><?php echo e(__('Giao dịch')); ?> </span>
    </a>
  </li> 
</ul><?php /**PATH D:\www\kp\resources\views/components/menu/dev/auth.blade.php ENDPATH**/ ?>