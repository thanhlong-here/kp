<div class="service">

    <div class="form-group row mb-2">


        <div class="col-xs-8">
            <select wire:model='service_id' wire:change="serviceSelected" class="form-control input-lg">
                <option value="0">-- <?php echo e(Theme::title('select service')); ?> --</option>
                <?php $__currentLoopData = $this->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

        </div>
    </div>
    <?php if(isset($categories) && $categories->count()): ?>
    <div class="form-group row mb-2">
        <div class="col-xs-4">

            <label class="font-medium-2 "><?php echo e(Theme::title('category')); ?> :</label>


        </div>
        <div class="col-xs-8">
            <select name="category_id" wire:model='category_id' wire:change="categorySelected" class="form-control input-lg">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <?php if(isset($types) && $types->count()): ?>
    <div class="form-group row mb-2">
        <div class="col-xs-4">
            <label class="font-medium-2 "><?php echo e(Theme::title('service type')); ?> :</label>


        </div>
        <div class="col-xs-8">

            <select name="type_id" wire:model='type_id' class="form-control input-lg">
                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

        </div>
    </div>
    <?php endif; ?>

    <?php if( isset($metadatas) && $metadatas->count()): ?>
    <div class="form-group">

        <label class="font-medium-2 "><?php echo e(Theme::title('meta data')); ?> :</label>
        <div class="nav-vertical">
            <ul class="nav nav-tabs nav-left">
                <?php $__currentLoopData = $metadatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li class="nav-item">
                    <a class="nav-link <?php echo e($loop->first ? 'active' : ''); ?> " data-toggle="tab" href="#tab-<?php echo e($meta->id); ?>"> <?php echo e($meta->name); ?> </a>
                </li>
                <?php $__env->startPush('tab-panel'); ?>
                <div class="tab-pane <?php echo e($loop->first ? 'active' : ''); ?>" id="tab-<?php echo e($meta->id); ?>">
                    <p>
                        <?php echo e($meta->name); ?>

                    </p>

                    <?php if(isset($meta_options)): ?>
                        <?php $__currentLoopData = $meta->childs()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                     
                        <fieldset class="checkbox">
                            <label>
                                <input type="checkbox" name="meta[]"
                                     <?php echo e(in_array($option->id,$meta_options) ? 'checked' :''); ?> value="<?php echo e($option->id); ?>" />

                                <?php echo e($option->name); ?>

                            </label>
                        </fieldset>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                   
                        <?php $__currentLoopData = $meta->childs()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <fieldset class="checkbox">
                            <label>
                                <input type="checkbox" name="meta[]" value="<?php echo e($option->id); ?>" />

                                <?php echo e($option->name); ?>

                            </label>
                        </fieldset>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>


                </div>
                <?php $__env->stopPush(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="tab-content px-1">
                <?php echo $__env->yieldPushContent('tab-panel'); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div><?php /**PATH D:\www\kp\resources\views/livewire/category/service.blade.php ENDPATH**/ ?>