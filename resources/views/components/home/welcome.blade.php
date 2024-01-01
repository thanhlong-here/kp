@php
$ads = App\Models\Block::pull('home.ads')->first();
@endphp

<div class="container shadow box">
  <div class="row">
    <div class="col-md-3">
      <div class="card text-xs-center">
        <div class="card-header">
          <h2> {{__('Chào bạn')}} ! {{ Auth::user()->name }} </h2>

        </div>
        <div class="card-block">
          <div class="card-text font-medium-2">
            {{ __("Luôn có những đề nghị hấp dẫn từ cộng đồng cho dự án của bạn") }}
          </div>
        </div>
        <a href="{{route('request')}}" class="btn btn-primary block"> {{__('Gửi yêu cầu')}} </a>
      </div>
    </div>
    <div class="col-md-9">
      <div class="p-1">
        <a href="{{ empty($ads->link) ? '#' : url($ads->link) }}">
          @if(isset($ads->avatar))
          <img src="{{ asset($ads->avatar->src) }}" loading="lazy" class="img-fluid" />
          @endif
        </a>
      </div>
    </div>
  </div>

</div>