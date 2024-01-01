<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
  <li class="nav-item">
    <a href="<?php echo e(route('dev.index')); ?>">
      <i class="icon-home"></i>
      <span class="menu-title"><?php echo e(Theme::title('dashboard')); ?></span>
    </a>
  </li>


  <li class="nav-item">
    <a href="<?php echo e(route('pages.index')); ?>">
      <i class="icon-docs"></i>
      <span class="menu-title"><?php echo e(__('Trang tĩnh')); ?></span>
    </a>
  </li>

  <li class="nav-item sub-post has-sub">
    <a href="#">
      <i class="icon-book-open"></i>
      <span class="menu-title"><?php echo e(__('Bài viết')); ?></span>
    </a>
    <ul class="menu-content">
    <li>
        <a href="<?php echo e(route('posts.index',['open'=>'post'])); ?>">
          <span class="menu-title"><?php echo e(__('Danh sách')); ?></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('categories.index',['open'=>'post'])); ?>">
          <span class="menu-title"><?php echo e(__('Danh mục ')); ?></span>
        </a>
      </li>
      
    </ul>
  </li>
  <li class="nav-item ">
    <a href="<?php echo e(route('orders.all',['state' => 'ordered'])); ?>">
      <i class="icon-bar-chart"></i>
      <span class="menu-title"><?php echo e(__('Đơn hàng chờ xác nhận')); ?></span>
    </a>
    

  </li>
  <li class="nav-item">
    <a href="<?php echo e(route('categories.prefix','service')); ?>">
      <i class="icon-tag"></i>
      <span class="menu-title"><?php echo e(__('Dịch vụ')); ?></span>
    </a>
  </li>

  <li class="nav-item">
    <a href="<?php echo e(route('products.all')); ?>">
      <i class="icon-social-dropbox"></i>
      <span class="menu-title"><?php echo e(__('Sản phẩm')); ?></span>
    </a>
  </li>


  <li class="nav-item">
    <a href="<?php echo e(route('freelancers.index')); ?>">
      <i class="icon-briefcase"></i>
      <span class="menu-title"><?php echo e(__('Freelancer')); ?></span>
    </a>
  </li>

  <li class="nav-item">
    <a href="<?php echo e(route('blocks.prefix',['note','open'=>'display'])); ?>">
      <i class="icon-doc"></i>
      <span class="menu-title"><?php echo e(__('Ghi chú')); ?></span>
    </a>
  </li>
  

  <li class="nav-item sub-display has-sub">
    <a href="#">
      <i class="icon-puzzle"></i>
      <span class="menu-title"><?php echo e(__('Giao diện')); ?></span>
    </a>
    <ul class="menu-content">
      <li class="nav-item">
        <a href="<?php echo e(route('blocks.index',['open'=>'display'])); ?>">
          <span class="menu-title"><?php echo e(__('Khối tĩnh')); ?></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('blocks.prefix',['slider','open'=>'display'])); ?>">
          <span class="menu-title"><?php echo e(__('Slider')); ?></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('blocks.prefix',['list','open'=>'display'])); ?>">
          <span class="menu-title"><?php echo e(__('Danh sách')); ?></span>
        </a>
      </li>

    </ul>
  </li>
  <li class="nav-item sub-account has-sub">
    <a href="#">
      <i class="icon-users"></i>
      <span class="menu-title"><?php echo e(__('Tài khoản')); ?></span>
    </a>
    <ul class="menu-content">
      <li class="nav-item">
        <a href="<?php echo e(route('users.index',['is'=>'admin','open'=>'account'])); ?>">
          <span class="menu-title"><?php echo e(__('Quản trị')); ?></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('users.index')); ?>">
          <span class="menu-title"><?php echo e(__('Người dùng')); ?></span>
        </a>
      </li>

    </ul>
  </li>
 
</ul>


<?php /**PATH D:\www\kp\resources\views/components/menu/dev/admin.blade.php ENDPATH**/ ?>