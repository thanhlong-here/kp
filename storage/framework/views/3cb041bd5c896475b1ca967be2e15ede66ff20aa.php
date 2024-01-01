<?php $attributes = $attributes->exceptProps([
'query',
'total' => 12,
]); ?>
<?php foreach (array_filter(([
'query',
'total' => 12,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php

$list = $query->paginate($total);
$create=route('freelancers.create');
?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.freelancer.search','data' => []]); ?>
<?php $component->withName('freelancer.search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<div id="table" class="table-responsive">
  <table class="table">
    <thead>
      <th style="width:1rem">

      </th>
      <th style="width:1rem">

      </th>
      <th style="width:16rem" > <?php echo e(Theme::title('name')); ?></th>
      <th> <?php echo e(Theme::title('info')); ?></th>
      <th> <?php echo e(Theme::title('job')); ?> </th>
      
      <th> <?php echo e(Theme::title('status')); ?></th>
      <th style="width:8rem"> </th>
      <th style="width:2rem">
        <button type="button" class="btn btn-sm  btn-primary" onclick="modal_src('modal-src','<?php echo e($create); ?>')">
          <i class="ft ft-plus"> </i>
          <?php echo e(__('Create')); ?>

        </button>
      </th>
     
    </thead>

    <tbody>

      <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
      $view = route('freelancers.products.index',$row);
      $edit = route('freelancers.edit',$row);
      ?>
      <?php $__env->startPush('outer'); ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.delete','data' => ['row' => $row,'action' => 'freelancers.destroy']]); ?>
<?php $component->withName('modal.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['row' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'action' => 'freelancers.destroy']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      <?php $__env->stopPush(); ?>
      <tr>
        <td>
          <?php if(!$row->products->count()): ?>
          <button data-toggle="modal" data-target="#modal-delete-<?php echo e($row->id); ?>" class="btn btn-sm btn-icon btn-danger">
            <i class="ft ft-x"></i></button>
          <?php endif; ?>
        </td>
        <td>
          <a class="btn btn-sm btn-icon btn-primary" href="<?php echo e(route('freelancers.edit',$row)); ?>"> <i class="icon-login"></i> </a>
        </td>
        <td>
          <div class="form-group  font-medium-1  text-bold-700">


            <?php echo e($row->name); ?>

          </div>

        </td>
        <td>
          <div class="form-group"> <?php echo e($row->work_email); ?></div>
          <div class="form-group"> <?php echo e($row->work_phone); ?></div>
        </td>
        <td>
          <?php echo e($row->job); ?>

        </td>
        
        <td>
          <?php echo e($row->status); ?>

        </td>
        <td class="font-medium-1  text-bold-600" >
        <span class="pull-right ">
        <?php echo e($row->inventory()->count()); ?>  <i class="icon-social-dropbox"></i>
         </span>
        </td>
        <td>
          <span class="tag tag tag-pill tag-success float-xs-right">
            <a target="_blank" href="<?php echo e(url($row->link->pretty)); ?>">
              #Preview
            </a>
          </span>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

  </table>

  <div class="pull-right">
    <?php echo e($list->render('vendor.pagination.simple')); ?>


  </div>
</div><?php /**PATH D:\www\kp\resources\views/components/freelancer/table.blade.php ENDPATH**/ ?>