
<?php if(empty(App\Classes\Setting::get()->device)): ?>
<?php $__env->startPush('script'); ?>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
<script src="<?php echo e(asset('theme/js/firebase.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<div class="app-w">
  <div class="card-block">
    <div class="form-group row one">
      <a href="#" id="btnFacebook" onclick="loginFacebook()" class="btn btn-facebook block">
        <i class="fa fa-facebook"></i> <span class="ml-1">
          <?php echo e(__('Continue with Facebook')); ?> </span>

      </a>
    </div>
    <div class="form-group row one">
      <a href="#" id="btnGoogle" onclick="loginGoogle()" class="btn bg-google white  block">
        <i class="fa fa-google-plus"></i><span class="ml-1">
          <?php echo e(__('Continue with Google')); ?>

        </span>
      </a>
    </div>
  </div>
</div>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['id' => 'firebase_login','method' => 'post','class' => 'none','action' => ''.e(route('firebase.login')).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'firebase_login','method' => 'post','class' => 'none','action' => ''.e(route('firebase.login')).'']); ?>
  <input type="hidden" name="login_by" id="login_by" />
  <input type="hidden" name="name" id="name" />
  <input type="hidden" name="email" id="email" />
  <input type="hidden" name="firebase_uid" id="firebase_uid" />
  <input type="hidden" name="firebase_token" id="firebase_token" />
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php else: ?>

<?php
$facebook = "#bot:login?by=facebook";
$google = "#bot:login?by=google";
$apple = "#bot:login?by=apple";

?>
<div class="app-w">
  <div class="card-block">
    <div class="form-group row one">
      <a href="<?php echo e($facebook); ?>" class="btn btn-facebook block">
        <i class="fa fa-facebook"></i> <span class="ml-1">
          <?php echo e(__('Continue with Facebook')); ?> </span>

      </a>
    </div>

    <div class="form-group row one">
      <a href="<?php echo e($google); ?>" class="btn bg-google white  block">
        <i class="fa fa-google-plus"></i><span class="ml-1">
          <?php echo e(__('Continue with Google')); ?>

        </span>
      </a>
    </div>

    <div class="form-group row one">
      <a href="<?php echo e($apple); ?>" class="btn bg-apple white block">
        <i class="fa fa-apple"></i><span class="ml-1">
          <?php echo e(__('Continue with Apple')); ?>

        </span>
      </a>
    </div>
  </div>
</div>

<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/app/login.blade.php ENDPATH**/ ?>