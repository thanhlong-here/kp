@php
$search = (new App\Classes\Search('order'))->get();

$name = empty($search->name) ? '' : $search->name;
$status = empty($search->status) ? '' : $search->status;
@endphp

<x-form name="search" action="{{route('search.find','client.order')}}">
  <div class="col-xs-4">
    <div class="form-group">

      <input type="text" value="{{$name}}" name="product_name" placeholder="{{__('Tên dịch vụ')}}" class="form-control">

    </div>
  </div>


  <div class="col-xs-3">
    <div class="form-group">



      <div class='input-group'>
        <input type='text' name="datetodate" placeholder="{{__('Từ ngày tới ngày')}}" class="form-control daterange" />
        <span class="input-group-addon">
          <span class="fa fa-calendar"></span>
        </span>
      </div>
    </div>
  </div>
  


  <div class="col-xs-2">
    <button class="btn btn-block btn-primary"> {{ __('Tìm kiếm') }}</button>
  </div>
</x-form>
@once
@push('script')
<script>
  (function(window, document, $) {
      $('.daterange').daterangepicker();
    }
  )(window, document, jQuery);
</script>
@endpush
@endonce