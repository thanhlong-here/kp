<?php
$url_service_create = route('freelancers.products.create',$freelancer);

?>
<?php $__env->startPush('script'); ?>
<script>
  $('.pickadate').pickadate();
</script>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('outer'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-src','class' => 'modal-xl h-100 mt-0']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-src','class' => 'modal-xl h-100 mt-0']); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-description']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-description']); ?>
  <div class="modal-content">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.profile.intro','data' => ['freelancer' => $freelancer]]); ?>
<?php $component->withName('profile.intro'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['freelancer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer)]); ?>
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

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-edu-add']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-edu-add']); ?>
  <div class="modal-content">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.profile.edu.add','data' => ['freelancer' => $freelancer]]); ?>
<?php $component->withName('profile.edu.add'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['freelancer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer)]); ?>
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
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-exp-add']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-exp-add']); ?>
  <div class="modal-content">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.profile.exp.add','data' => ['freelancer' => $freelancer]]); ?>
<?php $component->withName('profile.exp.add'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['freelancer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer)]); ?>
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
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-cer-add']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-cer-add']); ?>
  <div class="modal-content">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.profile.cer.add','data' => ['freelancer' => $freelancer]]); ?>
<?php $component->withName('profile.cer.add'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['freelancer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer)]); ?>
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

<?php $__env->startSection('side'); ?>
<div class="card">
  <div class="card-block  text-xs-center box">
    <div class="media profil-cover-details">
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.avatar','data' => ['item' => $user]]); ?>
<?php $component->withName('avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    </div>
    <div class="block text-xs-center">
      <div class="p-1">
        <?php echo e($freelancer->job); ?>

      </div>
      <a class=" btn btn-info btn-block " href="<?php echo e(url($freelancer->link->pretty)); ?>">
        <i class="fa fa-eye"></i>
        <span class="text-bold-600 "> <?php echo e(__('Xem ở chế độ public')); ?> </span>
      </a>
    </div>

  </div>
</div>

<div class="card  box">
  <div class="card-header">
    <h4 class="card-title">
      <?php echo e(__('Mô tả')); ?>

    </h4>
    <div class="heading-elements">
      <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#modal-description"> <?php echo e(__('Chỉnh sửa')); ?> </button>
    </div>
  </div>
  <div class="card-body ">
    <?php if($freelancer->intro): ?>

    <div class="card-block">
      <?php echo $freelancer->intro; ?>

    </div>

    <?php endif; ?>
  </div>
</div>

<div class="card  box">
  <div class="card-header">
    <h4 class="card-title">
      <?php echo e(__('Giáo dục')); ?>

    </h4>
    <div class="heading-elements">
      <button type="button" class="btn btn-sm" data-target="#modal-edu-add" data-toggle="modal"> <?php echo e(__('Thêm')); ?> </button>
    </div>
  </div>
  <div class="card-body ">

    <div class="card-block">
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.profile.edu','data' => ['educations' => $freelancer->educations]]); ?>
<?php $component->withName('profile.edu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['educations' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer->educations)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>
  </div>
</div>
<div class="card  box">
  <div class="card-header">
    <h4 class="card-title">
      <?php echo e(__('Chứng nhận')); ?>

    </h4>
    <div class="heading-elements">
      <button type="button" class="btn btn-sm" data-target="#modal-cer-add" data-toggle="modal"> <?php echo e(__('Thêm')); ?> </button>
    </div>
  </div>
  <div class="card-body ">
    <div class="card-block">
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.profile.cer','data' => ['certs' => $freelancer->certificates]]); ?>
<?php $component->withName('profile.cer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['certs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer->certificates)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>
  </div>
</div>
<div class="card box">
  <div class="card-header">
    <h4 class="card-title">
      <?php echo e(__('Kinh nghiệm')); ?>

    </h4>
    <div class="heading-elements">
      <button type="button" class="btn btn-sm" data-target="#modal-exp-add" data-toggle="modal"> <?php echo e(__('Thêm')); ?> </button>
    </div>
  </div>
  <div class="card-body ">


    <div class="card-block">
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.profile.exp','data' => ['experiences' => $freelancer->experiences]]); ?>
<?php $component->withName('profile.exp'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['experiences' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer->experiences)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>


  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="content-body row">
  <div class="col-md-4 sid">
    <?php echo $__env->yieldContent('side'); ?>
  </div>
  <div style="z-index:99" class="offset-md-1 col-md-7">

    <?php if( empty($freelancer->job) || empty($freelancer->work_phone) || empty($freelancer->tax_code) || empty($freelancer->city_id) ): ?>
    <?php $__env->startPush('outer'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['id' => 'modal-start']]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'modal-start']); ?>
      <div class="modal-content">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.profile.register','data' => ['freelancer' => $freelancer]]); ?>
<?php $component->withName('profile.register'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['freelancer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($freelancer)]); ?>
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
    <div class="card box">
      <div class="card-block">
        <div class="pull-left">
          <?php echo e(__("Bắt đầu kinh doanh")); ?>

        </div>

        <button type="button" class="btn pull-right  btn-primary" data-target="#modal-start" data-toggle="modal">
          <i class="ft ft-plus"> </i>
          <?php echo e(__('Bắt đầu')); ?>

        </button>
      </div>


    </div>
    <?php else: ?>
    <?php if($query->count()): ?>
    <div class="card box">
      <div class="card-block">
        <div class="pull-left">
          <h4 id='service' class="card-title">
            <?php echo e(__('Dịch vụ')); ?>

          </h4>
        </div>

        <button type="button" class="btn pull-right  btn-primary" onclick="modal_src('modal-src','<?php echo e($url_service_create); ?>')">
          <i class="ft ft-plus"> </i>
          <?php echo e(__('Tạo mới')); ?>

        </button>
      </div>
    </div>
    <div class="card box">
      <ul class="nav nav-tabs nav-iconfall">
        <li class="nav-item">
          <a class="nav-link <?php echo e(request('tab') == 'publish' ? 'active' : ''); ?>" href="<?php echo e(Theme::url(['tab' => 'publish' ])); ?>"><?php echo e(__('Xuất bản')); ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(request('tab') == 'draft' ? 'active' : ''); ?> " href="<?php echo e(Theme::url(['tab' => 'draft' ])); ?>"><?php echo e(__('Nháp')); ?></a>
        </li>


      </ul>

      <div class="card-body">
        <?php if(request('tab') =='draft' ): ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.devlist','data' => ['query' => $query->whereStatus('draft'),'col' => '2']]); ?>
<?php $component->withName('product.devlist'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['query' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($query->whereStatus('draft')),'col' => '2']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php else: ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.product.devlist','data' => ['query' => $query->whereStatus('publish'),'col' => '2']]); ?>
<?php $component->withName('product.devlist'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['query' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($query->whereStatus('publish')),'col' => '2']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php endif; ?>

      </div>
    </div>

    <?php else: ?>

    <div class="card box">
      <div class="card-block">
        <div class="pull-left">
          <?php echo e(__("Chưa có dịch vụ nào thật sự hoạt động")); ?>

        </div>

        <button type="button" class="btn pull-right  btn-primary" onclick="modal_src('modal-src','<?php echo e($url_service_create); ?>')">
          <i class="ft ft-plus"> </i>
          <?php echo e(__('Tạo dịch vụ mới')); ?>

        </button>
      </div>


    </div>

    <?php endif; ?>
    <?php endif; ?>

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout.master','data' => []]); ?>
<?php $component->withName('layout.master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\www\kp\resources\views/auth/profile.blade.php ENDPATH**/ ?>