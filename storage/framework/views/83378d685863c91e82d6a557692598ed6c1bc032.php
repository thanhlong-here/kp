<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'modal-sm','id' => 'modal-login']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'modal-sm','id' => 'modal-login']); ?>
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <h4 class="modal-title text-xs-center" >
        <?php echo e(__('Đăng nhập')); ?>

      </h4>
    </div>
    <div class="modal-body">

      <div class="card">
        <div class="card-block">
          <div class="card-body">

            <div class="form-group row one">
                  <button type="button" id="btnFacebook" onclick="loginFacebook()"
                  name="login" value="facebook"
                  class="btn btn-facebook block">
                    <i class="fa fa-facebook"></i> <span class="ml-1">
                    <?php echo e(__('Tiếp tục với Facebook')); ?> </span>

                    </button>
            </div>

            <div class="form-group row one">
                <button type="button" id="btnGoogle" onclick="loginGoogle()"
                name="login" value="google" class="btn bg-google white  block">
                <i class="fa fa-google-plus"></i><span class="ml-1">
                <?php echo e(__('Tiếp tục với Google')); ?>

                </span>
                </button>
            </div>

           
            <div class="form-group row">
              <button type="button" data-backdrop="false" data-toggle="modal" data-target="#modal-login-email" class="btn btn-primary  block">
              <i class="fa fa-envelope-o mr-2"></i> <?php echo e(__('Tiếp tục với Email')); ?>

              </button>
            </div>

          </div>
        </div>
      </div>
           
    </div>      
    <div class="modal-footer text-xs-center">
      
        <label class="nav-link success" data-toggle="modal" data-target="#modal-register" >
        <i class="fa fa-envelope-o mr-1"></i> <?php echo e(__('Tạo tài khoản với Email')); ?>


        </label>
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
  </div> 
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.login_email','data' => []]); ?>
<?php $component->withName('modal.login_email'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH D:\www\kp\resources\views/components/modal/login.blade.php ENDPATH**/ ?>