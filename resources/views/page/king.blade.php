@php
$list = App\Models\Block::pull('join.comunity','list')->orderByDesc('priority')->get();
$banner = App\Models\Block::pull('king.join')->orderByDesc('priority')->first();

@endphp

@push('css')
<link href="{{asset('theme/css/home.css')}}" rel="stylesheet">
<style>
  .ph {
    padding-top: 10rem;
  }
</style>
@endpush

@section('body')
<x-block id="sticky-wrapper" class="bg-white sticky-wrapper line-b">
  <x-layout.inc.header />
</x-block>
@auth 

<x-block class="container-fluid bound ph">
    <x-home.welcome />
  </x-block>
@else 


<x-block class="container-fluid bg-home">
  <div class="container p-1">
    <div class="navbar-header">
      <x-logo style="top" />
      <div class="float-xs-right">
        <x-menu.top :user="Auth::user()" />
      </div>
    </div>
  </div>
  <!-- /horizontal menu content-->
  <div id="block-slide" class="container">
    <x-home.slide />
  </div>
</x-block>
@endauth



<x-block class="container-fluid bound">


  <div class="container">
    <div class="content-header text-xs-center">
      <h2 class="text-bold-600">
        {{ __("Tham gia và cùng phát triển cộng đồng Freelancer") }}
      </h2>
    </div>
    <div class="content-body pt-2">

      @foreach($list->chunk(4) as $chunk)
      <div class="row match-height">
        @foreach($chunk as $item)

        <div class="col-md-3">
          @if($item->code== 'join.comunity.new')
          <div class="card popular bg-primary box">
            <div class="card-header" style="margin-top:50%;">
              @auth
              <a href="{{route('auth.profile',Auth::user())}}">
                <h2>{{$item->tran->title}}</h2>
              </a>
              @else
              <a data-backdrop="false" data-toggle="modal" data-target="#modal-login">
                <h2>{{$item->tran->title}}</h2>
              </a>
              @endauth
            </div>
          </div>
          @else
          <div @if($item->avatar)
            data-bg-img="{{ url($item->avatar->src) }}"
            @endif
            class="lazy card popular" >


            <div class="content m-2">
              <a href="#">
                <h2 class="card-title">{{$item->tran->title}}</h2>
              </a>
            </div>

          </div>
          @endif
        </div>
        @endforeach
      </div>
      @endforeach

    </div>

  </div>

</x-block>

@endsection
@section('footer')
<x-layout.inc.footer />
@endsection
@push('outer')
<x-layout.inc.outer />
@endpush
<x-layout.simple class="bg-white" />