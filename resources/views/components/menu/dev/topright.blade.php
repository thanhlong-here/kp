@php
$flags=[
'en' => ['english','flag-icon-gb'],
'vi' => ['vietnamese','flag-icon-vn'],
'kr' => ['korean','flag-icon-kr'],
];

$locale = $flags[App::getLocale()];
unset($flags[App::getLocale()]);


@endphp
<ul class="nav navbar-nav float-xs-right">

<li class="dropdown nav-item mr-1" >

    <a href="#" data-toggle='dropdown' class="dropdown-toggle nav-link">
      <i class='flag-icon {{$locale[1]}}'></i> </a>

    <div class="dropdown-menu  dropdown-menu-right">
      @foreach( $flags as $lang => $flag )
      <a class="dropdown-item" href="{{route('trans',$lang)}}">
        <i class='flag-icon {{ $flag[1] }}'></i> {{ Theme::title($flag[0]) }}</a>
      @endforeach

    </div>

  </li>
    <li class="nav-item mr-1">
        <span class="avatar avatar-online">
            <img src="{{ asset('theme/images/portrait/small/avatar-s-1.png') }}" alt="avatar">
        </span>
        <span style="line-height: 2.2rem;">{{ Str::title(Auth::user()->name) }}</span>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('logout') }}">
            <i class="icon-power"></i>
            <span class="menu-title">  {{  Theme::title('logout')  }}</span>
        </a>
    </li>
   
</ul>