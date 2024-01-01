<div class="card">
  <div class="card-header">
    <label class="font-medium-2">
        <input type="checkbox" id="has_invoice" name="has_invoice" onclick="invoice()"  value="1">
          {{ __('Yêu cầu xuất hóa đơn ( của Freelancer )') }}
    </label>
  </div>
  <div class="card-block has_invoice none" >

    <div class="card-body edit_invoice  none">
      <div class="row mb-1">

        <div class="col-xs-4">
            <label class="font-medium-1 text-bold-400">{{ __('Tên công  ty') }} : </label>
        </div>
        <div class="col-xs-8">
          <input name="invoice_name" class="form-control"  />
        </div>

      </div>

      <div class="row mb-1">
        <div class="col-xs-4">
            <label class="font-medium-1 text-bold-400"  >{{ __('Mã số thuế') }} :  </label>
        </div>
        <div class="col-xs-8">
          <input name="invoice_tax" class="form-control"  />
        </div>
      </div>

      <div class="row mb-1">
        <div class="col-xs-4">
            <label  class="font-medium-1 text-bold-400" > {{ __("Số điện thoại") }} :  </label>
        </div>
        <div class="col-xs-8">
          <input name="invoice_phone" class="form-control"  />
        </div>
      </div>
      <div class="row mb-1">
        <div class="col-xs-4">
            <label  class="font-medium-1 text-bold-400" >{{ __("Địa chỉ") }}:  </label>
        </div>
        <div class="col-xs-8">
            <input name="invoice_address" class="form-control"  />
        </div>
      </div>
    </div>
    <label class="font-medium-1" >
      <input type="checkbox"  name="edit_invoice" onclick="edit()" checked  value="1">
        {{__('Thông tin thanh toán giống thông tin đặt hàng') }}
         <span class="text-bold-600">{{__('Hoặc chỉnh sửa')}} </span>
    </label>
  </div>



</div>
