@php
$user= Auth::user();
$avatar = empty($user->avatar) ? asset('theme/images/portrait/small/avatar-s-4.png') : asset($user->avatar->src);
@endphp
<x-block style="overflow: auto;" class="app-w bg-primary p-1 mb-3 line-bot">

  <div class="media profil-cover-details pull-left">
    <label class="profile-image mr-1">
      <img src=" {{ $avatar }}" style="width:80px; height:80px" class="shadow rounded-circle img-border">
    </label>

  </div>
  <div class="pull-left">
    <p class="black font-medium-2 text-bold-600">
      {{ empty($user) ? 'Guest' :  $user->name }}
    </p>
    <p>
      {{ empty($user) ? __('King Pang chào bạn') :  __("Chào")."! $user->name" }}
    </p>
  </div>
  @auth
  <div class="pull-right top-0 right-0 sm:block">
    <a href="{{route('app.logout')}}">{{Theme::title('logout')}}</a>
  </div>

  @endauth
</x-block>
@auth

<x-block class="content-header">
  <h4> {{__('My KingPang')}} </h4>
</x-block>
<x-block class="section  mb-3 ">
  <ul class="nav nav-bar">
    <li class="line-bot p-1 nav-item">
      <x-app.open class="tab-row" route="{{route('app.favorites',$user)}}">


        {{ __('Lưu trữ') }}
      </x-app.open>

    </li>


    <li class="line-bot p-1 nav-item">
      <x-app.open class="tab-row" route="{{route('app.orders',$user)}}">

        {{ __('Quản lý đơn hàng') }}
      </x-app.open>


    </li>

  </ul>
</x-block>


@else
<x-block class="section  mb-3 ">
  <ul class="nav nav-bar">
    <li class="line-bot p-1 nav-item">

      <label class="touch w-100" data-toggle="modal" data-target="#modal-login">

        <i class="icon-plus"> </i> {{ __('Đăng nhập') }}

      </label>
    </li>

  </ul>
</x-block>

@endauth

<x-block class="content-header">
  <h4> {{__('Cài đặt chung')}} </h4>
</x-block>

<x-block class="section  mb-3 ">
  <ul class="nav nav-bar">
    <li class="line-bot p-1 nav-item">
      <div data-toggle="modal" data-target="#modal-lang" class="touch tab-row">

        {{ __('Ngôn ngữ') }}
      </div>
    </li>

    @foreach(['privacy-policy','term-use','term-payment'] as $code )
    @php
    $post = Post::findCode($code);
    @endphp
    @push('outer')
    <x-modal class="app-w m-0" id="general-{{$code}}">
      <x-app.static :post="$post" />
    </x-modal>
    @endpush
    @if($post)
    <li class="line-bot p-1 nav-item">
      <div data-toggle="modal" data-target="#general-{{$code}}" class="touch tab-row">

        {{ Theme::title($post->name) }}
      </div>
    </li>
    @endif
    @endforeach

  </ul>
</x-block>

@push('outer')
<x-modal class="ml-0 bot-0" id="modal-lang">
  <x-app.lang />
</x-modal>

@endpush