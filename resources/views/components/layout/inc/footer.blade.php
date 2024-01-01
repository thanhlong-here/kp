@php
  $address = "Tầng 1, A3.1 Khu dân cư The Everich 3, đường Phú Thuận, Phường Tân Phú, Quận 7, Thành phố Hồ Chí Minh, Việt Nam";
  $name    =  "CÔNG TY TNHH MTV LATH GROUP";
  $tel     =  "+84. 932776062";
  $email   =  "info@kingpang.vn";
  $worktime=  __("Từ") ."9:00 ".__("Tới")." 18:00";
  $right   =  "Copyright @ 2021 kingpang lnc. All rights reserved";
  $abouts  =[
    url('about')    =>  'Giới thiệu',
    url('blog')     =>  'Blog',
    url('careers')  =>  'Nghề nghiệp',
  ];

  $customers  = [
    url(Post::findCode('term-use')->link->pretty) => 'Điều khoản sử dụng',
    url(Post::findCode('term-payment')->link->pretty) => 'Điều khoản thanh toán',
    url(Post::findCode('privacy-policy')->link->pretty) => 'Chính sách riêng tư',
    url('review') =>  'Đánh giá',
    url('faq')  =>  'Câu hỏi thường gặp',
  ];

  $qrcode = url('media\image\app-kingpang.png');

  $store  = [
    "https://play.google.com/store/apps/details?id=com.kingpang.kpapp"  =>  asset('theme\images\logo\app-google.png'),
    "#" =>   asset('theme\images\logo\app-apple.png')
  ];

  $social= [
      "https://www.facebook.com/KINGPANGVN/" =>  asset('theme\images\logo\facebook.png'),
      "#youtube" =>  asset('theme\images\logo\youtube.png'),
      "#zalo" =>  asset('theme\images\logo\zalo.png'),
  ];
@endphp

<x-block tag="footer" id="footer" class="footer footer-static footer-light navbar-border mb-2">
    <div class="container">
        <div class="row mt-2">
          <div class="col-md-4">
              <x-logo />

            <div class="card-body mt-2">

              <div class="mb-1 font-medium-2 text-bold-600">{{$name}}</div>
              <div class="mb-1">{{__('Địa chỉ')}} : <span class="text-bold-600"> {{ $address }} </span></div>
              <div class="row mb-1">
                <label class="col-xs-5"> {{__('Số điện thoại')}} :</label> <span class="text-bold-600">{{ $tel }}</span> 
              </div>

              <div class="row">
                <label class="col-xs-5">Email:</label> <span class="text-bold-600">{{ $email }}</span> 
              </div>

            </div>
          </div>
          <div class="col-md-2">
            <h4 class="text-bold-600" >{{__('Về KingPang')}} </h4>

            <ul class="nav navbar row">
              @foreach($abouts as $link=>$name)
                  <li class="nav-item">
                    <a href="{{ $link }}"
                    class="nav-link">{{ Theme::title($name) }} </a>
                  </li>
              @endforeach
            </ul>
            <div class="li-t">
              <h4 class="mt-1"> {{ __('Thời gian làm việc')}}  </h4>
              <div>{{$worktime}}</div>
            </div>
          </div>
          <div class="col-md-3">
              <h4 class="text-bold-600">
                {{ __('Hỗ trợ khách hàng')}}
              </h4>
              <ul class="nav navbar row">
                @foreach($customers as $link=>$name)
                    <li class="nav-item">
                      <a href="{{ $link }}" class="nav-link">
                        {{ Theme::title($name) }}
                      </a>

                    </li>
                @endforeach
              </ul>

          </div>
          <div class="col-md-3">
            <h4 class="text-bold-600 mb-2" >
              {{ __('Tải ứng dụng')}}
            </h4>
            <div class="row mb-1">
              <div class="col-xs-5">
                <img loading="lazy" class="img-fluid" src="{{ $qrcode }}" />
              </div>
              <div class="col-xs-7">
                @foreach( $store as $link=> $name)
                    <a href="{{$link}}">
                        <img loading="lazy" src="{{ $name }}" />
                    </a>
                @endforeach
              </div>
            </div>
            <div class="li-t">
              <div class="mt-1">
                  <h4 tag="mr-2" class="text-bold-600">
                    {{ __('Theo dõi chúng tôi')}} </h4>
                  @foreach( $social as $link=> $name)
                    <a target="_blank" href="{{$link}}">
                        <img loading="lazy" class="ic" src="{{ $name }}" />
                    </a>
                  @endforeach

              </div>
            </div>

          </div>

        </div>
    </div>
    <div class="container-fluid line-t">
      <div class="p-1 text-xs-center">
        {{__($right)}}
      </div>
    </div>
</x-block>
