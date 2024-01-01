<?php $attributes = $attributes->exceptProps([
  'block' =>   new App\Models\Block,
  'prefix'=> null,
]); ?>
<?php foreach (array_filter(([
  'block' =>   new App\Models\Block,
  'prefix'=> null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php 
  $action = empty($block->id) ? route('blocks.store') :  route('blocks.update',$block);
  $method = empty($block->id) ? 'POST' : 'PUT';
  $title  = empty($block->id) ? 'create' : 'edit';
?>
<div class="modal-content">
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e($action).'','method' => ''.e($method).'','enctype' => 'multipart/form-data']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e($action).'','method' => ''.e($method).'','enctype' => 'multipart/form-data']); ?>
    <?php if($prefix): ?>
      <input type="hidden" name="prefix" value="<?php echo e($prefix); ?>" />
    <?php endif; ?>
    <div class="modal-header">
     

      <h4 class="pull-left" id="myModalLabel2"><i class="fa fa-road2"></i><?php echo e(Theme::title($title)); ?></h4>

      <div class="pull-right">
      
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
    <div class="modal-body h-100">
      <div class="card-block">
        <div class="row">
          <div class="col-xs-4">
            <div class="card box">
            
              <?php if(empty($block->avatar)): ?>
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.temp','data' => ['class' => 'img-fluid']]); ?>
<?php $component->withName('temp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'img-fluid']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
              <?php else: ?>
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.temp','data' => ['class' => 'img-fluid','src' => ''.e($block->avatar->src).'']]); ?>
<?php $component->withName('temp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'img-fluid','src' => ''.e($block->avatar->src).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-xs-8">
            <div class="form-group">
              <input type="text" value="<?php echo e($block->title); ?>" class="form-control" placeholder="title" name="title" />
            </div>

            <div class="form-group">
              <div class="input-group ">
                <span class="input-group-addon">Link</span>
                <input type="text" name="link" placeholder="link" class="form-control" value="<?php echo e($block->link); ?>" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="form-group row">
              <div class=" col-xs-6">
                <input type="text" value="<?php echo e($block->code); ?>" class="form-control" placeholder="type" name="code" />
              </div>
              <div class="col-xs-6">
                <div class="input-group ">
                  <span class="input-group-addon">Priority</span>
                  <input type="number" name="priority" class="form-control" value="<?php echo e($block->priority); ?>">
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="form-group">
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.editor','data' => ['height' => '120']]); ?>
<?php $component->withName('editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['height' => '120']); ?><?php echo e($block->content); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>

      </div>

    </div>
   
   <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div><?php /**PATH D:\www\kp\resources\views/components/block/edit.blade.php ENDPATH**/ ?>