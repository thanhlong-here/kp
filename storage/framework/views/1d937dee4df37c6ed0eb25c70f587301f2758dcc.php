<?php $attributes = $attributes->exceptProps([
'id'=> 0,
'prefix'=>null,
'action'=>'categories.update',
'title' =>'edit category',
'category' => new App\Models\Category]); ?>
<?php foreach (array_filter(([
'id'=> 0,
'prefix'=>null,
'action'=>'categories.update',
'title' =>'edit category',
'category' => new App\Models\Category]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['enctype' => 'multipart/form-data','method' => ''.e($category->id ? 'PUT' :'POST').'','action' => ''.e(route($action,$category)).'']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['enctype' => 'multipart/form-data','method' => ''.e($category->id ? 'PUT' :'POST').'','action' => ''.e(route($action,$category)).'']); ?>
    <input type="hidden" name="parent_id" value="<?php echo e($id); ?>" />

    <div class="modal-header">
        <h4 class="pull-left" id="myModalLabel2"><i class="fa fa-road2"></i><?php echo e(Theme::title($title)); ?></h4>

        <div class="pull-right">

            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
    <div class="modal-body">
        <div class="card-block">

            <div class="row">
                <div class="col-xs-5 box">
                    <?php if(empty($category->avatar)): ?>
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
                    <?php echo e($category->avatar->src); ?>

                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.temp','data' => ['class' => 'img-fluid','src' => ''.e(asset($category->avatar->src)).'','style' => 'height:120px']]); ?>
<?php $component->withName('temp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'img-fluid','src' => ''.e(asset($category->avatar->src)).'','style' => 'height:120px']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="col-xs-7">
                <?php if($prefix): ?>
                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon">Prefix ( _extension) :</span>
                            <input type="text" name="prefix" class="form-control" value="<?php echo e($prefix); ?>" />

                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="form-group">

                        <div class="input-group ">
                            <span class="input-group-addon">Name :</span>
                            <input type="text" value="<?php echo e($category->name); ?>" placeholder="<?php echo e(Theme::title('name')); ?>" class="form-control" name="name" />
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon">Code :</span>
                            <input type="text" placeholder="<?php echo e(Theme::title('code')); ?>" value="<?php echo e($category->code); ?>" class="form-control" name="code" id="code" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon">Priority :</span>
                            <input type="number" name="priority" placeholder="priority" class="form-control" value="<?php echo e(empty($category->priority) ? 0 : $category->priority); ?>">
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="description" name="description" id="description"><?php echo e($category->description); ?></textarea>
            </div>
        </div>
    </div>

 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/category/edit.blade.php ENDPATH**/ ?>