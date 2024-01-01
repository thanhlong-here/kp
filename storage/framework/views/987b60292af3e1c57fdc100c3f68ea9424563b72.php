<?php $attributes = $attributes->exceptProps([
'user'=>null,
]); ?>
<?php foreach (array_filter(([
'user'=>null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$flags=[
'en' => ['english','flag-icon-gb'],
'vi' => ['vietnamese','flag-icon-vn'],
'kr' => ['korean','flag-icon-kr'],
];

$locale = $flags[App::getLocale()];
unset($flags[App::getLocale()]);


?>
<?php if (! $__env->hasRenderedOnce('ae9e6ea2-b381-4613-a4d1-0d001c97ca64')): $__env->markAsRenderedOnce('ae9e6ea2-b381-4613-a4d1-0d001c97ca64'); ?>

<?php $__env->startPush('script'); ?>

<script>
  $('.inbox').mouseover(function() {
    var inbox = $(this).children(".inbox-show");
    inbox.show();
  });
  $('.inbox-show').mouseout(function() {
    $(this).hide();
  });
</script>

<?php $__env->stopPush(); ?>

<?php endif; ?>
<ul class="nav navbar-nav font-medium-2 float-xs-right text-bold-400">
  <li class="dropdown nav-item">
    <a href="<?php echo e(url(Category::findCode('blog')->link->pretty)); ?>" class="nav-link"> <?php echo e(__('Khám phá')); ?></a>
   
  </li>


  <?php if(isset($user)): ?>
  <li class="inbox nav-item ml-2">
    <a href="#" class="nav-link">
      <?php echo e(__('Tin nhắn')); ?>

    </a>
    <div class="inbox-show shadow">
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.user.inbox-board','data' => ['user' => $user]]); ?>
<?php $component->withName('user.inbox-board'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    </div>

</li>

  <li class="nav-item ml-2">
    <a href="<?php echo e(route('auth.orders',$user)); ?>" class="nav-link">
      <?php echo e(__('My KingPang')); ?>

    </a>

  </li>


  <li class="dropdown  nav-item ml-2">
    <a href="#" data-toggle="dropdown" class="nav-link">
      <?php if($user->avatar): ?>
      <img loading="lazy" class="x32 round avatar-online" src="<?php echo e(url($user->avatar->src)); ?> " />
      <?php else: ?>
      <img loading="lazy" class="x32 round avatar-online" src="<?php echo e(asset('theme/images/portrait/small/avatar-s-1.png')); ?> " />
      <?php endif; ?>

    </a>
    <ul class="dropdown-menu dropdown-menu-right">
    <li class="dropdown-item">
        <a href="<?php echo e(route('auth.profile',$user)); ?>" class="nav-link">
          <?php echo e(__('Tài khoản cá nhân')); ?>

        </a>

      </li>
      <?php if(isset($user->freelancer) ): ?>
      <li class="dropdown-item">
        <a href="<?php echo e(route('freelancers.products.index',$user->freelancer)); ?>" class="nav-link"> <?php echo e(__('Làm Freelancer')); ?> </a>
      </li>
      <?php else: ?>
      <li class="dropdown-item">
        <a href="<?php echo e(route('king')); ?>" class="nav-link"> <?php echo e(__('Trở thành Freelancer')); ?> </a>
      </li>
      <?php endif; ?>
     
      <li class="dropdown-item">
        <a href="<?php echo e(route('auth.settings',$user)); ?>" class="nav-link">
          <?php echo e(__('Thiết lập')); ?>

        </a>

      </li>
      <li class="dropdown-item line-t">
        <a href="<?php echo e(route('logout')); ?>" class="nav-link"> <?php echo e(__('Thoát')); ?> </a>
      </li>
    </ul>
  </li>
  <?php else: ?>
  <li class="nav-item ml-2">
    <a href="<?php echo e(route('king')); ?>" class="nav-link"> <?php echo e(__('Trở thành Freelancer')); ?> </a>
  </li>
  <li class="nav-item ml-2 box pl-1 pr-1">
    <a href="#" data-backdrop="false" data-toggle="modal" data-target="#modal-login" class="nav-link">
      <?php echo e(__('Đăng nhập')); ?>

    </a>


  </li>
  <?php endif; ?>
  <li class="dropdown nav-item ml-2" >

    <a href="#" data-toggle='dropdown' class="dropdown-toggle nav-link">
      <i class='flag-icon <?php echo e($locale[1]); ?>'></i> </a>

    <div class="dropdown-menu  dropdown-menu-right">
      <?php $__currentLoopData = $flags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $flag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a class="dropdown-item" href="<?php echo e(route('trans',$lang)); ?>">
        <i class='flag-icon <?php echo e($flag[1]); ?>'></i> <?php echo e(Theme::title($flag[0])); ?></a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

  </li>
</ul><?php /**PATH D:\www\kp\resources\views/components/menu/top.blade.php ENDPATH**/ ?>