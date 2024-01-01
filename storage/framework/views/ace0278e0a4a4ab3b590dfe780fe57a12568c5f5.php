
<form wire:submit.prevent="login" >
    <?php if( $ok ): ?>
        <div class="form-group row text-xs-center">
            <button wire:click ='sw' class="btn btn-block round text-bold-600 dropdown-toggle">
                <i class="ft ft-user mr-1"></i><?php echo e($email); ?> 
            </button>
        </div>
        <div class="form-group row">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <input placeholder="enter input password"
            wire:model="password"
            type="password" class="form-control" name="password" required  autofocus >
            <label class="form-check-label pull-left" for="remember">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                <?php echo e(__('Ghi nhớ')); ?>

            </label>
        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary btn-block">
                <?php echo e(__('Đăng nhập')); ?>

            </button>
        </div>
      
    <?php else: ?> 
        
        <div class="form-group row">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input placeholder="<?php echo e(__('Nhập email của bạn')); ?>"
                    wire:model="email"
                    type="email"
                    class="form-control"
                    name="email" value="<?php echo e(old('email')); ?>" required  autofocus>
            <?php if(Route::has('password.request')): ?>
                <a class="btn-link" href="<?php echo e(route('password.request')); ?>">
                    <?php echo e(__('Quên mật khẩu')); ?> ?
                </a>
            <?php endif; ?>
        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary btn-block">
                <?php echo e(__('Tiếp tục')); ?>

            </button>
        </div>
    
        <div class="form-group row">
            <button type="button" data-toggle="modal" data-dismiss="modal" data-target="#modal-register" class="btn  btn-block">
                <?php echo e(__('Tạo tài khoản với Email')); ?>

            </button>
        </div>
    <?php endif; ?>
    
</form>
<?php /**PATH D:\www\kp\resources\views/livewire/auth/login.blade.php ENDPATH**/ ?>