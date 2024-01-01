@props([
'query',
'total' => 12,
])

@php
$list = $query->paginate($total);

@endphp

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
      @push('outer')
      <x-modal id="modal-deny-{{$row->id}}">
        <div class="modal-content">
          <x-form action="{{ route('orders.update',$row) }}" method="PUT">


            <div class="modal-header">
              <h4 class="pull-left" id="myModalLabel2"><i class="fa fa-road2"></i>#{{ $row->name }}</h4>

              <div class="pull-right">
                <button type="submit" name="act" value="cancel" class="btn btn-primary">{{__('Từ chối')}}</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{__('Quay lại')}}</button>
              </div>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label> {{Str::title(__('Lý do từ chối')) }}</label>
                <textarea name="reason" class="form-control">{{old('declined_reason')}}</textarea>
              </div>
            </div>

          </x-form>
        </div>
      </x-modal>


      <x-modal id="modal-accept-{{$row->id}}">
        <div class="modal-content">
          <x-form action="{{ route('orders.update',$row) }}" method="post">

            <div class="modal-header">
              <h4 class="pull-left" id="myModalLabel2"><i class="fa fa-road2"></i>#{{ $row->name }}</h4>

              <div class="pull-right">
                <button type="submit" name="act" value="accept" class="btn btn-primary">{{__('Chấp nhận')}}</button>
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{__('Quay lại')}}</button>
              </div>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label> {{ __('Tôi sẽ đảm bảo tiến độ của dự án!') }}</label>

              </div>
            </div>

          </x-form>
        </div>
      </x-modal>
      @endpush
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
          @if($row->state == 'paid')

          <button data-toggle="modal" data-target="#modal-deny-{{$row->id}}" class="btn btn-sm btn-block mb-2"><i class="ft ft-x"></i> {{__('Từ chối')}} </button>

          <button data-toggle="modal" data-target="#modal-accept-{{$row->id}}" class="btn btn-sm btn-primary btn-block "><i class="ft ft-zap"></i> {{__('Nhận việc')}} </button>

          @endif
          @if($row->state == 'canceled')
          <button data-toggle="modal" data-target="#modal-reason-{{$row->id}}" class="btn btn-sm btn-info btn-block "> {{__('Xem lý do')}} </button>
          @push('outer')
          <x-modal id="modal-reason-{{$row->id}}">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="pull-left" id="myModalLabel2">{{__('Lý do')}} :</h4>

                <div class="pull-right">
                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{__('Quay lại')}}</button>
                </div>
              </div>
              <div class="modal-body">
                <div class="card-block">
                  <label> {{ $row->reason }}</label>

                </div>
              </div>
            </div>
          </x-modal>
          @endpush
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