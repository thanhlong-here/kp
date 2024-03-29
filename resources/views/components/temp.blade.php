@props([
  'id'    =>  uniqid('tmp_'),
  'accept'=>  'image/*',
  'name'  =>  'avatar',
  'src'   =>   '',
  ])

<div id="{{$id}}"  >
  
  <label>
    <img {{$attributes}}  src="{{ empty($src) ? asset('theme/images/upload.png') : $src }}" />
    <input type="file" class="none" accept="{{ $accept}}" name="{{$name}}">
  </label>

</div>
@push('x-script')

  temp('{{$id}}');
@endpush
