<?php $attributes = $attributes->exceptProps([
'id'=>uniqid('editor_'),
'mode'=>'simple',
'name'=>'content',
'height'=>280
]); ?>
<?php foreach (array_filter(([
'id'=>uniqid('editor_'),
'mode'=>'simple',
'name'=>'content',
'height'=>280
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php $__env->startPush('script'); ?>
<script>
  $('#<?php echo e($id); ?>').summernote({
    height: <?php echo e($height); ?>, // set editor height
    minHeight: null, // set minimum height of editor
    maxHeight: null, // set maximum height of editor

    toolbar: [
      // [groupName, [list of button]]
      <?php if($mode == 'editor'): ?>['insert', ['link', 'picture', 'video']],
      <?php endif; ?>['style', ['bold', 'italic', 'underline', 'clear']],
      ['font', ['strikethrough', 'superscript', 'subscript']],
      ['fontsize', ['fontsize']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['height', ['height']]
    ],
    popover: {
      image: [
        ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
        ['float', ['floatLeft', 'floatRight', 'floatNone']],
        ['remove', ['removeMedia']]
      ],
    },
    callbacks: {
      onImageUpload: function(files, editor, welEditable) {
        data = new FormData();
        for (var x = 0; x < files.length; x++) {
          data.append("images[]", files[x]);
        }
        data.append("_token", "<?php echo e(csrf_token()); ?>");
        $.ajax({
          data: data,
          type: "POST",
          url: "<?php echo e(route('editor.imgupload')); ?>",
          cache: false,
          contentType: false,
          processData: false,

          success: function(urls) {
            if (urls.length > 0) {
              urls.filter(el => Object.keys(el).length).map((url) => {
                $('#<?php echo e($id); ?>').summernote('editor.insertImage', '<?php echo e(asset("media")); ?>/'+ url);
              })
            }
          },
          error: function(xhr, status, error) {
            console.log(status + ': ' + error);
          }
        });
      }
    }
  });
</script>
<?php $__env->stopPush(); ?>
<textarea id="<?php echo e($id); ?>" name="<?php echo e($name); ?>"><?php echo e($slot); ?></textarea><?php /**PATH D:\www\kp\resources\views/components/editor.blade.php ENDPATH**/ ?>