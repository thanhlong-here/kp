@section('title')
<div class="content-header-title mb-2">
  <h2>
    {{ __('Hộp thư') }}
  </h2>
</div>
@endsection
@section('content')
<div class="content-body">
  <div class="card">
    <div class="card-block">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#inbox" aria-expanded="true">
            {{__('Hộp thư đến')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#sent" aria-expanded="false">{{__('Đã gửi')}}</a>
        </li>

      </ul>
      <div class="tab-content pt-1">

        <div role="tabpanel" class="tab-pane active" id="inbox" aria-expanded="true" aria-labelledby="base-tab1">

          <x-inbox.table :list="$inbox" :user="$user" />
        </div>
        <div class="tab-pane" id="sent" aria-labelledby="base-tab2" aria-expanded="false">

          <x-inbox.table :list="$sent" :user="$user" />
        </div>

      </div>


    </div>
  </div>
</div>
@endsection

<x-layout.auth :user="$user" />