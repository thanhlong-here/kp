@section('title')
<div class="content-header-title mb-2">
  <h2>
    {{ __('Đơn đặt hàng') }}
  </h2>
</div>
@endsection

@section('content')

<div class="content-body">
  <div class="card">
    <div class="card-block">
      <x-order.authtable :query="$query" />
    </div>
  </div>

  <div class="card">

    <h2>{{ __('Ghi chú') }} : </h2>
    <blockquote class="border-left-amber border-left-3 mt-1">
     {!! Block::wherePrefix('note')->whereCode('order')->first()->tran->content !!}
    </blockquote>
  </div>
</div>
@endsection

<x-layout.auth :user="$user" />