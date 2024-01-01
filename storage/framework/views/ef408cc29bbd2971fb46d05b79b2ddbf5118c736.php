<?php
$review = App\Models\Block::pull('home.review')
    ->orderByDesc('priority')
    ->first();

?>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <?php if($review->avatar): ?>
                <img src="<?php echo e(url($review->avatar->src)); ?>" loading="lazy" class="img-fluid" />
            <?php endif; ?>
        </div>

        <div class="col-md-7">
            <div class="card-block">
                <h2><?php echo e($review->title); ?></h2>
                <div><?php echo $review->content; ?></div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\www\kp\resources\views/components/home/review.blade.php ENDPATH**/ ?>