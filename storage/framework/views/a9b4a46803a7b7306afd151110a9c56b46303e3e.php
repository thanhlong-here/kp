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

?>
<?php $__env->startPush('script'); ?>

<script>
  function changeState(sta, route) {
    data = new FormData();
    data.append("status", sta);
    data.append("_token", "<?php echo e(csrf_token()); ?>");
    $.ajax({
      data: data,
      type: "POST",
      url: route,
      cache: false,
      contentType: false,
      processData: false,
      success: function() {
        location.reload();
      },
      error: function(xhr, status, error) {
        console.log(status + ': ' + error);
      }
    });

  }
</script>
<?php $__env->stopPush(); ?>
<div class="mb-2">
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.searchall','data' => []]); ?>
<?php $component->withName('product.searchall'); ?>
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

      <th style="width:24rem">
        Name
      </th>
      <th>
        Category
      </th>



      <th>
        Freelancer
      </th>
      <th>
        <span class="float-xs-right">
          Price
        </span>
      </th>
      <th>

      </th>
    </thead>
    <tbody>

      <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
      $edit = route('products.edit',$row);
      $change = route("products.change",$row );
      $road = $row->category->road();
      $root = (count($road) == 1 ) ? $road[0] : end($road);
      ?>
      <?php $__env->startPush('outer'); ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'modal-xl mt-0','id' => 'trans_en_'.e($row->id).'']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'modal-xl mt-0','id' => 'trans_en_'.e($row->id).'']); ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.trans','data' => ['product' => $row,'lang' => 'en']]); ?>
<?php $component->withName('product.trans'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'lang' => 'en']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
       <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'modal-xl mt-0','id' => 'trans_kr_'.e($row->id).'']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'modal-xl mt-0','id' => 'trans_kr_'.e($row->id).'']); ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.trans','data' => ['product' => $row,'lang' => 'kr']]); ?>
<?php $component->withName('product.trans'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'lang' => 'kr']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
       <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      <?php $__env->stopPush(); ?>

      <tr>


        <td>
          <div class="font-medium-1 text-bold-600">
            <?php echo e($row->name); ?>

          </div>
          <div>
            <?php echo e(Theme::title('at')); ?> : <?php echo e($row->created_at); ?>

          </div>
          <div>

            <button class="btn  btn-secondary btn-sm" data-toggle="modal" data-target="#trans_en_<?php echo e($row->id); ?>">
              <i class="flag-icon flag-icon-gb"></i> <?php echo e(Theme::title('english')); ?></button>
            <button class="btn  btn-secondary btn-sm" data-toggle="modal" data-target="#trans_kr_<?php echo e($row->id); ?>">
              <i class="flag-icon flag-icon-kr"></i> <?php echo e(Theme::title('korean')); ?></button>

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



        <td><?php echo e($row->freelancer->name); ?></td>
        <td class="font-medium-1 text-bold-600">
          <span class="float-xs-right">
            <?php echo e(number_format($row->price)); ?>đ
          </span>
        </td>
        <td>

          <span class="tag tag-pill tag-success">
            <?php echo e($row->status); ?>

          </span>
          <?php switch($row->status):
          case ('publish'): ?>
          <button onclick="changeState('unpublish','<?php echo e($change); ?>' )" class="tag tag-pill">
            unpublish
          </button>
          <?php break; ?>
          <?php case ('preview'): ?>
          <button onclick="changeState('publish','<?php echo e($change); ?>' )" class="tag tag-pill">
            publish
          </button>
          <?php break; ?>
          <?php default: ?>
          <button onclick="changeState('publish','<?php echo e($change); ?>' )" class="tag tag-pill">
            publish
          </button>
          <?php endswitch; ?>
        </td>

      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

  </table>


  <div class="pull-right">
    <?php echo e($list->render('vendor.pagination.simple')); ?>


  </div>
</div><?php /**PATH D:\www\kp\resources\views/components/product/all.blade.php ENDPATH**/ ?>