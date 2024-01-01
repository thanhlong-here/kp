@section('title')
<div class="content-header-title mb-2">
  <h2>
    {{ __('Thống kê giao dịch') }}
  </h2>
</div>
@endsection
@section('content')
<div class="content-body">
  <div class="card shadow">
       <x-notfound />
  </div>
</div>  
@endsection

<x-layout.auth :user="$user" />