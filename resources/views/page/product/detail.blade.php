@php
$rows = [
'description'=> ['title' => 'Mô tả'],
'delivery'=> ['title' => 'Thời gian bàn giao'],
'revision'=> ['title' => 'Số lần chỉnh sửa'],
];
$push = 'page.product.detail.push';
$tabs = [
'description' => ['title' => 'Mô tả'],
'price' => ['title' => 'So sánh giá'],
'recommendations' => ['title' => 'Gợi ý'],
'review' => ['title' => 'Đánh giá']
];
@endphp
@include($push,['active' => 'active'])
@foreach( $packs as $product)
@include($push)
@endforeach

@push('script')
<script>
  $(window).scroll(function() {

    if (window.pageYOffset > 240) {
      $('#stick_tab').removeClass("none");
      $('#menu-service').addClass("none");
    } else {
      $('#stick_tab').addClass("none");
      $('#menu-service').removeClass("none");
    }
  });
  $("#overview a[href^=#]").click(function(e) {

    if (this.hash !== "") {
      e.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 200,
      }, 800);
      $("#overview .nav-link").removeClass("active");
      $(this).addClass("active");
    } // End if
  });
</script>
@endpush
@push('css')
<style>
  .box-image {
    height: 360px;
  }
</style>
@endpush
@push('outer')
<x-modal.contact :freelancer="$freelancer" />
@endpush
@push('sticky')
<div id="stick_tab" class="container-fluid none shadow line-b">

  <div class="container text-bold-600">
    <ul id="overview" class="nav row nav-tabs nav-underline no-hover-bg">
      <li class="nav-item">
        <a class="nav-link font-medium-2 active" href="#tab-overview">
          {{ __('Tổng quan') }}
        </a>
      </li>
      @foreach($tabs as $tab => $info)
      <li class="nav-item ml-1 mr-1">
        <a class="nav-link font-medium-2 " href="#tab-{{ $tab }}">
          {{ __($info['title']) }}
        </a>
      </li>
      @push('tab-content')
      <div class="card pt-2 pb-2">
        <h3 id="tab-{{ $tab }}" class="card-title">
          {{ __($info['title']) }}
        </h3>
        <div class="card-block box">
          @include("page.product.detail.tab-$tab")
        </div>
      </div>
      @endpush
      @endforeach
    </ul>
  </div>
</div>
@endpush

@section('title')
<x-product.breadcrumb :product="$product" />
@endsection

@section('content')
<h3 id="tab-overview" class="card-title text-justify text-bold-600">
  {{ $product->name }}
</h3>
<div class="card pb-2">

  @if($product->avatar)
  <div class="box-image shadow lazy" data-bg-img='{{ asset($product->avatar->src) }}'></div>
  @endif

</div>

@stack('tab-content')
@endsection
@section('side')
<div class="card ">
  <div class="card-body">
    <ul class="nav nav-tabs flex  nav-top-border no-hover-bg">
      @stack("pack-header")
    </ul>
    <div class="tab-content px-1 pt-1 ">
      @stack("pack-body")



      <div class="text-xs-center pt-1 pb-1">
        <a href='#price' class="btn btn-secondary btn-block  text-bold-600 font-medium-2">
          {{ __('So sánh giá') }} </a>
      </div>
    </div>
  </div>
  <div class="card-footer">
    <div class=" media profil-cover-details">
      <div class="media-left">
        @if($freelancer->avatar)
        <a href="{{ url($freelancer->link->pretty) }}" class="profile-image">
          <img class="rounded-circle img-border x100" src="{{ url($freelancer->avatar->src) }}" />
        </a>
        @endif
      </div>
      <div class="media-body media-middle">
        <a href='{{ url($freelancer->link->pretty) }}'>
          <h4 id="profile" class="card-tile">
            {{ $freelancer->name }}
          </h4>
          <p> {{ $freelancer->job }}</p>
        </a>

        @auth
        @php
        $iframe = route('auth.chat.with',[Auth::user(),$freelancer->user])
        @endphp
        <button class="btn btn-primary btn-block oframe" data-src="{{$iframe}}" data-target="#mess"> {{ __('Liên hệ với tôi') }}</button>

        @else
        <button class="btn btn-primary btn-block" data-backdrop="false" data-toggle="modal" data-target="#modal-login"> {{ __('Liên hệ với tôi') }}</button>

        @endauth
      </div>
    </div>
    <div>{!!$freelancer->intro!!}</div>

  </div>
</div>

@endsection
<x-layout.master side="detail-right" />