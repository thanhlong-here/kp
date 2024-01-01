@section('content')
<div class="container">
    <x-block style="z-index:9" class="col-md-8">
      @include('auth.order.confirm.options')
    </x-block>

    <x-block class="col-md-4" >
          <div class="card box">
            <div class="row font-medium-1">
              <div class="col-xs-5">
                @if($product->avatar)
                  <img loading="lazy" class="img-fluid" src="{{ url($product->avatar->src) }}" />
                @endif
              </div>
              <div class="col-xs-7" >
                 {{  $product->name }}
              </div>
            </div>
            <div class="card-body">
              <div class="card-block">
                <div class="row font-medium-2 text-bold-400 " >
                    <div class="col-xs-6">
                      <h4 class="card-title">{{ Theme::title($product->pack) }}</h4>
                    </div>
                    <div class="col-xs-6">
                      <span class="float-xs-right">
                        {{ $product->price_format }}
                      </span>
                    </div>
                </div>
                <div class="row font-medium-2 text-bold-400 " >
                    <label class="col-xs-6">
                      {{ __('Tạm tính')  }}
                    </label>
                    <div class="col-xs-6">
                      <span class="float-xs-right">
                        {{ $product->price_format }}
                      </span>
                    </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">

                <div class="row font-medium-3 mb-2 text-bold-600">
                    <label class="col-xs-6">
                        {{ __('Tổng tiền') }} :
                    </label>
                    <div class="col-xs-6" >
                      <span class="float-xs-right">
                        {{ number_format($order->total).' đ' }}
                      </span>
                    </div>
                </div>

                <x-button.confirm class="btn btn-primary btn-block" out=" {!! __('Xác nhận & thanh toán') !!}" />

              </div>
          </div>
    </x-block>

</div>
@endsection

@push('outer')
  <x-modal id="modal-confirm">
    <div class="modal-content">
      <x-form method='PUT' action="{{ route('auth.order.pay',$order) }}">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h2 class="modal-title">{{ __('Thông tin xác nhận') }}</h2>

        </div>
        <div class="modal-body">
          <div class="card-header text-justify font-medium-3 text-bold-600">
              {!! __('Xác nhận thông tin sau 24h sau khi đơn thanh toán chuyển đi') !!}
          </div>
          @include('auth.order.confirm.invoice')
        </div>
        <div class="modal-footer">
          <label class="font-medium-2 float-xs-left" >
                <input type="checkbox" required value="1">
                <span>
                  {{ __('Tôi xác nhận thông tin đơn hàng và đồng ý thanh toán') }}
                </span>
          </label>

            <button name="act" value="confirm" type="submit" class="btn btn-primary">
               {{ __('Tiếp tục') }} </button>
        </div>
      </x-from>
    </div>
  </x-modal>
@endpush

@push('x-script')

  function invoice(){
    $(".has_invoice").toggle();
  }
  function edit(){
    $(".edit_invoice").toggle();
  }
@endpush
<x-layout.pay />
