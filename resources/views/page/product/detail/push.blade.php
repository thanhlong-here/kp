@push('table-pack-header')
  <th>
    <h2 class="primary">{{ $product->price_format }}</h2>
    <h4 class="card-title">{{ Theme::title($product->pack) }}</h4>

  </th>
@endpush

@foreach($rows as $row => $info)
    @push('table-pack-row-'.$row)
      <td style="max-width:8rem">{{ $product->$row }}</td>
    @endpush
@endforeach

@push('table-pack-footer')
    <td>
      <x-button.cart class="btn btn-primary btn-block"
        id="{{$product->id}}"
        out="{{ __('Chọn') }}" />
    </td>
@endpush


@push("pack-header")
  <li class="nav-item flex-1">
    <a class="nav-link {{ $active ?? '' }}"
    id="tab-{{$product->pack}}" data-toggle="tab"
    href="#{{$product->pack}}" aria-expanded="false">
      <span class="font-medium-2">
       {{ Theme::title($product->pack) }}
     </span>

    </a>
  </li>
@endpush

@push("pack-body")
<div role="tab-{{$product->pack}}" class="tab-pane {{ $active ?? '' }}" id="{{$product->pack}}" aria-expanded="true" >
  <div class="text-xs-center font-large-1 text-bold-700">

        {{ $product->price_format }}

  </div>
  <div  class="card-content mb-2">
   {!! $product->description !!}
  </div>

  <div class="row font-medium-1">
    <label class="col-md-8">
     <i class='icon-calendar mr-1'></i>
     {{ __('Thời gian bàn giao') }}
   </label>
   <span class="text-bold-600">
    {{ $product->delivery }} {{__('Ngày') }}
    </span>
  </div>
  <div class="row font-medium-1 mb-2">

      <label class="col-md-8">
        <i class='icon-wrench mr-1'></i>
       {{ __('Số lần chỉnh sửa') }}
     </label>
  <span class="text-bold-600">
    {{ $product->revisions }} {{__('Lần') }}
</span>
  </div>
  <x-button.cart id="{{$product->id}}"
    class="btn btn-primary text-bold-600 font-medium-2 btn-block"
    out="{{__('Tiếp tục') }}" />
</div>
@endpush

@push('outer')
 <x-modal.cart :product="$product"  />

@endpush
