<label class="like <?php echo e($class ?? 'font-medium-2'); ?>" >

  <a wire:model="count" class="<?php echo e($this->liked ? 'red' : ''); ?> " <?php echo e(Auth::check() ? "wire:click=like" : "data-toggle=modal data-target=#modal-login"); ?>>
    <i class="fa fa-heart"></i>
  </a>
 
</label><?php /**PATH D:\www\kp\resources\views/livewire/auth/like.blade.php ENDPATH**/ ?>