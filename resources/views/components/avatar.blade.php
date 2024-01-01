@props([
'item',
'type' => 'user'
])
@php
$avatar = ($type=='user') ? asset('theme/images/avatar/user.png') : asset('theme/images/avatar/king.png');
@endphp

<div class="profile-card-with-cover text-xs-center">
  <div style="margin:auto;" class="profile-avatar card-profile-image width-100 mb-2">

    <div style="position:absolute;margin-top:-.2rem;width:120px">
      <p class="btn btn-info btn-sm round pull-right">
        {{$type}}
      </p>
    </div>
    <label>
      <img src="{{ ($item->avatar) ? asset($item->avatar->src) : $avatar }}" loading='lazy' class="width-100 height-100 rounded-circle img-border box-shadow-1">
      <input type="file" class="none" accept="image/*" name="avatar">
    </label>
  </div>
  <h2 class="text-bold-600">
    {{ $item->name }}
  </h2>
</div>

@push('script')
<script>
  $('.profile-avatar input[type=file]').change(function() {
    var files = $(this)[0].files;
    var avatar= $(this).closest('label').find('img');
    hi = 'hello';
    if (files.length > 0) {
      data = new FormData();
      data.append("_token", "{{ csrf_token() }}");
      data.append('avatar', files[0]);

      $.ajax({
        data: data,
        type: "POST",
        url: "{{ route('avatar.change') }}",
        cache: false,
        contentType: false,
        processData: false,

        success: function(src) {
         
          $(avatar).attr('src',src); 
        },
        error: function(xhr, status, error) {
          console.log(status + ': ' + error);
        }
      });
    }

  });
</script>
@endpush