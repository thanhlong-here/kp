<?php $attributes = $attributes->exceptProps([
'query',
'total' => 12,
'freelancer',
]); ?>
<?php foreach (array_filter(([
'query',
'total' => 12,
'freelancer',
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
$create=route("freelancers.products.create",$freelancer);
?>

<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-src','style' => 'background-color: #F5F7FA;','class' => 'modal-xl mt-0 h-100']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-src','style' => 'background-color: #F5F7FA;','class' => 'modal-xl mt-0 h-100']); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<div class="mb-2">
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.search','data' => []]); ?>
<?php $component->withName('product.search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
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
      <th style="width:1rem">

      </th>
      <th style="width:1rem">

      </th>
      <th style="width:24rem">
        <?php echo e(__("Tên dịch vụ")); ?>

      </th>
      <th>
        <?php echo e(__("Danh mục")); ?>

      </th>



      <th style="width:2rem">
        <?php echo e(__("Trạng thái")); ?>

      </th>
      <th>
        <span class="float-xs-right">
          <?php echo e(__("Đơn giá")); ?>

        </span>
      </th>
      <th style="width:2rem">
        <button type="button" class="btn btn-sm  btn-primary" onclick="modal_src('modal-src','<?php echo e($create); ?>')" >
          <i class="ft ft-plus"> </i>
          <?php echo e(__('Tạo mới')); ?>

        </button>
      </th>
    </thead>
    <tbody>

      <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
      $edit = route('products.edit',$row);
      $road = $row->category->road();
     
      $root = (count($road) == 1 ) ? $road[0] : end($road);
      ?>

      <?php $__env->startPush('outer'); ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.delete','data' => ['row' => $row,'action' => 'products.destroy']]); ?>
<?php $component->withName('modal.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['row' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'action' => 'products.destroy']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      <?php $__env->stopPush(); ?>
      <tr>
        <td>
          <button data-toggle="modal" data-target="#modal-delete-<?php echo e($row->id); ?>" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i></button>
        </td>
        <td>

          <button onclick="modal_src('modal-src','<?php echo e($edit); ?>')" class="btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i></button>
        </td>
        <td>
          <div class="font-medium-1 text-bold-600">
            <?php echo e($row->name); ?>

          </div>
          <div>
            <?php echo e(Theme::title('at')); ?> : <?php echo e($row->created_at); ?>

          </div>
        </td>
        <td>
          <span class="tag tag-pill tag-info">
              <?php echo e($root->name ?? ''); ?> : : 
          </span>
          <span class="font-medium-1">
           <?php echo e($row->category->name); ?>

          </span>
        </td>



        <td><?php echo e($row->status); ?></td>
        <td class="font-medium-1 text-bold-600">
          <span class="float-xs-right">
            <?php echo e(number_format($row->price)); ?>đ
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
</div><?php /**PATH D:\www\kp\resources\views/components/product/table.blade.php ENDPATH**/ ?>