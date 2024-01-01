@props([
'col' => 3,
'query',
'total'=> 6,
'pagination' => true
])
@php
$products = $pagination ? $query->paginate($total) : $query->get();
@endphp

@foreach($products->chunk($col) as $chunk)
<div class="row match-height mb-2">
  @foreach( $chunk as $product )
  @php
  $freelancer = $product->freelancer;
  $avatar = empty($freelancer->avatar) ? null : url($freelancer->avatar->src);
  $image = empty($product->avatar) ? null : url($product->avatar->src);
  $name = $product->name;
  $price = number_format($product->price).'đ';
  $url_edit = route('products.edit',$product);

  @endphp
  <div class="col-md-{{ 12/$col }}">
    <div class="box">
      <div class="card">
        <a href="{{ url($product->link->pretty) }}">
          <div class="box-image lazy" data-bg-img='{{ $image }}'></div>
        </a>
        <div class="card-header">
          <div class="row mb-2">
            <div class="float-xs-left">
            <button onclick="modal_src('modal-src','{{$url_edit}}')"
             class="btn btn-sm btn-icon btn-primary"><i class="ft ft-edit"></i></button>
            </div>
            <div class="float-xs-right">
              <x-star />
           
            </div>
          </div>
          <div class="row text-justify">
                  <a href="{{ url($product->link->pretty) }}">
                    {{ Str::title($product->name) }}
                  </a>

          </div>
        </div>

      </div>

      <div class="card-footer">
        <div class="row">
          <div class="float-xs-left font-medium-2">
            <livewire:auth.like :item="$product" count="{{$product->likes->count()}}" />
          </div>
          <div class="float-xs-right ">
            {{Theme::title('start at')}}
            <span class="font-medium-2 primary text-bold-600"> {{ Theme::title( $price)  }} </span>
          </div>
        </div>
      </div>
    </div>

  </div>
  @endforeach
</div>
@endforeach
@if($pagination)
<div class="row float-xs-right">
  {{ $products->render('vendor.pagination.simple')  }}
</div>
@endif