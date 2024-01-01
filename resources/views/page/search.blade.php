
@section('content')
<div class="container">
  
  <div class="content-body">
    <x-product.filter />
    <x-product.list :query="$query" col=4 total=12 />
  
  </div>
</div>
@endsection
<x-layout.master />