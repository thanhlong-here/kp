@php
$flags=[
'en' => ['english','flag-icon-gb'],
'vi' => ['vietnamese','flag-icon-vn'],
'kr' => ['korean','flag-icon-kr'],
];

$locale = $flags[App::getLocale()];
unset($flags[App::getLocale()]);

@endphp
<div class="app-w bg-white">
  <div class="card-block">
    @foreach( $flags as $lang => $flag )
    <div class="form-group">
      <a href="{{route('trans',$lang)}}" class="btn btn-primary white block">
        <i class='flag-icon {{ $flag[1] }}'></i> <span class="ml-1">
          {{ Theme::title($flag[0]) }} </span>

      </a>
    </div>

    @endforeach

  </div>
</div>