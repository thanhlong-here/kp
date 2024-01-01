<?php
  $address = "Tầng 1, A3.1 Khu dân cư The Everich 3, đường Phú Thuận, Phường Tân Phú, Quận 7, Thành phố Hồ Chí Minh, Việt Nam";
  $name    =  "CÔNG TY TNHH MTV LATH GROUP";
  $tel     =  "+84. 932776062";
  $email   =  "info@kingpang.vn";
  $worktime=  __("Từ") ."9:00 ".__("Tới")." 18:00";
  $right   =  "Copyright @ 2021 kingpang lnc. All rights reserved";
  $abouts  =[
    url('about')    =>  'Giới thiệu',
    url('blog')     =>  'Blog',
    url('careers')  =>  'Nghề nghiệp',
  ];

  $customers  = [
    url(Post::findCode('term-use')->link->pretty) => 'Điều khoản sử dụng',
    url(Post::findCode('term-payment')->link->pretty) => 'Điều khoản thanh toán',
    url(Post::findCode('privacy-policy')->link->pretty) => 'Chính sách riêng tư',
    url('review') =>  'Đánh giá',
    url('faq')  =>  'Câu hỏi thường gặp',
  ];

  $qrcode = url('media\image\app-kingpang.png');

  $store  = [
    "https://play.google.com/store/apps/details?id=com.kingpang.kpapp"  =>  asset('theme\images\logo\app-google.png'),
    "#" =>   asset('theme\images\logo\app-apple.png')
  ];

  $social= [
      "https://www.facebook.com/KINGPANGVN/" =>  asset('theme\images\logo\facebook.png'),
      "#youtube" =>  asset('theme\images\logo\youtube.png'),
      "#zalo" =>  asset('theme\images\logo\zalo.png'),
  ];
?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.block','data' => ['tag' => 'footer','id' => 'footer','class' => 'footer footer-static footer-light navbar-border mb-2']]); ?>
<?php $component->withName('block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['tag' => 'footer','id' => 'footer','class' => 'footer footer-static footer-light navbar-border mb-2']); ?>
    <div class="container">
        <div class="row mt-2">
          <div class="col-md-4">
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.logo','data' => []]); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

            <div class="card-body mt-2">

              <div class="mb-1 font-medium-2 text-bold-600"><?php echo e($name); ?></div>
              <div class="mb-1"><?php echo e(__('Địa chỉ')); ?> : <span class="text-bold-600"> <?php echo e($address); ?> </span></div>
              <div class="row mb-1">
                <label class="col-xs-5"> <?php echo e(__('Số điện thoại')); ?> :</label> <span class="text-bold-600"><?php echo e($tel); ?></span> 
              </div>

              <div class="row">
                <label class="col-xs-5">Email:</label> <span class="text-bold-600"><?php echo e($email); ?></span> 
              </div>

            </div>
          </div>
          <div class="col-md-2">
            <h4 class="text-bold-600" ><?php echo e(__('Về KingPang')); ?> </h4>

            <ul class="nav navbar row">
              <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link=>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="nav-item">
                    <a href="<?php echo e($link); ?>"
                    class="nav-link"><?php echo e(Theme::title($name)); ?> </a>
                  </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="li-t">
              <h4 class="mt-1"> <?php echo e(__('Thời gian làm việc')); ?>  </h4>
              <div><?php echo e($worktime); ?></div>
            </div>
          </div>
          <div class="col-md-3">
              <h4 class="text-bold-600">
                <?php echo e(__('Hỗ trợ khách hàng')); ?>

              </h4>
              <ul class="nav navbar row">
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link=>$name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item">
                      <a href="<?php echo e($link); ?>" class="nav-link">
                        <?php echo e(Theme::title($name)); ?>

                      </a>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>

          </div>
          <div class="col-md-3">
            <h4 class="text-bold-600 mb-2" >
              <?php echo e(__('Tải ứng dụng')); ?>

            </h4>
            <div class="row mb-1">
              <div class="col-xs-5">
                <img loading="lazy" class="img-fluid" src="<?php echo e($qrcode); ?>" />
              </div>
              <div class="col-xs-7">
                <?php $__currentLoopData = $store; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link=> $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($link); ?>">
                        <img loading="lazy" src="<?php echo e($name); ?>" />
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
            <div class="li-t">
              <div class="mt-1">
                  <h4 tag="mr-2" class="text-bold-600">
                    <?php echo e(__('Theo dõi chúng tôi')); ?> </h4>
                  <?php $__currentLoopData = $social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link=> $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a target="_blank" href="<?php echo e($link); ?>">
                        <img loading="lazy" class="ic" src="<?php echo e($name); ?>" />
                    </a>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>
            </div>

          </div>

        </div>
    </div>
    <div class="container-fluid line-t">
      <div class="p-1 text-xs-center">
        <?php echo e(__($right)); ?>

      </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH D:\www\kp\resources\views/components/layout/inc/footer.blade.php ENDPATH**/ ?>