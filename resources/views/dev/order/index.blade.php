@section('title')

<div class="content-header-left col-md-6 col-xs-12 mb-1">
  <h3 class="content-header-title">
    {{ __("Đơn đặt hàng") }}

  </h3>
</div>

@endsection
@section('content')
<div class="card shadow">
  <div class="card-block">
    <x-order.table :query="$query" :freelancer="$freelancer" />
  </div>
</div>
@endsection

<x-layout.freelancer :freelancer="$freelancer" />