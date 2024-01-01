@props(['user'])

@php
$route  = $user->freelancer ? route('freelancers.products.index',$user->freelancer) : route('king');
@endphp
<div class="p-2 ">
<x-avatar :item="$user" />
  <a class=" btn btn-primary btn-block " href="{{$route}}">
      <i class="fa fa-exchange"></i>
      <span class="text-bold-600 "> {{ __('Freelancer') }} </span> </span>
    </a>
</div>

<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

  <li class="nav-item has-sub sub-order has-sub">

    <a href="#">
      <i class="icon-bag"></i>
      <span class="menu-title">{{ __('Quản lý đơn hàng') }} </span>
    </a>


    <ul class="menu-content">
      <li class="nav-item">
        <a href="{{ route('auth.orders',['user' => $user ,'open' => 'ordered']) }}" class="nav-link">
          <span class="menu-title">{{ __('Xem tất cả') }} </span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('auth.orders',['user' => $user,'state'=>'request' ,'open' => 'order']) }}" class="nav-link">

          <span class="menu-title">{{ __('Chờ điền yêu cầu') }} </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('auth.orders',['user' => $user,'state'=>'process' ,'open' => 'order']) }}" class="nav-link">

          <span class="menu-title">{{ __('Đang thực hiện') }} </span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('auth.orders', ['user' => $user,'state'=>'review' ,'open' => 'order']) }}" class="nav-link">
          <span class="menu-title">{{ __('Đã gửi') }} </span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('auth.orders',['user' => $user,'state'=>'edit' ,'open' => 'order']) }}" class="nav-link">
          <span class="menu-title">{{ __('Đang chỉnh sửa') }} </span>
        </a>
      </li>
     

      <li class="nav-item">
        <a href="{{ route('auth.orders',['user' => $user,'state'=>'finish' ,'open' => 'order']) }}" class="nav-link">
          <span class="menu-title">{{ __('Hoàn thành') }} </span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <span class="menu-title">{{ __('Cần đánh giá') }} </span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('auth.orders', ['user' => $user,'state'=>'canceled' ,'open' => 'order'] ) }}" class="nav-link">
          <span class="menu-title">{{ __('Hủy đơn') }} </span>
        </a>
      </li>

    </ul>
  </li>
  <li class="nav-item ">
    <a href="{{ route('auth.favorites',$user) }}" class="nav-link">

      <i class="icon-heart"></i>
      <span class="menu-title">{{ __('Yêu thích')  }} </span>
    </a>
  </li>

  <li class="nav-item ">
    <a href="{{ route('auth.rewards',$user) }}" class="nav-link">

      <i class="icon-present"></i>
      <span class="menu-title">{{ __('Giảm giá - Ưu đãi') }} </span>
    </a>
  </li>

  <li class="nav-item ">
    <a href="{{ route('auth.transactions',$user) }}" class="nav-link">

      <i class="icon-wallet"></i>
      <span class="menu-title">{{ __('Giao dịch') }} </span>
    </a>
  </li> 
</ul>