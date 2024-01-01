@props([
'user'=>null,
])
@php
$flags=[
'en' => ['english','flag-icon-gb'],
'vi' => ['vietnamese','flag-icon-vn'],
'kr' => ['korean','flag-icon-kr'],
];

$locale = $flags[App::getLocale()];
unset($flags[App::getLocale()]);


@endphp
@once

@push('script')

<script>
  $('.inbox').mouseover(function() {
    var inbox = $(this).children(".inbox-show");
    inbox.show();
  });
  $('.inbox-show').mouseout(function() {
    $(this).hide();
  });
</script>

@endpush

@endonce
<ul class="nav navbar-nav font-medium-2 float-xs-right text-bold-400">
  <li class="dropdown nav-item">
    <a href="{{ url(Category::findCode('blog')->link->pretty) }}" class="nav-link"> {{ __('Khám phá') }}</a>
   
  </li>


  @if(isset($user))
  <li class="inbox nav-item ml-2">
    <a href="#" class="nav-link">
      {{ __('Tin nhắn') }}
    </a>
    <div class="inbox-show shadow">
      <x-user.inbox-board :user="$user" />

    </div>

</li>

  <li class="nav-item ml-2">
    <a href="{{ route('auth.orders',$user) }}" class="nav-link">
      {{ __('My KingPang') }}
    </a>

  </li>


  <li class="dropdown  nav-item ml-2">
    <a href="#" data-toggle="dropdown" class="nav-link">
      @if($user->avatar)
      <img loading="lazy" class="x32 round avatar-online" src="{{ url($user->avatar->src) }} " />
      @else
      <img loading="lazy" class="x32 round avatar-online" src="{{ asset('theme/images/portrait/small/avatar-s-1.png') }} " />
      @endif

    </a>
    <ul class="dropdown-menu dropdown-menu-right">
    <li class="dropdown-item">
        <a href="{{ route('auth.profile',$user) }}" class="nav-link">
          {{ __('Tài khoản cá nhân') }}
        </a>

      </li>
      @if(isset($user->freelancer) )
      <li class="dropdown-item">
        <a href="{{route('freelancers.products.index',$user->freelancer)}}" class="nav-link"> {{ __('Làm Freelancer') }} </a>
      </li>
      @else
      <li class="dropdown-item">
        <a href="{{route('king')}}" class="nav-link"> {{ __('Trở thành Freelancer') }} </a>
      </li>
      @endif
     
      <li class="dropdown-item">
        <a href="{{route('auth.settings',$user)}}" class="nav-link">
          {{ __('Thiết lập') }}
        </a>

      </li>
      <li class="dropdown-item line-t">
        <a href="{{route('logout')}}" class="nav-link"> {{ __('Thoát') }} </a>
      </li>
    </ul>
  </li>
  @else
  <li class="nav-item ml-2">
    <a href="{{route('king')}}" class="nav-link"> {{ __('Trở thành Freelancer') }} </a>
  </li>
  <li class="nav-item ml-2 box pl-1 pr-1">
    <a href="#" data-backdrop="false" data-toggle="modal" data-target="#modal-login" class="nav-link">
      {{ __('Đăng nhập') }}
    </a>


  </li>
  @endif
  <li class="dropdown nav-item ml-2" >

    <a href="#" data-toggle='dropdown' class="dropdown-toggle nav-link">
      <i class='flag-icon {{$locale[1]}}'></i> </a>

    <div class="dropdown-menu  dropdown-menu-right">
      @foreach( $flags as $lang => $flag )
      <a class="dropdown-item" href="{{route('trans',$lang)}}">
        <i class='flag-icon {{ $flag[1] }}'></i> {{ Theme::title($flag[0]) }}</a>
      @endforeach

    </div>

  </li>
</ul>