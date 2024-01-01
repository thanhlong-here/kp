<form wire:submit.prevent="register" >

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
            <input placeholder="<?php echo e(__('enter input password')); ?>"
            wire:model="password"
            type="password" class="form-control" name="password" required  autofocus >
        </div>
        
        <div class="form-group row">
            
            <input placeholder="<?php echo e(__('Tên hiển thị')); ?> : <?php echo e($email); ?>"
            wire:model="name" 
            type="text" class="form-control" name="name">
        </div>

        <div class="form-group row">
            <button type="submit" class="btn btn-primary btn-block">
                <?php echo e(__('Đăng ký')); ?>

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
                <input placeholder="<?php echo e(__('Nhập Email của bạn')); ?>"
                    wire:model="email"
                    type="email"
                    class="form-control"
                    name="email" value="<?php echo e(old('email')); ?>" required  autofocus>
        </div>
        <div class="form-group row">
            <button type="submit" class="btn btn-primary btn-block">
                <?php echo e(__('Tiếp tục')); ?>

            </button>
        </div>
        <label class="row text-justify">

            <input type="checkbox" name="accepted" value="1" checked required >
            <a href="<?php echo e(url(Post::findCode('term-use')->link->pretty)); ?>">
            <?php echo e(__('Tôi đã đọc và đồng ý với các điều khoản của KingPang')); ?>

             </a>
        </label>
    
    <?php endif; ?>
    
</form><?php /**PATH D:\www\kp\resources\views/livewire/auth/register.blade.php ENDPATH**/ ?>