<div class=" media profil-cover-details">
    <div class="media-left">
        <?php if($freelancer->avatar): ?>
          <a href="<?php echo e(url($freelancer->link->pretty)); ?>" class="profile-image">
              <img class="rounded-circle img-border x100"
                src="<?php echo e(url($freelancer->avatar->src)); ?>"  />
          </a>
        <?php endif; ?>
    </div>
    <div class="media-body media-middle row">
        <div class="col-xs-6">
          <a href='<?php echo e(url($freelancer->link->pretty)); ?>' >
            <h4 class="card-tile">
              <?php echo e($freelancer->name); ?>

            </h4>
            <p>  <?php echo e($freelancer->job); ?></p>
          </a>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button.contact','data' => ['class' => 'btn','id' => ''.e($freelancer->id).'','out' => ''.e(Theme::title('contact me')).'']]); ?>
<?php $component->withName('button.contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'btn','id' => ''.e($freelancer->id).'','out' => ''.e(Theme::title('contact me')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>

    </div>
</div>
<div><?php echo $freelancer->intro; ?></div>
<?php /**PATH D:\www\kp\resources\views/page/product/detail/tab-portfolio.blade.php ENDPATH**/ ?>