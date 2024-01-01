<ul class="nav navbar-nav float-xs-right">
    <li class="nav-item mr-1">
        <span class="avatar avatar-online">
            <img src="<?php echo e(asset('theme/images/portrait/small/avatar-s-1.png')); ?>" alt="avatar">
        </span>
        <span style="line-height: 2.2rem;"><?php echo e(Str::title(Auth::user()->name)); ?></span>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="<?php echo e(route('logout')); ?>">
            <i class="icon-power"></i>
            <span class="menu-title">  <?php echo e(Theme::title('logout')); ?></span>
        </a>
    </li>
   
</ul><?php /**PATH D:\www\kp\resources\views/components/menu/dev/topright.blade.php ENDPATH**/ ?>