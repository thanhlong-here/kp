<?php $attributes = $attributes->exceptProps(['element']); ?>
<?php foreach (array_filter((['element']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>;
<?php $__env->startPush('script'); ?>
<script>
    $("#question_type_<?php echo e($element->id); ?>").change(function() {
        var val = $(this).val();
        if (val == 'text') {
            $("#multi_option_<?php echo e($element->id); ?>").hide();
            $("#attachment_option_<?php echo e($element->id); ?>").hide();
        }
        if (val == 'multi') {
            $("#multi_option_<?php echo e($element->id); ?>").show();
            $("#attachment_option_<?php echo e($element->id); ?>").hide();
        }
        if (val == 'attachment') {
            $("#multi_option_<?php echo e($element->id); ?>").hide();
            $("#attachment_option_<?php echo e($element->id); ?>").show();
        }

    });

    $("#add_new_opt_<?php echo e($element->id); ?>").click(function() {
        $("#option_ext_<?php echo e($element->id); ?>").append(
            "<div class='input-group mb-2'>" +
            "<input type='text' name='multi_op[]' class='form-control' placeholder='add option' />" +
            "<span onclick='$(this).parent().remove()' class='input-group-addon '> <i class='ft ft-x'></i> </span>" +
            "</div>"
        );
    });

    $("#question_type_<?php echo e($element->id); ?>").val("<?php echo e($element->type); ?>");
    $("#question_type_<?php echo e($element->id); ?>").trigger("change");
</script>

<?php $__env->stopPush(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => ''.e(route('elements.update',$element)).'','method' => 'PUT','class' => 'form card']]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => ''.e(route('elements.update',$element)).'','method' => 'PUT','class' => 'form card']); ?>
    <div class="card-block">
        <div class="form-group">
            <textarea name="name" rows="5" class="form-control" placeholder="<?php echo e(__('request necessary details such as dimensions,brand guidelines, and more')); ?>"><?php echo e($element->name); ?></textarea>
        </div>
        <div class="form-group mb-2">
            <div class="row">
                <div class="col-xs-6">
                    <label> <?php echo e(Theme::title('get it in a form of')); ?> : </label>

                </div>
                <div class="col-xs-6">
                    <select id="question_type_<?php echo e($element->id); ?>" name="question_type" class="form-control">
                        <option value="text"> <?php echo e(Theme::title('free text')); ?> </option>
                        <option value="multi"> <?php echo e(Theme::title('multiple choice')); ?> </option>
                        <option value="attachment"> <?php echo e(Theme::title('attachment')); ?> </option>
                    </select>
                </div>
            </div>

        </div>
        <div class="none" id="multi_option_<?php echo e($element->id); ?>">
            <div id="option_data">
                <?php if($element->type=='multi'): ?>
                <?php $__currentLoopData = $element->options['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($loop->index > 2 ): ?>
                <div class='input-group mb-2'>
                    <input type='text' name='multi_op[]' class='form-control' placeholder='add option' />
                    <span onclick='$(this).parent().remove()' class='input-group-addon '> <i class='ft ft-x'></i> </span>
                </div>
                <?php else: ?>
                <div class="form-group mb-2">
                    <input type="text" name="multi_op[]" value="<?php echo e($opt); ?>" class="form-control" placeholder="add option" />
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <div class="form-group">
                    <input type="text" name="multi_op[]" class="form-control" placeholder="add option" />
                </div>
                <div class="form-group">
                    <input type="text" name="multi_op[]" class="form-control" placeholder="add option" />
                </div>

                <?php endif; ?>
            </div>
            <div id="option_ext_<?php echo e($element->id); ?>" class="mb-2">

            </div>

            <div class="form-group row  mb-2">
                <div class="col-xs-8">
                    <label>
                        <input type="checkbox" name="is_multi" <?php echo e(isset($element->options['is_multi']) ? "checked" : ""); ?> />
                        <?php echo e(__('Enable to choose more than 1 option')); ?>

                    </label>
                </div>

                <div class="col-xs-4">
                    <button id="add_new_opt_<?php echo e($element->id); ?>" type="button" class="btn btn-secondary pull-right">+<?php echo e(Theme::title('add new option')); ?></button>
                </div>
            </div>
        </div>
        <div class="none" id="attachment_option_<?php echo e($element->id); ?>">
            <input type="file" name="attachment" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" />
        </div>


        <div class="card-footer">
            <div class="pull-right">
                <button class="btn  btn-secondary" data-dismiss="modal"><?php echo e(Theme::title('cancel')); ?></button>
                <button type="submit" class="btn btn-primary"><?php echo e(Theme::title('save')); ?></button>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/components/product/questions/edit.blade.php ENDPATH**/ ?>