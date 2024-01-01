<?php $attributes = $attributes->exceptProps([
'query',
'category' => 0,
'is'=>'post',
'total' => 12,
]); ?>
<?php foreach (array_filter(([
'query',
'category' => 0,
'is'=>'post',
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

?>

<?php $__env->startPush('outer'); ?>
<?php if($is=='post'): ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.choices','data' => ['id' => 'modal-choice','action' => 'posts.create','list' => App\Models\Category::root()->whereNull('prefix')->get()]]); ?>
<?php $component->withName('modal.choices'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-choice','action' => 'posts.create','list' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(App\Models\Category::root()->whereNull('prefix')->get())]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-src','class' => 'modal-xl h-100']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-src','class' => 'modal-xl h-100']); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<div class="mb-2">
 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.post.search','data' => ['is' => ''.e($is).'']]); ?>
<?php $component->withName('post.search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['is' => ''.e($is).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div>

<div id="table" class="table-responsive">

  <table class="table">
    <thead>
      <th style="width:2rem">

      </th>

      <th style="width:12rem">
        <?php echo e(Theme::title('code')); ?>

      </th>
      <th style="width:2rem">
        <?php echo e(Theme::title('priority')); ?>

      </th>
      <th>
        <?php echo e(Theme::title('title')); ?>

      </th>

      <?php if($is=='post'): ?>
      <th>
        <?php echo e(Theme::title('category')); ?>

      </th>
      <?php endif; ?>
      <th style="width:2rem">

        <?php if($is=='post'): ?>

        <button type="button" class="btn btn-sm btn-icon btn-primary" data-toggle="modal" data-target="#modal-choice">
          <i class="ft ft-plus"> </i>
          <?php echo e(__('Create')); ?>

        </button>

        <?php else: ?>
        <?php
        $create = route('posts.create');
        ?>
        <button class="btn btn-sm btn-icon   btn-primary" onclick=" modal_src('modal-src','<?php echo e($create); ?>')">
          <i class="ft ft-plus"> </i>

          <?php echo e(__('Create')); ?>

        </button>

        <?php endif; ?>

      </th>
    </thead>
    <tbody>

      <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
      $edit=route('posts.edit',$row);
      ?>
      <?php $__env->startPush('outer'); ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.delete','data' => ['row' => $row,'action' => 'posts.destroy']]); ?>
<?php $component->withName('modal.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['row' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'action' => 'posts.destroy']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      <?php $__env->stopPush(); ?>
      <tr>
        <th>
          <button data-toggle="modal" data-target="#modal-delete-<?php echo e($row->id); ?>" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i>
          </button>

        </th>

        <td>
          <button onclick=" modal_src('modal-src','<?php echo e($edit); ?>') " class="btn btn-sm btn-icon btn-primary">
            <i class="ft ft-edit"></i>
          </button>
          <?php echo e($row->code); ?>

        </td>
        <td>
          <?php echo e($row->priority); ?>

        </td>
        <td>
          <div class="font-medium-1 text-bold-600" > <?php echo e($row->name); ?> </div>

          <div><?php echo e(Theme::title('at')); ?>: <?php echo e($row->created_at); ?></div>
         
        </td>

        <?php if($is=='post'): ?>
        <td>
          <?php echo e($row->category->name); ?>

        </td>
        <?php endif; ?>
        
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
</div><?php /**PATH D:\www\kp\resources\views/components/post/table.blade.php ENDPATH**/ ?>