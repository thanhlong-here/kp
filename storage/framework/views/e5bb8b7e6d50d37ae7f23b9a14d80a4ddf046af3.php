<?php $attributes = $attributes->exceptProps([
'list',
'item' => null,
'prefix'=>null,
]); ?>
<?php foreach (array_filter(([
'list',
'item' => null,
'prefix'=>null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$path= empty($prefix) ? "categories.index" :"categories.prefix";

?>
<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-create']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-create']); ?>
    <div class="modal-content">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.category.edit','data' => ['title' => 'new category','id' => ''.e(isset($item) ? $item->id : 0).'','prefix' => ''.e($prefix).'','action' => 'categories.store']]); ?>
<?php $component->withName('category.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'new category','id' => ''.e(isset($item) ? $item->id : 0).'','prefix' => ''.e($prefix).'','action' => 'categories.store']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<div class="mb-2">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.category.search','data' => ['prefix' => ''.e($prefix).'']]); ?>
<?php $component->withName('category.search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['prefix' => ''.e($prefix).'']); ?>
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
                <?php if($item): ?>
                <a class="btn btn-sm btn-icon btn-info" href="<?php echo e(route($path,[$item->parent->prefix ?? $prefix,'id' => $item->parent_id])); ?>">
                    <i class="icon-action-undo"></i>
                </a>
                <?php endif; ?>
            </th>
            <th></th>
            <th>
                <?php echo e(Theme::title('code')); ?>

            </th>

            <th style="width:2rem">
                <?php echo e(Theme::title('priority')); ?>

            </th>
            <th>
                <?php echo e(Theme::title('name')); ?>

            </th>
            <th style="width:2rem">
                <button class="btn btn-sm  btn-primary" data-backdrop="false" data-toggle="modal" data-target="#modal-create">
                    <i class="ft ft-plus"> </i>
                    <?php echo e(__('Create')); ?>

                </button>
            </th>
        </thead>
        <tbody>

            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th>

                    <?php if($row->childs()->count() == 0): ?>

                    <button data-toggle="modal" data-target="#modal-delete-<?php echo e($row->id); ?>" class="btn btn-sm btn-icon btn-danger"><i class="ft ft-x"></i>
                    </button>
                    <?php endif; ?>

                </th>

                <td>
                    <a class="btn btn-sm btn-icon btn-info " href="<?php echo e(route($path,[$row->prefix,'id'=>$row->id])); ?>">
                        <i class="ft ft-grid"></i>
                    </a>
                    <button data-toggle="modal" data-backdrop="false" data-target="#modal-edit-<?php echo e($row->id); ?>" class="btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i>
                    </button>

                </td>
                <td>
                    <div><?php echo e($row->code); ?> </div>
                    <span class="tag tag tag-pill tag-info">
                        <?php echo e($row->prefix); ?>

                    </span>
                    <ul class="nav">
                        <?php $__currentLoopData = $row->extensions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ext): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ext->prefix): ?>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo e(route($path,[$ext->prefix,'id'=>$row->id])); ?>">
                                <i class="ft ft-plus-circle"></i><?php echo e($ext->prefix); ?>

                            </a>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </td>
                <td>
                    <?php echo e($row->priority); ?>

                </td>
                <td>
                    <?php echo e($row->name); ?>

                </td>
                <td>
                    <span class="tag tag tag-pill tag-success float-xs-right">
                        <a target="_blank" href="<?php echo e(url($row->haslink()->pretty)); ?>">
                            #Preview
                        </a>
                    </span>
                </td>
            </tr>
            <?php $__env->startPush('outer'); ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.delete','data' => ['row' => $row,'action' => 'categories.destroy']]); ?>
<?php $component->withName('modal.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['row' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'action' => 'categories.destroy']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'h-100','id' => 'modal-kr-'.e($row->id).'']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'h-100','id' => 'modal-kr-'.e($row->id).'']); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.category.tran','data' => ['category' => $row,'lang' => 'kr']]); ?>
<?php $component->withName('category.tran'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['category' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'lang' => 'kr']); ?>
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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'h-100','id' => 'modal-en-'.e($row->id).'']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'h-100','id' => 'modal-en-'.e($row->id).'']); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.category.tran','data' => ['category' => $row,'lang' => 'en']]); ?>
<?php $component->withName('category.tran'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['category' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'lang' => 'en']); ?>
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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-edit-'.e($row->id).'']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-edit-'.e($row->id).'']); ?>

                <div class="modal-content">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.category.edit','data' => ['category' => $row,'id' => ''.e(isset($item) ? $item->id : 0).'','prefix' => ''.e($row->prefix).'']]); ?>
<?php $component->withName('category.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['category' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($row),'id' => ''.e(isset($item) ? $item->id : 0).'','prefix' => ''.e($row->prefix).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php $__env->stopPush(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>


    </table>
    <div class="pull-right">
        <?php echo e($list->appends(request()->input())->render('vendor.pagination.simple')); ?>

    </div>
</div><?php /**PATH D:\www\kp\resources\views/components/category/table.blade.php ENDPATH**/ ?>