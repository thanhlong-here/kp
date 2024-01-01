@props([
'query',
'total' => 12,
])

@php
$list = $query->paginate($total);

@endphp


@push('outer')
<x-form id="confirm" method="PUT" class="none">
  <input type="hidden" name="act" value="paid" />
</x-form>
@endpush
@push('script')
<script>
  function confirm(action) {
    $('#confirm').attr('action', action);
    $('#confirm').submit();
  }
</script>

@endpush
<div id="table" class="table-responsive">


  <table class="table">
    <thead>

      <th style="width:8rem">
        {{ __('Mã số') }}
      </th>

      <th>
        {{ __('Dịch vụ') }}
      </th>
      <th>
        {{ __('Freelancer') }}
      </th>


      <th style="width:2rem">
        {{ __('Trạng thái') }}

      </th>
      <th>

      </th>

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
        <p class="text-bold-600"> {{$service->freelancer->name}}</p>

        </td>
        <td>
          <span class="tag tag tag-pill tag-info ">{{ __($row->state) }}</span>


        </td>
        <td>

          @if($row->state == 'ordered')

          <button onclick="confirm('{{route('orders.update',$row)}}')" 
          class="btn btn-sm btn-success btn-round">{{__('Xác nhân thanh toán')}} </button>

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