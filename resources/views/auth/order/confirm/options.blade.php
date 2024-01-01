@php
  $bank  =  'technological and commercial joint- stock bank - techcombank';
  $acc   =  'Công ty TNHH MTV Lath Group';
  $num   =  '19036801918021 (VNĐ)';
  $swift =  'VTCBVNVX';
@endphp
<div class="card box">
  <h2 class="card-header">
    {{ __('Phương thức thanh toán') }}
  </h2>

  <div class="card-body">
    <div class="card-block">
      <div class="font-medium-2 ">
         {{ __('Chuyển khoản : Ngân hàng cổ phần Techcom.') }} :

      </div>
      <div>
        Swift code:<span class="font-medium-2 text-bold-600"> {{ $swift }}</span>
      </div>
    </div>

    <div class="card-block">
      <h4 class="font-medium-2 text-bold-600">
        {{ __($acc) }}
      </h4>
      <div>

        <label> {{ __('Số tài khoản') }} :</label>

        <span class="font-medium-2  text-bold-600">{{ $num }} </span>
      </div>
    </div>
    <div class="card-footer">
      <label class="font-medium-3">
        {{ __('Vui lòng chuyển tiền với nội dung bên dưới. Chúng tôi xác nhận giao dịch bằng nội dung này') }}
      </label>
      <input type="text" disabled
      class="bg-white form-control text-xs-center font-large-1 primary"
      value="PAY{{$order->id}}" />

    </div>
  </div>
</div>
