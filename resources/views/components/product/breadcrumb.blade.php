@props(['product'])
@php
  $category = $product->category;
@endphp
<ol class="breadcrumb font-medium-1">
  <li class="breadcrumb-item">
    <a href='{{ route('home') }}' >
    {{__('Trang chủ')}}
    </a>
  </li>
  @foreach( $category->road() as $item )
  <li class="breadcrumb-item">
    <a href='{{ url($item->link->pretty) }}' >
      {{__($item->tran->name)}}
    </a>
  </li>
  @endforeach
  <li class="breadcrumb-item">
    <a href='{{ url($product->category->link->pretty) }}' >
      {{ $category->tran->name }}
    </a>
  </li>

</ol>
