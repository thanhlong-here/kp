<?php $attributes = $attributes->exceptProps([
'freelancer',
]); ?>
<?php foreach (array_filter(([
'freelancer',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php $__env->startPush('script'); ?>
<script>
  $(".word-count .word").keydown(function() {
    var len = $(this).val().length;
    $(this).parent().find('.count').html(len);
  });
</script>
<?php $__env->stopPush(); ?>
<div style="padding-top: 8rem;" class="container form-body">
  <div class="container fixed">
    <div class="col-xs-2 ">
      <ul class="nav nav-bar text-xs-right mr-2">
        <li class="nav-item mb-1">
          <a class="nav-link">
            <?php echo e(Theme::title('overview')); ?> <span class="btn btn-primary btn-sm ml-1"> 1 </span> </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link">
            <?php echo e(Theme::title('pricing')); ?> <span class="btn btn-secondary btn-sm ml-1"> 2 </span> </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link">
            <?php echo e(Theme::title('intro')); ?> <span class="btn btn-secondary btn-sm ml-1"> 3 </span> </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link">
            <?php echo e(Theme::title('requirement')); ?> <span class="btn btn-secondary btn-sm ml-1"> 4 </span> </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link">
            <?php echo e(Theme::title('gallery')); ?> <span class="btn btn-secondary btn-sm ml-1"> 5 </span> </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link">
            <?php echo e(Theme::title('publish')); ?> <span class="btn btn-secondary btn-sm ml-1"> 6 </span> </a>
        </li>
      </ul>

    </div>
  </div>


  <div class="offset-xs-2 col-xs-6 ">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('freelancers.products.store',$freelancer)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('freelancers.products.store',$freelancer)).'']); ?>


      <div id="overview" class="content-wrapper card">
        <div class="card-header">
          <h2> <?php echo e(Theme::title('overview')); ?> </h2>
        </div>
        <div class="card-body">
          <div class="card-block">
            <div class="form-group">
              <label><?php echo e(Theme::title('title')); ?></label>


              <div class="help fixed">
                <?php echo e(__("This is your Service title. Choose wisely, you can only use 120 characters.")); ?>

              </div>
              <div class="word-count">
                <textarea rows="4" name="name" maxlength="120" placeholder="<?php echo e(__('i will')); ?> " class="form-control font-large-1 shadow word"></textarea>
                <div class="pull-right"> <span class="count">0</span>/120 </div>
              </div>


            </div>
            <div class="form-group">
            <div class="help fixed">
                <?php echo e(__("Please choose the category and sub-category most suitable for your Gig.")); ?>

              </div>
            .
              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('category.service', [])->html();
} elseif ($_instance->childHasBeenRendered('NmaB89W')) {
    $componentId = $_instance->getRenderedChildComponentId('NmaB89W');
    $componentTag = $_instance->getRenderedChildComponentTagName('NmaB89W');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NmaB89W');
} else {
    $response = \Livewire\Livewire::mount('category.service', []);
    $html = $response->html();
    $_instance->logRenderedChild('NmaB89W', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="pull-right">
            <button id="btn_send" type="submit" class="btn btn-primary">
              <?php echo e(Theme::title('save & continue')); ?>

            </button>

          </div>
        </div>
      </div>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
  </div>
</div>

<div style="top:0" class="fixed block ">
  <div class="row bg-white line-b p-1">
    <div class="col-md-6">
      <h2 class="content-title">
        <?php echo e(Theme::title('create service')); ?>

      </h2>
    </div>
    <div class="col-md-6">
      <div class="pull-right">

        <button type="button" class="btn btn-info" onclick="parent.location.reload();">
          <span aria-hidden="true"> X </span>
        </button>
      </div>
    </div>
  </div>
</div><?php /**PATH D:\www\kp\resources\views/components/product/create.blade.php ENDPATH**/ ?>