<?php
global $x_item;
?>
<script src="<?php echo e(asset('theme/js/vendors.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/theme.js')); ?>"></script>
<script>
  <?php if($x_item): ?>
  $.each(<?php echo json_encode($x_item, 15, 512) ?>, function(key, value) {
    $('[xitem-id=' + key + ']').html(value);
  });
  <?php endif; ?>


  $('.lazy').each(function(i) {
    var $this = $('.lazy').eq(i);
    $this.html($this.data('value'));

    var bg = $this.data('bg-img');
    if (typeof bg != 'undefined') {
      $this.css('background-image', 'url(' + bg + ')');
    }

  });

  <?php echo $__env->yieldPushContent('x-script'); ?>
</script><?php /**PATH D:\www\kp\resources\views/components/script.blade.php ENDPATH**/ ?>