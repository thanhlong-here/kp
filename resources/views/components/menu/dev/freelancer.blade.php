@props(['freelancer'])

<div class="p-2 profile-card-with-cover text-xs-center">
  <x-avatar :item="$freelancer" type="freelancer" />
  <a class=" btn btn-primary btn-block " href="{{route('auth.favorites',$freelancer->user)}}">
    <i class="fa fa-exchange"></i>
    <span class="text-bold-600 "> {{ __('Người dùng') }} </span> </span>
  </a>
</div>

<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
  <li class="nav-item">


  </li>
  <li class="nav-item ">
    <a href="#">
      <i class="icon-home"></i> <span class="menu-title">{{ __('Dashboard')  }}</span>
    </a>
  </li>
  <li class="nav-item ">
    <a href="{{ route('freelancers.products.index',$freelancer)}}">
      <i class="icon-social-dropbox"></i> <span class="menu-title">{{ __('Dịch vụ của tôi')  }}</span>
    </a>
  </li>
  <li class="nav-item sub-order has-sub">
    <a href="{{ route('dev.index')  }}">
      <i class="icon-bar-chart"></i>
      <span class="menu-title">{{ __('Quản lý bán hàng')  }}</span>
    </a>
    <ul class="menu-content">
      <li class="nav-item">
        <a href="{{ route('freelancers.orders.index',[$freelancer,'open'=>'order']) }}">
          <span class="menu-title">{{ __('Tất cả đơn hàng')  }}</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('freelancers.orders.index',[$freelancer,'state'=>'request' ,'open' => 'order']) }}" class="nav-link">
          <span class="menu-title">{{ __('Chờ điền yêu cầu') }} </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('freelancers.orders.index',[$freelancer,'state'=>'paid','open'=>'order']) }}">
          <span class="menu-title">{{ __('Chờ xác nhận')  }}</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('freelancers.orders.index',[$freelancer,'state'=>'proccess','open'=>'order']) }}">
          <span class="menu-title">{{ __('Đang thực hiện') }}</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('freelancers.orders.index',[$freelancer,'state'=>'review','open'=>'order']) }}">
          <span class="menu-title">{{ __('Đã gửi')  }}</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('freelancers.orders.index',[$freelancer,'state'=>'edit','open'=>'order']) }}">
          <span class="menu-title">{{ __('Cần chỉnh sửa')  }}</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('freelancers.orders.index',[$freelancer,'state'=>'finish','open'=>'order']) }}">
          <span class="menu-title">{{ __('Hoàn thành')  }}</span>
        </a>
      </li>
     

      <li class="nav-item">
        <a href="{{ route('freelancers.orders.index',[$freelancer,'state'=>'canceled','open'=>'order']) }}">
          <span class="menu-title">{{ __('Đã hủy')  }}</span>
        </a>
      </li>


    </ul>

  </li>

</ul>