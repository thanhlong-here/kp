@section('title')
<div class="content-header-title mb-2">
  <h2>
    {{ __('Dịch vụ yêu thích') }}
  </h2>
</div>
@endsection
@section('content')
<div class="content-body">
@if($query->count())
    <div class="p-1 shadow">
    <x-product.list :query="$query" />
    </div>
@else 
  <x-notfound />
@endif
</div>  
@endsection

<x-layout.auth :user="$user" />