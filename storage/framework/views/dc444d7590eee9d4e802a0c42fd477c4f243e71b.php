<?php $attributes = $attributes->exceptProps(['freelancer']); ?>
<?php foreach (array_filter((['freelancer']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-contact-'.e($freelancer->id).'']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-contact-'.e($freelancer->id).'']); ?>
  <div class="modal-content">
    <?php if(Auth::user()): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('user.contacts.store',Auth::user())).'','enctype' => 'multipart/form-data']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('user.contacts.store',Auth::user())).'','enctype' => 'multipart/form-data']); ?>
      <input type="hidden" name="receiver_id" value="<?php echo e($freelancer->user->id); ?>" />
      <input type="hidden" name="type" value="send" />
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">
          <i class='fa fa-road2'></i><?php echo e(__('Gửi tin nhắn')); ?>

        </h4>
      </div>
      <div class="modal-body card">
        <div class="form-body row">
          <div class="col-xs-3 text-xs-center">
            <div class="media profil-cover-details">
              <div class="media-left">
                <?php if($freelancer->avatar): ?>
                <a href="<?php echo e(url($freelancer->link->pretty)); ?>" class="profile-image">
                  <img loading="lazy" class="rounded-circle img-border x100" src="<?php echo e(url($freelancer->avatar->src)); ?>" />
                </a>
                <?php endif; ?>
              </div>
            </div>
            <a href="<?php echo e(url($freelancer->link->pretty)); ?>">
              <h4 class="card-title mt-2">
                <?php echo e($freelancer->name); ?>

              </h4>
            </a>
          </div>
          <div class="col-xs-9">
            <div class="form-group">
              <textarea name="content" placeholder="<?php echo e(__('something write')); ?>" rows="8" class="form-control"><?php echo e(old('content')); ?></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal"><?php echo e(__('Đóng')); ?></button>
        <button type="submit" class="btn btn-primary"><?php echo e(__('Gửi')); ?></button>
      </div>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    <?php endif; ?>
  </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/modal/contact.blade.php ENDPATH**/ ?>