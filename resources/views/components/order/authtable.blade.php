@props([
'query',
'total' => 12,
])

@php
$list = $query->orderByDesc('created_at')->paginate($total);
@endphp

@push('outer')
<x-form id="remove" method="DELETE" class="none">

</x-form>
@endpush
@push('script')
<script>
  function trap(action) {
    $('#remove').attr('action', action);
    $('#remove').submit();
  }
</script>

@endpush
<div class="mb-2">
  <x-order.search />
</div>

<div id="table" class="table-responsive">

  <table class="table">
    <thead>

      <th style="width:8rem">
        {{ __('Mã số') }}
      </th>
      <th>
        {{ __('Dịch vụ') }}
      </th>



      <th style="width:2rem">
        {{ __('Trạng thái') }}


      </th>
      <th style="width:2rem">
        <div class="pull-right">
          {{ __('Thao tác') }}
        </div>

      </th>

    </thead>
    <tbody>

      @foreach ($list as $row)
      @if(isset($row->item))
      @php

      $service = $row->item->product;

      @endphp

      <tr>


        <td>
          <div class="font-medium-1 text-bold-600">{{ $row->code }}</div>
          <div>{{__('Lúc') }}: {{$row->created_at}}</div>
        </td>

        <td>
          <p class="font-medium-1 text-bold-600"> {{$service->name}}</p>
          <p>{{__('Gói dịch vụ')}} : {{ $row->item->quantity }} x <span class="tag tag tag-pill tag-info"> {{ $service->pack }}</span> </p>
          <p>{{__('Đơn giá')}} : <span class="font-medium-1 text-bold-600"> {{ $service->price_format }} </span> </p>
          <p>{{__('Thành tiền')}} : <span class="font-medium-1 text-bold-600"> {{ number_format($row->total) }} đ </span> </p>

        </td>
        <td>
          @switch($row->state)
            @case('ordered')
            <span class="tag tag tag-pill tag-info">{{ __('Vừa đặt hàng') }}</span>
            @break
            @case('paid')
            <span class="tag tag tag-pill tag-info ">{{ __('Chờ xác nhận') }}</span>
            @break
            @default
            <span class="tag tag tag-pill tag-info ">{{ __($row->state) }}</span>
            @break
          @endswitch
          
         
        </td>
        <td>
          @if($row->state == 'ordered')
          <button onclick="trap('{{route('orders.destroy',$row)}}')" class="btn btn-danger btn-sm btn-icon pull-right"> <i class="ft ft-x"></i> </button>
          @endif

        </td>

      </tr>
      @endif
      @endforeach
    </tbody>


  </table>

  <div class="pull-right">
    {{$list->render('vendor.pagination.simple')}}

  </div>
</div>