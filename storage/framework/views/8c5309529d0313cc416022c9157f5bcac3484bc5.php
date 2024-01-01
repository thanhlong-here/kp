<?php 
  $ads =  App\Models\Block::pull('home.ads')->first();
?>

<div class="container>
  <a href="<?php echo e(empty($ads->link) ? '#' : url($ads->link)); ?>">
    <?php if(isset($ads->avatar)): ?>
    <img src="<?php echo e(asset($ads->avatar->src)); ?>" loading="lazy" class="img-fluid" />
    <?php endif; ?>
  </a>
</div>
<?php /**PATH D:\www\kp\resources\views/components/home/ads.blade.php ENDPATH**/ ?>