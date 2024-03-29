<!-- Revise 2/7/2021 -->

<ul class="nav navbar-nav float-xs-right">

    <li class="nav-item mr-2">
        <span class="avatar avatar-online">
            <img src="{{ asset('theme/images/portrait/small/avatar-s-1.png') }}" alt="avatar">
        </span>
        <span style="line-height: 2.2rem;">{{ Str::title(Auth::user()->name) }}</span>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('logout') }}">
            <i class="icon-power"></i>
            <span class="menu-title"> {{ Theme::title('logout') }}</span>
        </a>
    </li>

</ul>
