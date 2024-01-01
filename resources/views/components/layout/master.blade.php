@props([
'side' => 'none'
])

@push('css')
<style>
  .ph {
    padding-top: 10rem;
  }

  .content-body {
    min-height: 480px;
  }
</style>
@endpush

@section('body')
<x-block id="sticky-wrapper" class="bg-white sticky-wrapper line-b">
  <x-layout.inc.header />
  @stack('sticky')
</x-block>

<div class="content-wrapper ph">
  <div class="container">
    @hasSection('title')
    <x-block class="content-header">
      @yield('title')
    </x-block>
    @endif

    @switch($side)
    @case( 'left')
    <div class="content-body mb-3 row">
      <x-block class="col-md-3 sid">
        @yield('side')
      </x-block>
      <x-block style="z-index:99" class="col-md-9">
        @yield('content')
      </x-block>
    </div>
    @break
    @case( 'right')
    <div class="content-body row">

      <x-block style="z-index:99" class="col-md-9">
        @yield('content')
      </x-block>
      <x-block class="col-md-3 sid">
        @yield('side')
      </x-block>
    </div>
    @break

    @case( 'detail-right')
    <div class="content-body row">


      <x-block style="z-index:99" class="col-md-7">
        @yield('content')
      </x-block>
      <x-block class="offset-md-1 col-md-4 sid">
        @yield('side')
      </x-block>
    </div>
    @break
    @case( 'detail-left')
    <div class="content-body row">
      <x-block class="col-md-4 sid">
        @yield('side')
      </x-block>
      <x-block class="offset-md-1  col-md-7">
        @yield('content')
      </x-block>

    </div>
    @break
    @case( 'both')
    <div class="content-body row">
      <x-block id="sidebar" class="container-fluid row fixed">
        <div class="col-md-3 sid s-left">
          @yield('side-left')
        </div>

        <div> class="col-md-3 offset-md-6 sid s-right">
          @yield('side-right')
        </div>
      </x-block>
      <x-block style="z-index:99" class="offset-md-3 col-md-6">
        @yield('content')
      </x-block>
    </div>
    @break
    @default
    <x-block class="content-body">
      @yield('content')
    </x-block>
    @endswitch
  </div>
</div>
@endsection
@section('footer')
<x-layout.inc.footer />
@endsection

@push('outer')
<x-layout.inc.outer />
@endpush
<x-layout.simple class="bg-white" />