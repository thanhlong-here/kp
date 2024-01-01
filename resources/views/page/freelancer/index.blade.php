@push('outer')
<x-modal.contact :freelancer="$freelancer" />
@endpush
@push('script')


@section('side')
<div class="card">
  <div class="card-block  text-xs-center box">
    <div class="media profil-cover-details">
      @if($freelancer->avatar)
      <img loading="lazy" class="rounded-circle img-border x100" src="{{ url($freelancer->avatar->src) }}" />
      @endif
      <h3 class="card-title mt-1">
        {{ $freelancer->name }}
      </h3>
    </div>
    <div class="block">
      <span class="font-medium-2 mr-1">
        <x-star />
      </span>

      <label class="text-bold-600 font-medium-2">
        5.0 / 969 {{__('Đánh giá')}}
      </label>
    </div>

    @auth
    @php
    $iframe = route('auth.chat.with',[Auth::user(),$freelancer->user])
    @endphp
    <button class="btn btn-primary btn-block oframe"  data-src="{{$iframe}}" data-target="#mess"> {{ __('Liên hệ với tôi') }}</button>
  
    @else
    <button class="btn btn-primary btn-block" data-backdrop="false" data-toggle="modal" data-target="#modal-login"> {{ __('Liên hệ với tôi') }}</button>

    @endauth

  </div>
</div>

<div class="card">
  <div class="card-header row">
    <h4 id="intro" class="card-title">
      {{__('Giới thiệu')}}
    </h4>
  </div>
  <div class="card-block box">
    {!!$freelancer->intro!!}
  </div>
</div>
@endsection
@section('content')
<div class="card">
  <div class="card-header row">
    <h4 id='service' class="card-title">
      {{__('Dịch vụ')}}
    </h4>
  </div>
  <div class="card-body">

    <x-product.list :query="$query" col='2' />
  </div>
</div>

<div class="card">
  <div class="card-header row">
    <h4 id='review' class="card-title">
      {{ __('Đánh giá') }}"
    </h4>

    <span class="font-medium-2 mr-1">
      <x-star />
    </span>
  </div>

  <div class="card-block box">

    <div class="card-title">
      {{ __('Chưa có bình luận') }}
    </div>

  </div>

</div>
@endsection
<x-layout.master side="detail-left" />