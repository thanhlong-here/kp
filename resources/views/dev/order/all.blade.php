@section('title')
<div class="content-header-left col-md-6 col-xs-12 mb-1">
  <h3 class="content-header-title">
    {{ __("Đơn đặt hàng") }}

  </h3>
</div>
@endsection


@section('content')

<div class="card">
  <div class="card-block">
    <x-order.all :query="$query" />
  </div>
</div>
@endsection

<x-layout.back />