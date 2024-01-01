<?php $attributes = $attributes->exceptProps([
'product',
]); ?>
<?php foreach (array_filter(([
'product',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php 
$requiment = $product->getRequiment();
?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['class' => 'form','action' => ''.e(route('products.update',$product)).'','enctype' => 'multipart/form-data','method' => 'PUT']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'form','action' => ''.e(route('products.update',$product)).'','enctype' => 'multipart/form-data','method' => 'PUT']); ?>
    <input name="step" value="requirement" type="hidden" />
    <div id="requirements" class="card">
        <div class="card-header">
            <h2> <?php echo e(Theme::title('requirements')); ?> </h2>
            <label class="text-bold-600"><?php echo e(__('Add questions to help buyes provide you with exactly what you need to start working on their')); ?> </label>
        </div>

        <div class="card-body">

            <h4 class="text-xs-center"> <?php echo e(Theme::title('Your questions')); ?></h4>

            <div class="card-block">

                <?php $__currentLoopData = $requiment->elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-group row mb-2">
                    <label class="pull-left font-medium-2 ">
                        <?php echo e($element->name); ?>

                    </label>
                    <button type="button" data-toggle="modal" data-target="#edit-question-<?php echo e($element->id); ?>" class="pull-right btn btn-sm btn-primary">
                        <i class="ft ft-edit"></i>
                    </button>
                    <button type="button" data-toggle="modal" data-target="#modal-delete-<?php echo e($element->id); ?>" class="pull-right mr-1 btn btn-sm btn-danger">
                        <i class="ft ft-x"></i>
                    </button>
                </div>
                <?php $__env->startPush('outer'); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'mt-0 h-100','style' => 'overflow: auto;','id' => 'edit-question-'.e($element->id).'']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mt-0 h-100','style' => 'overflow: auto;','id' => 'edit-question-'.e($element->id).'']); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.questions.edit','data' => ['element' => $element]]); ?>
<?php $component->withName('product.questions.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['element' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element)]); ?>
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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.delete','data' => ['row' => $element,'action' => 'elements.destroy']]); ?>
<?php $component->withName('modal.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['row' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($element),'action' => 'elements.destroy']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php $__env->stopPush(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="card-block">
                <button type="button" data-toggle="modal" data-target="#add_question" class="btn btn-secondary"> + <?php echo e(Theme::title('add new question')); ?> </button>
            </div>
        </div>

        <div class="card-footer">
            <div class="pull-right">
                <a href="<?php echo e(Theme::url(['tab'=>'description' ])); ?> " class="btn btn-secondary">
                    <?php echo e(Theme::title('back')); ?>

                </a>
                <a href="<?php echo e(Theme::url(['tab'=>'gallery' ])); ?> " class="btn btn-primary">
                    <?php echo e(Theme::title( 'continue' )); ?>

                </a>

            </div>
        </div>
    </div>
    <?php $__env->startPush('outer'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['class' => 'mt-0 h-100','style' => 'overflow: auto;','id' => 'add_question']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mt-0 h-100','style' => 'overflow: auto;','id' => 'add_question']); ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.questions.add','data' => ['requiment' => $requiment]]); ?>
<?php $component->withName('product.questions.add'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['requiment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($requiment)]); ?>
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
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/product/edit/requirement.blade.php ENDPATH**/ ?>